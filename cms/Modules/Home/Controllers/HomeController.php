<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\CarServiceContract;
use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Services\Contracts\TicketServiceContract;
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

    protected $slider, $post, $category, $tour, $car, $ticket, $contact, $userService;
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
        CategoryServiceContract $category,
        TourServiceContract $tour,
        CarServiceContract $car,
        TicketServiceContract $ticket,
        ContactServiceContract $contact,
        OrderServiceContract $orderService,
        OrderDetailServiceContract $orderDetailService,
        UserServiceContract $userService
    ) {
        $this->slider = $slider;
        $this->post = $post;
        $this->category = $category;
        $this->tour = $tour;
        $this->car = $car;
        $this->ticket = $ticket;
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
        $sliders = $this->slider->getByType($type = 'banner');
        $partners = $this->slider->getByType($type = 'partner');
        $galleries = $this->slider->getByType($type = 'gallery');
        $postExperiences = $this->post->getPostByType($type = 'experience');
        $firstPostExperience = $this->post->getFirstPost($type = 'experience');
        $categoryWithTour = $this->category->getCateWithTour($slug = 'tour-ha-giang');
        $categoryWithCar = $this->category->getCateWithTour($slug = 'du-an-thien-nguyen');
        $categoryWithTicket = $this->category->getCateWithTour($slug = 've-xe-bus-hang-ngay');

        return view('Home::home', compact('sliders', 'partners', 'galleries', 'postExperiences', 'firstPostExperience', 'categoryWithTour', 'categoryWithCar', 'categoryWithTicket'));
    }

    public function postDetail($slug)
    {

        if ($slug === 'kinh-nghiem-du-lich') {
            $postRelated = $this->post->getPostByType('experience');
            return view('Home::postList', compact('postRelated'));
        } else {
            $postDetail = $this->post->getPostBySlug($slug);
            if ($postDetail->type == 'experience') {
                $postRelated = $this->post->getPostRelated($postDetail->id, ['payment', 'introduction', 'policy', 'cancel', 'contact']);
            } else {
                $postRelated = $this->post->getPostRelated($postDetail->id, ['experience']);
            }

            return view('Home::postDetail', compact('postDetail', 'postRelated'));
        }

    }

    public function contentList($slug)
    {
        $contentList = $this->category->getCateWithTour($slug);

        return view('Home::contentList', compact('contentList'));
    }

    public function contentDetail($slug)
    {
        if ($this->tour->findBySlug($slug)) {
            $contentDetail = $this->tour->findBySlug($slug);
            $tourRelated = $this->tour->getTourRelated($contentDetail->id, $contentDetail->category_id);
        }
        if ($this->car->findBySlug($slug)) {
            $contentDetail = $this->car->findBySlug($slug);
            $tourRelated = $this->car->getCarRelated($contentDetail->id, $contentDetail->category_id);
        }
        if ($this->ticket->findBySlug($slug)) {
            $contentDetail = $this->ticket->findBySlug($slug);
            $tourRelated = $this->ticket->getTicketRelated($contentDetail->id, $contentDetail->category_id);
        }
        return view('Home::contentDetail', compact('contentDetail', 'tourRelated'));
    }

    public function sendContact(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataContact = [
                'phone_number' => $request->phone_number,
                'url' => $request->url,
            ];
            $this->contact->store($dataContact);
            $message = [
                'type' => 'Thông báo có khách cần tư vấn',
                'task' => 'Khách hàng để lại SĐT ' . $request->phone_number,
                'content' => 'Liên hệ ngay',
                'link' => route('admin.contact.list'),
            ];
            $users = $this->userService->getAll();
            SendEmail::dispatch($message, $users)->delay(now()->addMinute());
            DB::commit();
            return redirect()->back()->with('success', 'Cảm ơn bạn đã gửi số điện thoại chúng tôi sẽ liên hệ sớm với bạn !');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }

    public function bookingTour($id)
    {
        $tourBooking = $this->tour->find($id);

        return view('Home::bookingView', compact('tourBooking'));
    }

    public function addToCart(Request $request, $id)
    {
        $tourBooking = $this->tour->find($id);
        Session::put('bookingCart', $request->all());
        $bookingCart = session('bookingCart', $request->all());
        session(['bookingCart' => $bookingCart]);
        $totalPrice = ($request->namnguoilon * (int) str_replace(',', '', $tourBooking->price)) + ($request->namnguoilon811 * (int) str_replace(',', '', $tourBooking->price) * 0.5);

        return view('Home::previewBooking', compact('tourBooking', 'totalPrice'));
    }

    public function storeBooking(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            if (Session::get('bookingCart')) {
                $data = Session::get('bookingCart');
                $dataBooking = [
                    'name' => $data['name'],
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'note' => $data['note']
                ];
                $order = $this->orderService->store($dataBooking);
                $dataBookingDetail = [
                    'order_id' => $order->id,
                    'tour_id' => $id,
                    'quantity' => json_encode(['nguoilon' => $data['namnguoilon'], 'treem' => $data['namnguoilon811'], 'sosinh' => $data['nametreem']]),
                    'gender' => $data['pronoun'] == "Anh" ? 0 : 1,
                    'date_selected' => Carbon::createFromFormat('d-m-Y', $data['date_selected']),
                    'total_price' => $request->total_price,
                    'status' => 0,
                ];
                if ($order) {
                    $this->orderDetailService->store($dataBookingDetail);
                    $message = [
                        'type' => 'Thông báo có khách đặt Tour',
                        'task' => 'Khách hàng có tên: ' . $data['name'] .' có số điện thoại '. $data['phone'],
                        'content' => 'Đã đặt Tour cần liên hệ gấp',
                        'link' => route('admin.order.list'),
                    ];
                    $users = $this->userService->getAll();
                    SendEmail::dispatch($message, $users)->delay(now()->addMinute());
                }
            }
            Session::forget('bookingCart');
            DB::commit();
            return redirect()->route('client.successBooking')->with('success', "Cảm ơn bạn đã đặt Tour chúng tôi sẽ liên hệ sớm với bạn qua Email hoặc SĐT");
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }

    public function successBooking()
    {
        return view('Home::successBooking');
    }
}
