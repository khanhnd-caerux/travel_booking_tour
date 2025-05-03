<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;

class DashboardController extends Controller
{
    protected $tour, $car, $ticket, $order;

    public function __construct
    (
        TourServiceContract $tour
    ) {
        $this->tour = $tour;
    }
    public function dashboard()
    {
        $tourNumber = $this->tour->getAll()->count();

        return view('Admin::dashboard', compact('tourNumber'));
    }
}
