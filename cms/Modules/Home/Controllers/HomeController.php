<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;
use Cms\Modules\Admin\Services\Contracts\OrderDetailServiceContract;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;
use Cms\Modules\Admin\Jobs\SendEmail;

class HomeController extends Controller
{

    protected $slider, $post, $tour, $contact, $userService;
    protected $orderService;
    protected $orderDetailService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct
    (
        SliderServiceContract $slider,
        PostServiceContract $post,
        TourServiceContract $tour,
        ContactServiceContract $contact,
        OrderServiceContract $orderService,
        OrderDetailServiceContract $orderDetailService,
        UserServiceContract $userService
    ) {
        $this->slider = $slider;
        $this->post = $post;
        $this->tour = $tour;
        $this->contact = $contact;
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->userService = $userService;
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
        $tours = $this->tour->getTourWithInfo();

        return view('Home::home', compact('tours'));
    }

    public function postDetail($slug)
    {
        $postDetail = $this->post->getPostBySlug($slug);

        return view('Home::postDetail', compact('postDetail'));
    }

    public function contactPage()
    {
        return view('Home::contact');
    }

    public function sendContact(Request $request)
    {
        $dataContact = [
            'whats_app' => $request->contact_phone,
            'full_name' => $request->contact_name,
            'country' => $request->contact_address,
            'email' => $request->contact_email,
            'note' => $request->message,
        ];
        $this->contact->store($dataContact);
        $message = [
            'customer' => $request->name,
            'phone' => $request->whats_app,
            'email' => $request->email,
            'note' => $request->message,
            'link' => route('admin.contact.list'),
        ];
        $users = $this->userService->getAll();
        SendEmail::dispatch($message, $users);

        return redirect()->route('client.contact');
    }

    public function successBooking()
    {
        return view('Home::successBooking');
    }
}
