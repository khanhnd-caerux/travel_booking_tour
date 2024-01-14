<?php

namespace Cms\Modules\Auth\Repositories;

use Cms\Modules\Auth\Repositories\Contracts\AuthUserRepositoryContract;
use Cms\Modules\Core\Repositories\CoreBaseRepository;
use Cms\Modules\Core\Models\User;

class AuthUserRepository extends CoreBaseRepository implements AuthUserRepositoryContract
{
    protected $user;

    public function __construct()
    {
        parent::__construct(new User);
    }
}
