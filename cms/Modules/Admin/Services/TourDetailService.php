<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\TourDetailRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\TourDetailServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class TourDetailService extends CoreBaseService implements TourDetailServiceContract
{
    protected $repository;

    public function __construct(TourDetailRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function getAllTourDetail($number)
    {
        return $this->repository->getAllTourDetail($number);
    }
}
