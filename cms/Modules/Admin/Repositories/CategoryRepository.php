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

    public function getAllCategory()
    {
        return $this->category
            ->where('status', 0)
            ->where('deleted_at', null)
            ->get();
    }

    public function getCateWithTour($slug)
    {
        $locale = session()->get('locale');
        return $this->category
            ->with([
                'children' => function ($q) {
                    $q->with(['tour', 'car', 'ticket']);
                }
            ])
            ->with(['tour', 'ticket', 'car'])
            ->where('slug', $slug)
            ->where('locale', $locale)
            ->where('status', 0)
            ->where('deleted_at', null)
            ->first();
    }

    public function getCategoryParent()
    {
        $locale = session()->get('locale');
        return $this->category
            ->with('children')
            ->where('parent_id', 0)
            ->where('status', 0)
            ->where('locale', $locale)
            ->where('deleted_at', null)
            ->get();
    }
}
