<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\CharityRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\CharityServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class CharityService extends CoreBaseService implements CharityServiceContract
{
    protected $repository;

    public function __construct(CharityRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
}
