<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\BusRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\BusServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class BusService extends CoreBaseService implements BusServiceContract
{
    protected $repository;

    public function __construct(BusRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function getAllValue()
    {
        return $this->repository->getAllValue();
    }

    public function getListAll()
    {
        return $this->repository->getListAll();
    }
}
