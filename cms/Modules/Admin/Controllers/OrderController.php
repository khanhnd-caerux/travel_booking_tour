<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\OrderDetailServiceContract;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    protected $orderService;
    protected $orderDetailService;

    public function __construct(
        OrderServiceContract $orderService,
        OrderDetailServiceContract $orderDetailService
    ) {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }

    public function list()
    {
        $orders = $this->orderService->paginateWithDetail(10);

        return view('Admin::order.list', compact('orders'));
    }

    public function detail($id)
    {
        $order = $this->orderService->getOrderWithDetail($id);

        return view('Admin::order.detail', compact('order'));
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $this->orderService->delete($id);
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
