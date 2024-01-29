<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface SettingRepositoryContract extends CoreBaseRepositoryContract {

    public function getAllValue();
}
