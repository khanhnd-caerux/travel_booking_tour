<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\UserRepositoryContract;
use Cms\Modules\Core\Models\User;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class UserRepository extends CoreBaseRepository implements UserRepositoryContract
{
    protected $user;

    public function __construct(User $user)
    {
        parent::__construct($user);
        $this->user = $user;
    }

    public function getListAll()
    {
        return $this->user
            ->paginate(10);
    }
}
