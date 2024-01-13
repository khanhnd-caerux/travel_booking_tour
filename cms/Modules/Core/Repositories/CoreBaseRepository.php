<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Models\User;
use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;
use Illuminate\Database\Eloquent\Model;

class CoreBaseRepository implements CoreBaseRepositoryContract
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function store($data)
    {
        return $this->model->create($data);
    }
}
