<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Cms\Modules\Core\Models\Category;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class CategoryRepository extends CoreBaseRepository implements CategoryRepositoryContract
{
    protected $category;

    public function __construct(Category $category)
    {
        parent::__construct($category);
        $this->category = $category;
    }

    public function cateWithParent()
    {
        return $this->category->with('parent')->paginate(10);
    }

    public function getCateWithTour($slug)
    {
        return $this->category
            ->with([
                'children' => function ($q) {
                    $q->with('tour');
                }
            ])
            ->with('tour')
            ->where('slug', $slug)
            ->where('status', 0)
            ->where('deleted_at', null)
            ->first();
    }

    public function getCategoryParent()
    {
        return $this->category
            ->with('children')
            ->where('parent_id', 0)
            ->where('status', 0)
            ->where('deleted_at', null)
            ->get();
    }
}
