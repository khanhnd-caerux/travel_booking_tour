<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\TourImageRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\TourImageServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class TourImageService extends CoreBaseService implements TourImageServiceContract
{
    protected $repository;

    public function __construct(TourImageRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

}
