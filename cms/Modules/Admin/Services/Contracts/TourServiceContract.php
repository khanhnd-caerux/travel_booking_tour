<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface TourServiceContract extends CoreBaseServiceContract
{
    public function findBySlug($slug);

    public function getTourRelated($id, $category_id);

    public function getAllTour();

    public function getTourWithInfo();
}
