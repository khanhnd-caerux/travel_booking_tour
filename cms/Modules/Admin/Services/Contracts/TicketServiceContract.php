<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface TicketServiceContract extends CoreBaseServiceContract
{
    public function findBySlug($slug);

    public function getTicketRelated($id, $category_id);
}
