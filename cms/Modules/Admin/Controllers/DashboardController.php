<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;
use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;

class DashboardController extends Controller
{
    protected $tour;
    protected $orderService;
    protected $contactService;

    public function __construct(
        TourServiceContract $tour,
        OrderServiceContract $orderService,
        ContactServiceContract $contactService
    ) {
        $this->tour = $tour;
        $this->orderService = $orderService;
        $this->contactService = $contactService;
    }

    public function dashboard()
    {
        $tourNumber = $this->tour->getAll()->count();
        
        // Thống kê Order
        $totalOrders = $this->orderService->getAll()->count();
        $newOrders = $this->orderService->getAll()->where('status', 0)->count(); // status = 0 là mới
        $processedOrders = $this->orderService->getAll()->where('status', 1)->count(); // status = 1 là đã xử lý
        
        // Thống kê Contact
        $totalContacts = $this->contactService->getAll()->count();
        $newContacts = $this->contactService->getAll()->where('status', 0)->count(); // status = 0 là mới
        $processedContacts = $this->contactService->getAll()->where('status', 1)->count(); // status = 1 là đã xử lý

        return view('Admin::dashboard', compact(
            'tourNumber',
            'totalOrders',
            'newOrders',
            'processedOrders',
            'totalContacts',
            'newContacts',
            'processedContacts'
        ));
    }
}
