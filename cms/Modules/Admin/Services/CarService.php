<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\CarRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\CarServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class CarService extends CoreBaseService implements CarServiceContract
{
    protected $repository;

    public function __construct(CarRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function findBySlug($slug)
    {
        return $this->repository->findBySlug($slug);
    }

    public function getCarRelated($id, $category_id)
    {
        return $this->repository->getCarRelated($id, $category_id);
    }
}
