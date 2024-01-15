<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Cms\Modules\Core\Models\Category;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class CategoryRepository extends CoreBaseRepository implements CategoryRepositoryContract
{
    protected $category;
    
    public function __construct()
    {
        parent::__construct(new Category);
    }
}