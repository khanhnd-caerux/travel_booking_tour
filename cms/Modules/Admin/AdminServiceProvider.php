<?php

namespace Cms\Modules\Admin;

use Cms\CmsServiceProvider;
use Cms\Modules\Admin\Repositories\CategoryRepository;
use Cms\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\OrderDetailRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\OrderRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\PostRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\SettingRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\SliderRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\TourImageRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\TourRepositoryContract;
use Cms\Modules\Admin\Repositories\Contracts\UserRepositoryContract;
use Cms\Modules\Admin\Repositories\OrderDetailRepository;
use Cms\Modules\Admin\Repositories\OrderRepository;
use Cms\Modules\Admin\Repositories\PostRepository;
use Cms\Modules\Admin\Repositories\SettingRepository;
use Cms\Modules\Admin\Repositories\SliderRepository;
use Cms\Modules\Admin\Repositories\TourImageRepository;
use Cms\Modules\Admin\Repositories\TourRepository;
use Cms\Modules\Admin\Repositories\UserRepository;
use Cms\Modules\Admin\Services\CategoryService;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Services\Contracts\OrderDetailServiceContract;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Admin\Services\Contracts\SettingServiceContract;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourImageServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;
use Cms\Modules\Admin\Services\OrderDetailService;
use Cms\Modules\Admin\Services\OrderService;
use Cms\Modules\Admin\Services\PostService;
use Cms\Modules\Admin\Services\SettingService;
use Cms\Modules\Admin\Services\SliderService;
use Cms\Modules\Admin\Services\TourImageService;
use Cms\Modules\Admin\Services\TourService;
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
        $this->app->bind(TourServiceContract::class, TourService::class);
        $this->app->bind(TourRepositoryContract::class, TourRepository::class);
        $this->app->bind(TourImageRepositoryContract::class, TourImageRepository::class);
        $this->app->bind(TourImageServiceContract::class, TourImageService::class);
        $this->app->bind(OrderRepositoryContract::class, OrderRepository::class);
        $this->app->bind(OrderDetailRepositoryContract::class, OrderDetailRepository::class);
        $this->app->bind(OrderServiceContract::class, OrderService::class);
        $this->app->bind(OrderDetailServiceContract::class, OrderDetailService::class);
    }
}
