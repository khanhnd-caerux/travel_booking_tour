<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\BusRepositoryContract;
use Cms\Modules\Core\Models\Bus;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class BusRepository extends CoreBaseRepository implements BusRepositoryContract
{
    protected $bus;

    public function __construct(Bus $bus)
    {
        parent::__construct($bus);
        $this->bus = $bus;
    }

    public function getAllValue()
    {
        return $this->bus->where('deleted_at', null)->get();
    }

    public function getListAll()
    {
        return $this->bus
            ->whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }
}
