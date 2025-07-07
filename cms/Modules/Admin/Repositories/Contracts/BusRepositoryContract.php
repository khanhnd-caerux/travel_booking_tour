<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface BusRepositoryContract extends CoreBaseRepositoryContract {

    public function getAllValue();

    public function getListAll();
}
