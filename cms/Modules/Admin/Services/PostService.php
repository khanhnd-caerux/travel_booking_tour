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

    public function getPostByType($type)
    {
        return $this->repository->getPostByType($type);
    }

    public function getFirstPost($type)
    {
        return $this->repository->getFirstPost($type);
    }

    public function getPostBySlug($slug)
    {
        return $this->repository->getPostBySlug($slug);
    }

    public function getPostRelated($id, $type)
    {
        return $this->repository->getPostRelated($id, $type);
    }
}
