<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\TicketRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\TicketServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class TicketService extends CoreBaseService implements TicketServiceContract
{
    protected $repository;

    public function __construct(TicketRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function findBySlug($slug)
    {
        return $this->repository->findBySlug($slug);
    }

    public function getTicketRelated($id, $category_id)
    {
        return $this->repository->getTicketRelated($id, $category_id);
    }
}
