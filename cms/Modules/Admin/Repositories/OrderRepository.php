<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\OrderRepositoryContract;
use Cms\Modules\Core\Models\Order;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class OrderRepository extends CoreBaseRepository implements OrderRepositoryContract
{
    protected $order;

    public function __construct(Order $order)
    {
        parent::__construct($order);
        $this->order = $order;
    }

    public function getOrderWithDetail($id)
    {
        return $this->order
            ->with('orderDetail')
            ->where('id', $id)
            ->whereNull('deleted_at')
            ->first();
    }

    public function paginateWithDetail($number)
    {
        return $this->order
            ->with('orderDetail')
            ->whereNull('deleted_at')
            ->paginate($number);
    }
}
