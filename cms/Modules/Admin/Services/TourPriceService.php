<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\TourPriceRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\TourPriceServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class TourPriceService extends CoreBaseService implements TourPriceServiceContract
{
    protected $repository;

    public function __construct(TourPriceRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function getAllTourPrice($number)
    {
        return $this->repository->getAllTourPrice($number);
    }
}
