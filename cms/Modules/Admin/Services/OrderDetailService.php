<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\OrderDetailRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\OrderDetailServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class OrderDetailService extends CoreBaseService implements OrderDetailServiceContract
{
    protected $repository;

    public function __construct(OrderDetailRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
}
