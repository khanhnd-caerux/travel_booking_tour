<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\CarServiceContract;
use Cms\Modules\Admin\Services\Contracts\TicketServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;

class DashboardController extends Controller
{
    protected $tour, $car, $ticket, $order;

    public function __construct
    (
        TourServiceContract $tour,
        TicketServiceContract $ticket,
        CarServiceContract $car
    ) {
        $this->tour = $tour;
        $this->car = $car;
        $this->ticket = $ticket;
    }
    public function dashboard()
    {
        $tourNumber = $this->tour->getAll()->count();
        $carNumber = $this->car->getAll()->count();
        $ticketNumber = $this->ticket->getAll()->count();

        return view('Admin::dashboard', compact('tourNumber', 'carNumber', 'ticketNumber'));
    }
}
