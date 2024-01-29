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

    public function findBySlug($slug)
    {
        return $this->tour
            ->with([
                'tourImages' => function ($query) {
                    $query->whereNull('deleted_at');
                }
            ])
            ->where('slug', $slug)
            ->where('status', 0)
            ->where('deleted_at', null)
            ->first();
    }

    public function getTourRelated($id, $category_id)
    {
        return $this->tour
            ->where('id', '<>', $id)
            ->where('category_id', $category_id)
            ->whereNull('deleted_at')
            ->where('status', 0)
            ->get();
    }

}
