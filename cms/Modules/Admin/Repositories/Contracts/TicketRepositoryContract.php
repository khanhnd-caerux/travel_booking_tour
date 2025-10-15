<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface TicketRepositoryContract extends CoreBaseRepositoryContract
{
    public function findBySlug($slug);

    public function getTicketRelated($id, $category_id);
}
