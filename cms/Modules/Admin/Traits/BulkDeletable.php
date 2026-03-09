<?php

namespace Cms\Modules\Admin\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait BulkDeletable
{
    public function deleteMultiple(Request $request)
    {
        return $this->performBulkDelete($this->bulkDeleteModel, $request);
    }

    protected function performBulkDelete(string $modelClass, Request $request)
    {
        try {
            DB::beginTransaction();
            if ($request->has('ids') && is_array($request->ids)) {
                $modelClass::whereIn('id', $request->ids)->delete();
            }
            DB::commit();
            return redirect()->back()->with('success', 'Đã xoá thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi xoá');
        }
    }
}
