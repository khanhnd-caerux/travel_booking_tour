<?php

namespace Cms\Modules\Admin\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait HandleDeleteTrait
{
    /**
     * Handle delete operation with transaction and logging
     *
     * @param mixed $service
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    protected function handleDelete($service, $id)
    {
        try {
            DB::beginTransaction();
            $service->delete($id);
            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ' --- Line: ' . $exception->getLine());

            return response()->json([
                'code' => 500,
                'message' => 'error'
            ], 500);
        }
    }
}
