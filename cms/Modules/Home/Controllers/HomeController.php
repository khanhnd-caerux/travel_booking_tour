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
use Session;
use Carbon\Carbon;
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

    public function sendContact(Request $request)
    {
        if (!empty($request->input('honeypot'))) {
            return redirect()->back()->withErrors(['error' => 'Spam detected.']);
        }
        try {
            DB::beginTransaction();
            $dataContact = [
                'phone_number' => $request->code_phone . ' ' . $request->phone_number,
                'url' => $request->url,
                'name' => $request->name,
                'email' => $request->email,
                'note' => $request->note,
            ];
            $this->contact->store($dataContact);
            $message = [
                'customer' => $request->name,
                'phone' => $request->code_phone . ' ' . $request->phone_number,
                'email' => $request->email,
                'note' => $request->note,
                'link' => route('admin.contact.list'),
            ];
            $users = $this->userService->getAll();
            SendEmail::dispatch($message, $users);
            DB::commit();
            return redirect()->back()->with('success', "Thank you for booking the tour, we will contact you soon via Email or phone number.");

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
            return redirect()->route('client.index');
        }
    }

    public function successBooking()
    {
        return view('Home::successBooking');
    }
}
