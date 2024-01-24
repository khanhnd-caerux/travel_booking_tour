<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;

class HomeController extends Controller
{

    protected $slider;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SliderServiceContract $slider)
    {
        $this->slider = $slider;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::index');
    }

    public function home(): \Illuminate\Contracts\Support\Renderable
    {
        $sliders = $this->slider->getAll();
        return view('Home::home', compact('sliders'));
    }
}
