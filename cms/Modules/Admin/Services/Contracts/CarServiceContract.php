<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface CarServiceContract extends CoreBaseServiceContract
{
    public function findBySlug($slug);

    public function getCarRelated($id, $category_id);
}
