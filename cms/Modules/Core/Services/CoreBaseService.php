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

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function paginate($number = 15)
    {
        return $this->repository->paginate($number);
    }
}
