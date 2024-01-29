<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\SettingRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\SettingServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class SettingService extends CoreBaseService implements SettingServiceContract
{
    protected $repository;

    public function __construct(SettingRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function getAllValue()
    {
        return $this->repository->getAllValue();
    }
}
