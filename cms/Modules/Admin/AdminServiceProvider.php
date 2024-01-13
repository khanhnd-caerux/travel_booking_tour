<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Cms\Modules\Admin\Repositories\Contracts\UserRepositoryContract;
use Cms\Modules\Admin\Repositories\UserRepository;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;
use Cms\Modules\Admin\Services\UserService;
use Illuminate\Routing\Router;

class AdminServiceProvider extends CmsServiceProvider{
    public function boot(Router $router)
    {
        parent::boot($router);
    }

    public function register()
    {
        $this->app->bind(UserServiceContract::class, UserService::class);
        $this->app->bind(UserRepositoryContract::class, UserRepository::class);
    }
}