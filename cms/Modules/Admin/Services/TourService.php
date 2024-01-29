<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\TourRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class TourService extends CoreBaseService implements TourServiceContract
{
    protected $repository;

    public function __construct(TourRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function findBySlug($slug)
    {
        return $this->repository->findBySlug($slug);
    }

    public function getTourRelated($id, $category_id)
    {
        return $this->repository->getTourRelated($id, $category_id);
    }
}
