<?php

namespace Cms\Modules\Core\Services\Contracts;

interface CoreBaseServiceContract
{
    public function store($data);
    public function getAll();
    public function update($id, $data);
    public function find($id);
    public function delete($id);
    public function paginate($number);
}
