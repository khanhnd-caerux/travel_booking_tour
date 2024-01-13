<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;
use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

class CoreBaseService implements CoreBaseServiceContract
{
    protected $repository;

    public function __construct(CoreBaseRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }
}