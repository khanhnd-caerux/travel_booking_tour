<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface TourDetailRepositoryContract extends CoreBaseRepositoryContract {
    public function deleteBeforeUpdate($id);
    public function getAllTourDetail($number);
}
