<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class CategoryService extends CoreBaseService implements CategoryServiceContract
{
    protected $repository;

    public function __construct(CategoryRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function cateWithParent()
    {
        return $this->repository->cateWithParent();
    }

    public function getCateWithTour($slug)
    {
        return $this->repository->getCateWithTour($slug);
    }

    public function getCategoryParent()
    {
        return $this->repository->getCategoryParent();
    }

    public function getAllCategory()
    {
        return $this->repository->getAllCategory();
    }

}
