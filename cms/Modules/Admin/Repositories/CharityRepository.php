<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\CharityRepositoryContract;
use Cms\Modules\Core\Models\Charity;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class CharityRepository extends CoreBaseRepository implements CharityRepositoryContract
{
    protected $charity;

    public function __construct(Charity $charity)
    {
        parent::__construct($charity);
        $this->charity = $charity;
    }
}
