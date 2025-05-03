<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\TourDetailServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourPriceServiceContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourImageServiceContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Requests\TourRequest;
use Cms\Modules\Admin\Requests\TourPriceRequest;
use Cms\Modules\Admin\Requests\TourUpdateRequest;

class TourController extends Controller
{
    protected $service, $image, $category;

    use StorageImageTrait;

    public function __construct(
        TourServiceContract $service,
        TourImageServiceContract $image,
        CategoryServiceContract $category,
        TourPriceServiceContract $tourPrice,
        TourDetailServiceContract $tourDetail
    ) {
        $this->service = $service;
        $this->image = $image;
        $this->category = $category;
        $this->tourPrice = $tourPrice;
        $this->tourDetail = $tourDetail;
    }
    public function list()
    {
        $tours = $this->service->paginate(10);
        return view('Admin::tour.list', compact('tours'));
    }

    public function create()
    {
        $categoryList = $this->category->getAllCategory();
        return view('Admin::tour.create', compact('categoryList'));
    }

    public function store(TourRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataTourCreate = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'price' => $request->price,
                'content' => $request->content,
                'tour_code' => $request->tour_code,
                'category_id' => $request->category_id,
                'destination_from' => $request->destination_from,
                'destination_to' => $request->destination_to,
                'status' => $request->status === "show" ? 0 : 1,
                'schedule' => $request->schedule,
                'vehicle' => $request->vehicle,
                'discount_percent' => $request->discount_percent,
            ];
            $dataUploadFeatureImage = $this->storageImageUpload($request, 'feature_image_path', 'tour');
            if (!empty($dataUploadFeatureImage)) {
                $dataTourCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $tour = $this->service->store($dataTourCreate);

            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $file_item) {
                    $dataTourImageDetail = $this->storageImageUploadMultiple($file_item, 'tour');
                    $tour->tourImages()->create([
                        'image_path' => $dataTourImageDetail['file_path'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.tour.list')->with('success', 'Create tour success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }

    public function update($id, TourUpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataTourCreate = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'price' => $request->price,
                'content' => $request->content,
                'tour_code' => $request->tour_code,
                'category_id' => $request->category_id,
                'destination_from' => $request->destination_from,
                'destination_to' => $request->destination_to,
                'status' => $request->status === "show" ? 0 : 1,
                'schedule' => $request->schedule,
                'vehicle' => $request->vehicle,
                'discount_percent' => $request->discount_percent,
            ];
            $dataUploadFeatureImage = $this->storageImageUpload($request, 'feature_image_path', 'tour');
            if (!empty($dataUploadFeatureImage)) {
                $dataTourCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $this->service->update($id, $dataTourCreate);

            $tourUpdated = $this->service->find($id);
            if ($request->hasFile('image_path')) {
                $tourUpdated->tourImages()->delete();
                foreach ($request->image_path as $file_item) {
                    $dataTourImageDetail = $this->storageImageUploadMultiple($file_item, 'tour');
                    $tourUpdated->tourImages()->create([
                        'image_path' => $dataTourImageDetail['file_path'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.tour.list')->with('success', 'Update tour success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $tour = $this->service->find($id);
        $categoryList = $this->category->getAll();
        return view('Admin::tour.edit', compact('tour', 'categoryList'));
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

    public function list_price()
    {
        $tourPrices = $this->tourPrice->getAllTourPrice(10);

        return view('Admin::tour-price.list', compact('tourPrices'));
    }

    public function create_price()
    {
        $tours = $this->service->getAll();
        return view('Admin::tour-price.create', compact('tours'));
    }

    public function store_price(TourPriceRequest $request)
    {
        $data = [
            'description' => $request->description,
            'price' => $request->price,
            'tour_id' => $request->tour_id
        ];
        $this->tourPrice->store($data);

        return redirect()->route('admin.tour_price.list')->with('success', 'Create tour price success!');
    }

    public function delete_price($id)
    {
        try {
            DB::beginTransaction();
            $this->tourPrice->delete($id);
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

    public function edit_price($id)
    {
        $tourPrice = $this->tourPrice->find($id);
        $tours = $this->service->getAll();

        return view('Admin::tour-price.edit', compact('tourPrice', 'tours'));
    }

    public function update_price($id, TourPriceRequest $request)
    {
        $data = [
            'description' => $request->description,
            'price' => $request->price,
            'tour_id' => $request->tour_id
        ];
        $this->tourPrice->update($id, $data);

        return redirect()->route('admin.tour_price.list')->with('success', 'Update tour success!');
    }
}
