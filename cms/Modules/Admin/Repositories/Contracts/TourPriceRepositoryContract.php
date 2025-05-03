<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface TourPriceRepositoryContract extends CoreBaseRepositoryContract {
    public function deleteBeforeUpdate($id);

    public function getAllTourPrice($number);
}
