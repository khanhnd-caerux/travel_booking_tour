<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\ContactRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class ContactService extends CoreBaseService implements ContactServiceContract
{
    protected $repository;

    public function __construct(ContactRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
}
