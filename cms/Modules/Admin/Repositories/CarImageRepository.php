<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\CarImageRepositoryContract;
use Cms\Modules\Core\Models\CarImages;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class CarImageRepository extends CoreBaseRepository implements CarImageRepositoryContract
{
    protected $carImage;

    public function __construct(CarImages $carImage)
    {
        parent::__construct($carImage);
        $this->carImage = $carImage;
    }

    public function deleteBeforeUpdate($id)
    {
        return $this->carImage
            ->where('car_id', $id)
            ->delete();
    }
}
