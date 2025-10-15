<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface CategoryRepositoryContract extends CoreBaseRepositoryContract {
    public function cateWithParent();

    public function getCateWithTour($slug);

    public function getCategoryParent();

    public function getAllCategory();
}
