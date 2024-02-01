<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\TicketImageRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\TicketImageServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class TicketImageService extends CoreBaseService implements TicketImageServiceContract
{
    protected $repository;

    public function __construct(TicketImageRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

}
