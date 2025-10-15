<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface CarImageRepositoryContract extends CoreBaseRepositoryContract {
    public function deleteBeforeUpdate($id);
}
