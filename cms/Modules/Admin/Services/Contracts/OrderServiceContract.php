<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface OrderServiceContract extends CoreBaseServiceContract
{
    public function getOrderWithDetail($id);

    public function paginateWithDetail($number);
}
