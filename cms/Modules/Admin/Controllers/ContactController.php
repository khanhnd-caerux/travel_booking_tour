<?php

namespace Cms\Modules\Admin\Controllers;

use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Requests\ContactRequest;

class ContactController extends Controller
{
    protected $service;

    use StorageImageTrait;

    public function __construct(ContactServiceContract $service)
    {
        $this->service = $service;
    }
    public function list()
    {
        $contacts = $this->service->getAllContact(10);

        return view('Admin::contact.list', compact('contacts'));
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

    public function updateStatus($id)
    {
        try {
            DB::beginTransaction();
            $this->service->update($id, ['status' => 1]);
            DB::commit();
            return redirect()->back()->with('success', 'Đã cập nhật trạng thái liên hệ');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
            return redirect()->back()->with('error', 'Có lỗi xảy ra');
        }
    }
}
