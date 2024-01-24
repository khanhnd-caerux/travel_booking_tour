<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\OrderRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class OrderService extends CoreBaseService implements OrderServiceContract
{
    protected $orderRepository;

    public function __construct(OrderRepositoryContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
}
