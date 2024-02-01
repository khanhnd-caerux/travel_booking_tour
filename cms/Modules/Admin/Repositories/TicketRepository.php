<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\TicketRepositoryContract;
use Cms\Modules\Core\Models\Ticket;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class TicketRepository extends CoreBaseRepository implements TicketRepositoryContract
{
    protected $ticket;

    public function __construct(Ticket $ticket)
    {
        parent::__construct($ticket);
        $this->ticket = $ticket;
    }

    public function findBySlug($slug)
    {
        return $this->ticket
            ->with([
                'ticketImages' => function ($query) {
                    $query->whereNull('deleted_at');
                }
            ])
            ->where('slug', $slug)
            ->where('status', 0)
            ->where('deleted_at', null)
            ->first();
    }

    public function getTicketRelated($id, $category_id)
    {
        return $this->ticket
            ->where('id', '<>', $id)
            ->where('category_id', $category_id)
            ->whereNull('deleted_at')
            ->where('status', 0)
            ->get();
    }

}
