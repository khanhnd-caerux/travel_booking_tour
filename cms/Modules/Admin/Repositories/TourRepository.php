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

    public function getAllTour()
    {
        return $this->tour
            ->where('status', 0)
            ->orderBy('id', 'desc')
            ->whereNull('deleted_at')
            ->paginate(10);
    }

    public function getTourWithInfo()
    {
        return $this->tour
            ->with([
                'tourPrices' => function ($query) {
                    $query->whereNull('deleted_at')->orderBy('id', 'asc');
                },
                'tourDetails' => function ($query) {
                    $query->whereNull('deleted_at')->orderBy('id', 'asc');
                }
            ])
            ->where('status', 0)
            ->whereNull('deleted_at')
            ->get();
    }
}
