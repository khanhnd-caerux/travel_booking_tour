<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\CarImageRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\CarImageServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class CarImageService extends CoreBaseService implements CarImageServiceContract
{
    protected $repository;

    public function __construct(CarImageRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

}
