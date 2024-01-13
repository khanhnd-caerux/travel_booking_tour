<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\UserRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;

class UserService implements UserServiceContract
{
    protected $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        $user = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ];
        
        return $this->repository->store($user);
    }
}