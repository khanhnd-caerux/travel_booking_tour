<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\TicketImageRepositoryContract;
use Cms\Modules\Core\Models\TicketImages;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class TicketImageRepository extends CoreBaseRepository implements TicketImageRepositoryContract
{
    protected $ticketImage;

    public function __construct(TicketImages $ticketImage)
    {
        parent::__construct($ticketImage);
        $this->ticketImage = $ticketImage;
    }

    public function deleteBeforeUpdate($id)
    {
        return $this->ticketImage
            ->where('ticket_id', $id)
            ->delete();
    }
}
