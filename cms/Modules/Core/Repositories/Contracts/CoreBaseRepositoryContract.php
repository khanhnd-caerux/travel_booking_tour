<?php

namespace Cms\Modules\Core\Repositories\Contracts;

interface CoreBaseRepositoryContract {
    public function store($data);
    public function getAll();
    public function update($id, $data);
    public function find($id);
    public function delete($id);
}