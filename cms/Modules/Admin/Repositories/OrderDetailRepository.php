<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\OrderDetailRepositoryContract;
use Cms\Modules\Core\Models\OrderDetail;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class OrderDetailRepository extends CoreBaseRepository implements OrderDetailRepositoryContract
{
    protected $orderDetail;

    public function __construct(OrderDetail $orderDetail)
    {
        parent::__construct($orderDetail);
        $this->orderDetail = $orderDetail;
    }
}