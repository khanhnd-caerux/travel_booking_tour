<?php

namespace Cms\Modules\Core;

use Cms\CmsServiceProvider;
use Cms\Modules\Core\Commands\CmsCreateModuleCommand;
use Cms\Modules\Core\Commands\CmsSetupCommand;
use Illuminate\Routing\Router;
use Cms\Modules\Core\ViewComposer;

class CoreServiceProvider extends CmsServiceProvider
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    /**
     * Bootstrap services.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        // COMMAND REGISTER
        if ($this->app->runningInConsole()) {
            $this->commands([
                CmsCreateModuleCommand::class,
                CmsSetupCommand::class,
            ]);
        }

        view()->composer(
            ['Core::layouts.frontend.header'],
            'Cms\Modules\Core\ViewComposer'
        );
    }

    public function register()
    {
        $this->app->singleton(ViewComposer::class);
    }
}
