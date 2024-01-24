<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Components\Recusive;
use Cms\Modules\Admin\Requests\CategoryRequest;

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
        $categories = $this->service->cateWithParent();
        return view('Admin::category.list', compact('categories'));
    }

    public function create(Request $request)
    {
        $categoryList = $this->getCategory($parent_id = '');

        return view('Admin::category.create', compact('categoryList'));
    }

    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataCategoryCreate = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'status' => $request->status === "show" ? 0 : 1,
                'parent_id' => $request->parent_id,
            ];

            $this->service->store($dataCategoryCreate);
            DB::commit();
            return redirect()->route('admin.category.list')->with('success', 'Created category success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }

    public function edit($id)
    {
        $category = $this->service->find($id);
        $categoryList = $this->getCategory($category->parent_id);
        return view('Admin::category.edit', compact('category', 'categoryList'));
    }

    public function update($id, CategoryRequest $request)
    {

        try {
            DB::beginTransaction();
            $data = [
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'description' => $request->description,
                'slug' => Str::slug($request->name),
                'status' => $request->status === "show" ? 0 : 1,
            ];
            $this->service->update($id, $data);
            DB::commit();
            return redirect()->route('admin.category.list')->with('success', 'Updated category success!');
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

    public function getCategory($parent_id)
    {
        $data = $this->service->getAll();
        $recusive = new Recusive($data);
        $categoryList = $recusive->categoryRecusive($parent_id);

        return $categoryList;
    }

}
