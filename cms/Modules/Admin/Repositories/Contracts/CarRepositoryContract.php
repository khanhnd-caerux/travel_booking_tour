<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface CarRepositoryContract extends CoreBaseRepositoryContract
{
    public function findBySlug($slug);

    public function getCarRelated($id, $category_id);
}
