<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\TourDetailRepositoryContract;
use Cms\Modules\Core\Models\TourDetail;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class TourDetailRepository extends CoreBaseRepository implements TourDetailRepositoryContract
{
    protected $tourDetail;

    public function __construct(TourDetail $tourDetail)
    {
        parent::__construct($tourDetail);
        $this->tourDetail = $tourDetail;
    }

    public function deleteBeforeUpdate($id)
    {
        return $this->tourDetail
            ->where('tour_id', $id)
            ->delete();
    }
}
