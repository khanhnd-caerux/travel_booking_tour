<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface TourPriceServiceContract extends CoreBaseServiceContract
{
    public function getAllTourPrice($number);
}
