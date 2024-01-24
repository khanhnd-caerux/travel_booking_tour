<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\OrderDetailServiceContract;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;

class OrderController extends Controller
{
    protected $orderService;
    protected $orderDetailService;

    public function __construct(
        OrderServiceContract $orderService,
        OrderDetailServiceContract $orderDetailService
    )
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }
}