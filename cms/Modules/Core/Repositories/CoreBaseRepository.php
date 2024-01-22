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
    public function getAll()
    {
        return $this->model->paginate(10);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
