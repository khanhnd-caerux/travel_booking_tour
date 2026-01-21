<?php

namespace Cms\Modules\Admin\Controllers;

use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Traits\HandleDeleteTrait;
use Cms\Modules\Admin\Traits\HandleTransactionTrait;
use Cms\Modules\Admin\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected $service;

    use StorageImageTrait, HandleDeleteTrait, HandleTransactionTrait;

    public function __construct(PostServiceContract $service)
    {
        $this->service = $service;
    }
    public function list()
    {
        $posts = $this->service->getAllPosts();
        return view('Admin::post.list', compact('posts'));
    }

    public function create()
    {
        return view('Admin::post.create');
    }

    public function store(PostRequest $request)
    {
        return $this->executeInTransaction(
            function () use ($request) {
                $dataPost = [
                    'title' => $request->title,
                    'type' => $request->type,
                    'slug' => Str::slug($request->title),
                    'content' => $request->content,
                    'status' => $request->status === 'show' ? 0 : 1,
                    'description' => $request->description
                ];

                $dataImage = $this->storageImageUpload($request, 'image_path', 'post');

                if (!empty($dataImage)) {
                    $dataPost['image_name'] = $dataImage['file_name'];
                    $dataPost['image_path'] = $dataImage['file_path'];
                }

                $this->service->store($dataPost);
            },
            'Created post success!',
            'admin.post.list'
        );
    }

    public function update($id, PostRequest $request)
    {
        return $this->executeInTransaction(
            function () use ($id, $request) {
                $dataPost = [
                    'title' => $request->title,
                    'type' => $request->type,
                    'slug' => Str::slug($request->title),
                    'content' => $request->content,
                    'status' => $request->status === 'show' ? 0 : 1,
                    'description' => $request->description
                ];

                $dataImage = $this->storageImageUpload($request, 'image_path', 'post');

                if (!empty($dataImage)) {
                    $dataPost['image_name'] = $dataImage['file_name'];
                    $dataPost['image_path'] = $dataImage['file_path'];
                }

                $this->service->update($id, $dataPost);
            },
            'Update post success!',
            'admin.post.list'
        );
    }
    public function edit($id)
    {
        $post = $this->service->find($id);
        return view('Admin::post.edit', compact('post'));
    }

    public function delete($id)
    {
        return $this->handleDelete($this->service, $id);
    }
}
