<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $service;

    use StorageImageTrait;

    public function __construct(CategoryServiceContract $service)
    {
        $this->service = $service;
    }

    public function list()
    {
        $categories = $this->service->getAll();
        return view('Admin::category.list', compact('categories'));
    }

    public function create(Request $request)
    {
        return view('Admin::category.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataCategoryCreate = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'status' => $request->status === "show" ? 0 : 1,
                'content' => $request->content,
                'parent_id' => $request->parent_id,
            ];
            $dataUploadFeatureImage = $this->storageImageUpload($request, 'image_path', 'category');
            if (!empty($dataUploadFeatureImage)) {
                $dataCategoryCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataCategoryCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $this->service->store($dataCategoryCreate);
            DB::commit();
            return redirect()->route('admin.category.list');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
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
