<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Services\Contracts\CarServiceContract;
use Cms\Modules\Admin\Services\Contracts\CarImageServiceContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Requests\CarRequest;
use Cms\Modules\Admin\Requests\CarUpdateRequest;

class CarController extends Controller
{
    protected $service, $image, $category;

    use StorageImageTrait;

    public function __construct(CarServiceContract $service, CarImageServiceContract $image, CategoryServiceContract $category)
    {
        $this->service = $service;
        $this->image = $image;
        $this->category = $category;
    }
    public function list()
    {
        $cars = $this->service->getAll();
        return view('Admin::car.list', compact('cars'));
    }

    public function create()
    {
        $categoryList = $this->category->getAllCategory();
        return view('Admin::car.create', compact('categoryList'));
    }

    public function store(CarRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataCarCreate = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'price' => $request->price,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'destination_from' => $request->destination_from,
                'destination_to' => $request->destination_to,
                'road' => $request->road,
                'status' => $request->status === "show" ? 0 : 1,
                'free' => $request->free,
                'discount_percent' => $request->discount_percent,
            ];
            $dataUploadFeatureImage = $this->storageImageUpload($request, 'feature_image_path', 'car');
            if (!empty($dataUploadFeatureImage)) {
                $dataCarCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $car = $this->service->store($dataCarCreate);

            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $file_item) {
                    $dataCarImageDetail = $this->storageImageUploadMultiple($file_item, 'car');
                    $car->carImages()->create([
                        'image_path' => $dataCarImageDetail['file_path'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.car.list')->with('success', 'Create car success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }

    public function update($id, CarUpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataCarCreate = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'price' => $request->price,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'destination_from' => $request->destination_from,
                'destination_to' => $request->destination_to,
                'road' => $request->road,
                'status' => $request->status === "show" ? 0 : 1,
                'free' => $request->free,
                'discount_percent' => $request->discount_percent,
            ];
            $dataUploadFeatureImage = $this->storageImageUpload($request, 'feature_image_path', 'car');
            if (!empty($dataUploadFeatureImage)) {
                $dataCarCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $this->service->update($id, $dataCarCreate);

            $carUpdated = $this->service->find($id);
            if ($request->hasFile('image_path')) {
                $carUpdated->carImages()->delete();
                foreach ($request->image_path as $file_item) {
                    $dataCarImageDetail = $this->storageImageUploadMultiple($file_item, 'car');
                    $carUpdated->carImages()->create([
                        'image_path' => $dataCarImageDetail['file_path'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.car.list')->with('success', 'Update car success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $car = $this->service->find($id);
        $categoryList = $this->category->getAll();
        return view('Admin::car.edit', compact('car', 'categoryList'));
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $this->service->delete($id);
            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
}
