<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\CarRepositoryContract;
use Cms\Modules\Core\Models\Car;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class CarRepository extends CoreBaseRepository implements CarRepositoryContract
{
    protected $car;

    public function __construct(Car $car)
    {
        parent::__construct($car);
        $this->car = $car;
    }

    public function findBySlug($slug)
    {
        return $this->car
            ->with([
                'carImages' => function ($query) {
                    $query->whereNull('deleted_at');
                }
            ])
            ->where('slug', $slug)
            ->where('status', 0)
            ->where('deleted_at', null)
            ->first();
    }

    public function getCarRelated($id, $category_id)
    {
        return $this->car
            ->where('id', '<>', $id)
            ->where('category_id', $category_id)
            ->whereNull('deleted_at')
            ->where('status', 0)
            ->get();
    }

}
