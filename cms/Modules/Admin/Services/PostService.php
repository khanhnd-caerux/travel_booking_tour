<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\PostRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class PostService extends CoreBaseService implements PostServiceContract
{
    protected $repository;

    public function __construct(PostRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

}
