<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\SliderRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class SliderService extends CoreBaseService implements SliderServiceContract
{
    protected $repository;

    public function __construct(SliderRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

}
