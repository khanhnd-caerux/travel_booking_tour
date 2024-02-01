<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface CategoryServiceContract extends CoreBaseServiceContract
{
    public function cateWithParent();

    public function getCateWithTour($slug);

    public function getCategoryParent();

    public function getAllCategory();
}
