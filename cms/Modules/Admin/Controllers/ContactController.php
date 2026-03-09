<?php

namespace Cms\Modules\Admin\Controllers;

use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Traits\BulkDeletable;
use Cms\Modules\Admin\Requests\ContactRequest;

class ContactController extends Controller
{
    protected $service;

    use StorageImageTrait, BulkDeletable;

    protected string $bulkDeleteModel = \Cms\Modules\Core\Models\Contact::class;

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

    public function updateAllStatus()
    {
        try {
            DB::beginTransaction();
            \Cms\Modules\Core\Models\Contact::where('status', 0)->update(['status' => 1]);
            DB::commit();
            return redirect()->back()->with('success', 'Đã xác nhận tất cả các liên hệ mới');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi cập nhật trạng thái');
        }
    }

    public function export()
    {
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=danh-sach-lien-he.csv",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $contacts = \Cms\Modules\Core\Models\Contact::orderBy('id', 'desc')->get();
        $columns = ['STT', 'Tên khách hàng', 'Email', 'SĐT', 'Ghi chú', 'Địa chỉ', 'Trạng thái', 'Ngày tạo'];

        $callback = function() use($contacts, $columns) {
            $file = fopen('php://output', 'w');
            
            // Add UTF-8 BOM to make it open normally in Excel
            fputs($file, chr(0xEF) . chr(0xBB) . chr(0xBF));
            fputcsv($file, $columns);
            
            $i = 1;
            foreach ($contacts as $contact) {
                $status = $contact->status == 0 ? 'Mới' : 'Đã xử lý';
                $row = [
                    $i++,
                    $contact->full_name,
                    $contact->email,
                    $contact->whats_app,
                    $contact->note,
                    $contact->country,
                    $status,
                    $contact->created_at ? $contact->created_at->format('Y-m-d H:i:s') : ''
                ];
                fputcsv($file, $row);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
