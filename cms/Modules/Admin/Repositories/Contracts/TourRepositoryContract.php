<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface TourRepositoryContract extends CoreBaseRepositoryContract
{
    public function findBySlug($slug);

    public function getTourRelated($id, $category_id);
}
