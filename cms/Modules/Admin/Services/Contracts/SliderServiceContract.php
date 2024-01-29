<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface SliderServiceContract extends CoreBaseServiceContract
{
    public function getByType($type);
}
