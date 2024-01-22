<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\TourImageRepositoryContract;
use Cms\Modules\Core\Models\TourImage;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class TourImageRepository extends CoreBaseRepository implements TourImageRepositoryContract
{
    protected $tourImage;

    public function __construct(TourImage $tourImage)
    {
        parent::__construct($tourImage);
        $this->tourImage = $tourImage;
    }
}
