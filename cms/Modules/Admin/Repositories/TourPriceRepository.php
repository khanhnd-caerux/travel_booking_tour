<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\TourPriceRepositoryContract;
use Cms\Modules\Core\Models\TourPrice;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class TourPriceRepository extends CoreBaseRepository implements TourPriceRepositoryContract
{
    protected $tourPrice;

    public function __construct(TourPrice $tourPrice)
    {
        parent::__construct($tourPrice);
        $this->tourPrice = $tourPrice;
    }

    public function getAllTourPrice($number)
    {
        return $this->tourPrice
            ->where('deleted_at', null)
            ->orderBy('created_at', 'desc')
            ->paginate($number);
    }

    public function deleteBeforeUpdate($id)
    {
        return $this->tourPrice
            ->where('tour_id', $id)
            ->delete();
    }
}
