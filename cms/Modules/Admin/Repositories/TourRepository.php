<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\TourRepositoryContract;
use Cms\Modules\Core\Models\Tour;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class TourRepository extends CoreBaseRepository implements TourRepositoryContract
{
    protected $tour;

    public function __construct(Tour $tour)
    {
        parent::__construct($tour);
        $this->tour = $tour;
    }
}
