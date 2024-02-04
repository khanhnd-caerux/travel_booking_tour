<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface OrderRepositoryContract extends CoreBaseRepositoryContract
{
    public function getOrderWithDetail($id);
}
