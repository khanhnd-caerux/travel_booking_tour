<?php

namespace Cms\Modules\Admin\Controllers;

use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;

class PostController extends Controller
{
    protected $service;

    use StorageImageTrait;

    public function __construct(PostServiceContract $service)
    {
        $this->service = $service;
    }
    public function list()
    {
        $posts = $this->service->getAll();
        return view('Admin::post.list', compact('posts'));
    }

    public function create()
    {
        return view('Admin::post.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataPost = [
                'title' => $request->title,
                'type' => $request->type,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'status' => $request->status === 'show' ? 0 : 1
            ];

            $dataImage = $this->storageImageUpload($request, 'image_path', 'post');

            if (!empty($dataImage)) {
                $dataPost['image_name'] = $dataImage['file_name'];
                $dataPost['image_path'] = $dataImage['file_path'];
            }

            $this->service->store($dataPost);

            DB::commit();

            return redirect()->route('admin.post.list')->with('success', 'Created post success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $dataPost = [
                'title' => $request->title,
                'type' => $request->type,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'status' => $request->status === 'show' ? 0 : 1
            ];

            $dataImage = $this->storageImageUpload($request, 'image_path', 'post');

            if (!empty($dataImage)) {
                $dataPost['image_name'] = $dataImage['file_name'];
                $dataPost['image_path'] = $dataImage['file_path'];
            }
            $this->service->update($id, $dataPost);
            DB::commit();
            return redirect()->route('admin.post.list')->with('success', 'Update post success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $post = $this->service->find($id);
        return view('Admin::post.edit', compact('post'));
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
