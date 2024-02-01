<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface TicketImageRepositoryContract extends CoreBaseRepositoryContract {
    public function deleteBeforeUpdate($id);
}
