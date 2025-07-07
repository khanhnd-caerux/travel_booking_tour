<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface BusServiceContract extends CoreBaseServiceContract
{
    public function getAllValue();
    public function getListAll();
}
