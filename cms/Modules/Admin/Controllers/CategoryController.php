<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Traits\HandleDeleteTrait;
use Cms\Modules\Admin\Traits\HandleTransactionTrait;
use Cms\Modules\Admin\Components\Recusive;
use Cms\Modules\Admin\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $service;

    use StorageImageTrait, HandleDeleteTrait, HandleTransactionTrait;

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
        return $this->executeInTransaction(
            function () use ($request) {
                $dataCategoryCreate = [
                    'name' => $request->name,
                    'slug' => Str::slug($request->name),
                    'description' => $request->description,
                    'status' => $request->status === "show" ? 0 : 1,
                    'parent_id' => $request->parent_id,
                    'type' => $request->type,
                    'locale' => $request->locale,
                ];

                $dataImage = $this->storageImageUpload($request, 'image_path', 'category');

                if (!empty($dataImage)) {
                    $dataCategoryCreate['image_path'] = $dataImage['file_path'];
                }

                $this->service->store($dataCategoryCreate);
            },
            'Created category success!',
            'admin.category.list'
        );
    }

    public function edit($id)
    {
        $category = $this->service->find($id);
        $categoryList = $this->getCategory($category->parent_id);
        return view('Admin::category.edit', compact('category', 'categoryList'));
    }

    public function update($id, CategoryRequest $request)
    {
        return $this->executeInTransaction(
            function () use ($id, $request) {
                $data = [
                    'name' => $request->name,
                    'parent_id' => $request->parent_id,
                    'description' => $request->description,
                    'slug' => Str::slug($request->name),
                    'status' => $request->status === "show" ? 0 : 1,
                    'type' => $request->type,
                    'locale' => $request->locale,
                ];

                $dataImage = $this->storageImageUpload($request, 'image_path', 'category');

                if (!empty($dataImage)) {
                    $data['image_path'] = $dataImage['file_path'];
                }

                $this->service->update($id, $data);
            },
            'Updated category success!',
            'admin.category.list'
        );
    }

    public function delete($id)
    {
        return $this->handleDelete($this->service, $id);
    }

    public function getCategory($parent_id)
    {
        $data = $this->service->getAllCategory();
        $recusive = new Recusive($data);
        $categoryList = $recusive->categoryRecusive($parent_id);

        return $categoryList;
    }

}
