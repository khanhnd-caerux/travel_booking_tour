<?php

namespace Cms\Modules\Core;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Cms\Modules\Admin\Services\Contracts\SettingServiceContract;

class ViewComposer
{

    protected $global = [];
    protected $settingService;

    private $values, $labels;

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct
    (
        SettingServiceContract $settingService
    ) {
        $this->settingService = $settingService;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->values = $this->settingService->getAll()->pluck('config_value', 'config_key')->toArray();
        $this->labels = $this->settingService->getAll()->pluck('name', 'config_key')->toArray();

        $view->with([
            'configValues' => $this->values,
            'configLabels' => $this->labels
        ]);
    }
}
