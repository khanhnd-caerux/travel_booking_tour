<?php

namespace Cms;

use Cms\Modules\Admin\AdminServiceProvider;
use Cms\Modules\Auth\AuthServiceProvider;
use Cms\Modules\Core\CoreServiceProvider;
use Cms\Modules\Home\HomeServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use File;

class CmsServiceProvider extends ServiceProvider
{
    protected $routeMiddleware = [];

    public function boot(Router $router)
    {
        $this->configureDatabase();
        $this->configureSSL();
        $this->registerHelpers();
        $this->registerModules($router);
        $this->registerMiddleware($router);
    }

    public function register()
    {
        $this->app->register(CoreServiceProvider::class);
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(AdminServiceProvider::class);
        $this->app->register(HomeServiceProvider::class);
    }

    private function configureDatabase()
    {
        Schema::defaultStringLength(191);
    }

    private function configureSSL()
    {
        if (config('app.force_ssl')) {
            URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS', 'on');
        }
    }

    private function registerHelpers()
    {
        $helperPath = __DIR__ . '/helpers.php';
        if (file_exists($helperPath)) {
            require_once $helperPath;
        }
    }

    private function registerModules(Router $router)
    {
        $modulesDIR = __DIR__ . '/Modules';
        $modules = array_map('basename', File::directories($modulesDIR));

        foreach ($modules as $module) {
            $this->registerModule($module, $modulesDIR, $router);
        }
    }

    private function registerModule($module, $modulesDIR, Router $router)
    {
        $modulePath = $modulesDIR . '/' . $module;

        $this->loadModuleHelper($modulePath);
        $this->loadModuleRoutes($modulePath);
        $this->loadModuleViews($modulePath, $module);
        $this->loadModuleMigrations($modulePath);
        $this->loadModuleConfigs($modulePath);
    }

    private function loadModuleHelper($modulePath)
    {
        $helperPath = $modulePath . '/helpers.php';
        if (file_exists($helperPath)) {
            require_once $helperPath;
        }
    }

    private function loadModuleRoutes($modulePath)
    {
        $routePath = $modulePath . '/routes.php';
        if (file_exists($routePath)) {
            $this->loadRoutesFrom($routePath);
        }
    }

    private function loadModuleViews($modulePath, $module)
    {
        $viewPath = $modulePath . '/Views';
        if (is_dir($viewPath)) {
            $this->loadViewsFrom($viewPath, $module);
        }
    }

    private function loadModuleMigrations($modulePath)
    {
        $migrationPath = $modulePath . '/Databases/Migrations';
        if (is_dir($migrationPath)) {
            $this->loadMigrationsFrom($migrationPath);
        }
    }

    private function loadModuleConfigs($modulePath)
    {
        $configPath = $modulePath . '/Config';
        if (!is_dir($configPath)) {
            return;
        }

        $configFiles = scandir($configPath);
        foreach ($configFiles as $config) {
            if (pathinfo($config, PATHINFO_EXTENSION) !== 'php') {
                continue;
            }

            $key = basename($config, '.php');
            $path = $configPath . '/' . $config;
            $this->mergeModuleConfig($key, $path);
        }
    }

    private function mergeModuleConfig($key, $path)
    {
        if (!$this->app->runningInConsole()) {
            if (!$this->app->configurationIsCached()) {
                $this->app['config']->set($key, require $path);
            }
        } else {
            $argv = $this->app['request']->server('argv') ?? [];
            if (!empty($argv) && isset($argv[1]) && $argv[1] === 'config:cache') {
                $this->app['config']->set($key, require $path);
            }
        }
    }

    private function registerMiddleware(Router $router)
    {
        foreach ($this->routeMiddleware as $name => $class) {
            $router->aliasMiddleware($name, $class);
        }
    }
}

