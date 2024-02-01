<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Services\Contracts\TicketServiceContract;
use Cms\Modules\Admin\Services\Contracts\TicketImageServiceContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Requests\TicketRequest;
use Cms\Modules\Admin\Requests\TicketUpdateRequest;

class TicketController extends Controller
{
    protected $service, $image, $category;

    use StorageImageTrait;

    public function __construct(TicketServiceContract $service, TicketImageServiceContract $image, CategoryServiceContract $category)
    {
        $this->service = $service;
        $this->image = $image;
        $this->category = $category;
    }
    public function list()
    {
        $tickets = $this->service->getAll();
        return view('Admin::ticket.list', compact('tickets'));
    }

    public function create()
    {
        $categoryList = $this->category->getAllCategory();
        return view('Admin::ticket.create', compact('categoryList'));
    }

    public function store(TicketRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataTicketCreate = [
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
            $dataUploadFeatureImage = $this->storageImageUpload($request, 'feature_image_path', 'ticket');
            if (!empty($dataUploadFeatureImage)) {
                $dataTicketCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $ticket = $this->service->store($dataTicketCreate);

            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $file_item) {
                    $dataTicketImageDetail = $this->storageImageUploadMultiple($file_item, 'ticket');
                    $ticket->ticketImages()->create([
                        'image_path' => $dataTicketImageDetail['file_path'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.ticket.list')->with('success', 'Create ticket success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }

    public function update($id, TicketUpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataTicketCreate = [
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
            $dataUploadFeatureImage = $this->storageImageUpload($request, 'feature_image_path', 'ticket');
            if (!empty($dataUploadFeatureImage)) {
                $dataTicketCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $this->service->update($id, $dataTicketCreate);

            $ticketUpdated = $this->service->find($id);
            if ($request->hasFile('image_path')) {
                $ticketUpdated->ticketImages()->delete();
                foreach ($request->image_path as $file_item) {
                    $dataTicketImageDetail = $this->storageImageUploadMultiple($file_item, 'ticket');
                    $ticketUpdated->ticketImages()->create([
                        'image_path' => $dataTicketImageDetail['file_path'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.ticket.list')->with('success', 'Update ticket success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $ticket = $this->service->find($id);
        $categoryList = $this->category->getAll();
        return view('Admin::ticket.edit', compact('ticket', 'categoryList'));
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
