<?php

namespace Cms\Modules\Core;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Cms\Modules\Admin\Services\Contracts\SettingServiceContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;

class ViewComposer
{

    protected $global = [];
    protected $settingService, $categoryService, $tourService;

    private $values, $labels, $categories, $tours;

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct
    (
        SettingServiceContract $settingService,
        CategoryServiceContract $categoryService,
        TourServiceContract $tourService
    ) {
        $this->settingService = $settingService;
        $this->categoryService = $categoryService;
        $this->tourService = $tourService;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->values = $this->settingService->getAllValue()->pluck('config_value', 'config_key')->toArray();
        $this->labels = $this->settingService->getAllValue()->pluck('name', 'config_key')->toArray();
        $this->categories = $this->categoryService->getCategoryParent();
        $this->tours = $this->tourService->getAll();

        $view->with([
            'configValues' => $this->values,
            'configLabels' => $this->labels,
            'categories' => $this->categories,
            'tours' => $this->tours,
        ]);
    }
}
