<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Cms\Modules\Admin\Repositories\CategoryRepository;
use Cms\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\UserRepositoryContract;
use Cms\Modules\Admin\Repositories\UserRepository;
use Cms\Modules\Admin\Services\CategoryService;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
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
        $this->app->bind(CategoryRepositoryContract::class, CategoryRepository::class);
        $this->app->bind(CategoryServiceContract::class, CategoryService::class);
    }
}