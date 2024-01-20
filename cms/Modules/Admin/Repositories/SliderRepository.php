<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\SliderRepositoryContract;
use Cms\Modules\Core\Models\Slider;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class SliderRepository extends CoreBaseRepository implements SliderRepositoryContract
{
    protected $slider;

    public function __construct(Slider $slider)
    {
        parent::__construct($slider);
        $this->slider = $slider;
    }
}
