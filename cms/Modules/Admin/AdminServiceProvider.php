<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Cms\Modules\Admin\Repositories\CategoryRepository;
use Cms\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\PostRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\SettingRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\SliderRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\UserRepositoryContract;
use Cms\Modules\Admin\Repositories\PostRepository;
use Cms\Modules\Admin\Repositories\SettingRepository;
use Cms\Modules\Admin\Repositories\SliderRepository;
use Cms\Modules\Admin\Repositories\UserRepository;
use Cms\Modules\Admin\Services\CategoryService;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Admin\Services\Contracts\SettingServiceContract;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;
use Cms\Modules\Admin\Services\PostService;
use Cms\Modules\Admin\Services\SettingService;
use Cms\Modules\Admin\Services\SliderService;
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
        $this->app->bind(SettingServiceContract::class, SettingService::class);
        $this->app->bind(SettingRepositoryContract::class, SettingRepository::class);
        $this->app->bind(SliderRepositoryContract::class, SliderRepository::class);
        $this->app->bind(SliderServiceContract::class, SliderService::class);
        $this->app->bind(PostServiceContract::class, PostService::class);
        $this->app->bind(PostRepositoryContract::class, PostRepository::class);
    }
}
