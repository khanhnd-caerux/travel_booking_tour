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
        $locale = session()->get('locale');
        if (!$locale) {
            session()->put('locale', 'vi');
        }
        $sliders = $this->slider->getByType($type = 'banner');
        $partners = $this->slider->getByType($type = 'partner');
        $galleries = $this->slider->getByType($type = 'gallery');
        $postExperiences = $this->post->getPostByType($type = 'experience');
        $firstPostExperience = $this->post->getFirstPost($type = 'experience');
        $categoryWithTour = $this->category->getCateWithTour($slug = 'tour-ha-giang');
        $allOrderDetail = $this->orderDetailService->getAll();
        $customerTour = 0;
        $totalMoney = 0;
        $tourInfos = [];
        foreach ($allOrderDetail as $item) {
            if ($item->tour_id) {
                $customerTour++;
                $totalMoney = ($totalMoney + $item->total_price) * 0.1;
                $order = $this->orderService->find($item->order_id);
                $tour = $this->tour->find($item->tour_id);
                $tourInfo = collect([
                    'name' => $order->name,
                    'phone' => substr($order->phone, 0, 4) . "." . substr($order->phone, 4, 3) . ".xxx",
                    'email' => $order->email,
                    'total_price' => $locale == 'en' ? number_format((($totalMoney / 24000) * 0.1), 0) : number_format(($totalMoney * 0.1), 0),
                    'tour_name' => $tour->name,
                ]);
                $tourInfos[] = $tourInfo;
            }
        }
        if ($locale == 'en')
        {
            $totalMoney = number_format((($totalMoney / 24000) * 0.1), 0);
        } else {
            $totalMoney = number_format($totalMoney * 0.1, 0);
        }

        return view('Home::home', compact('sliders', 'partners', 'galleries', 'postExperiences', 'firstPostExperience', 'categoryWithTour', 'customerTour', 'totalMoney', 'tourInfos'));
    }

    public function postDetail($slug)
    {
        if ($slug === 'trai-nghiem-du-lich') {
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
                'name' => $request->name,
                'email' => $request->email,
                'note' => $request->note,
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

    public function booking($type, $id)
    {
        // dd($type, $id);
        if ($type == 'tour') {
            $tourBooking = $this->tour->find($id);
            return view('Home::bookingView', compact('tourBooking', 'type'));
        }
        if ($type == 'booking_car') {
            $carBooking = $this->car->find($id);
            return view('Home::bookingView', compact('carBooking', 'type'));
        }
        if ($type == 'booking_ticket') {
            $ticketBooking = $this->ticket->find($id);
            return view('Home::bookingView', compact('ticketBooking', 'type'));
        }
    }

    public function addToCart(Request $request, $type, $id)
    {
        // try {
        //     DB::beginTransaction();
        $data = $request->all();
        if ($type == 'tour') {
            $tourBooking = $this->tour->find($id);
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
                'quantity' => json_encode(['nguoilon' => $data['nguoilon'], 'treem' => $data['treem'], 'sosinh' => $data['sosinh']]),
                'gender' => $data['pronoun'] == "Anh" ? 0 : 1,
                'date_selected' => $data['date_selected'],
                'total_price' => ($data['nguoilon'] * (int) str_replace(',', '', $tourBooking->price)) + ($data['treem'] * (int) str_replace(',', '', $tourBooking->price) * 0.5),
                'status' => 0,
            ];
            if ($order) {
                $this->orderDetailService->store($dataBookingDetail);
                $message = [
                    'type' => 'Thông báo có khách đặt Tour',
                    'task' => 'Khách hàng có tên: ' . $data['name'] . ' có số điện thoại ' . $data['phone'],
                    'content' => 'Đã đặt Tour cần liên hệ gấp',
                    'link' => route('admin.order.list'),
                ];
                $users = $this->userService->getAll();
                SendEmail::dispatch($message, $users)->delay(now()->addMinute());
            }
            // DB::commit();
            return redirect()->route('client.successBooking')->with('success', "Cảm ơn bạn đã đặt Tour chúng tôi sẽ liên hệ sớm với bạn qua Email hoặc SĐT");
        }

        if ($type == 'booking_car') {
            $carBooking = $this->car->find($id);
            $dataBooking = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'note' => $data['note']
            ];
            $order = $this->orderService->store($dataBooking);
            $dataBookingDetail = [
                'order_id' => $order->id,
                'car_id' => $id,
                'quantity' => 0,
                'gender' => $data['pronoun'] == "Anh" ? 0 : 1,
                'date_selected' => $data['date_selected'],
                'total_price' => (int) str_replace(',', '', $carBooking->price),
                'status' => 0,
            ];
            if ($order) {
                $this->orderDetailService->store($dataBookingDetail);
                $message = [
                    'type' => 'Thông báo có khách đặt Xe',
                    'task' => 'Khách hàng có tên: ' . $data['name'] . ' có số điện thoại ' . $data['phone'],
                    'content' => 'Đã đặt thuê xe cần liên hệ gấp',
                    'link' => route('admin.order.list'),
                ];
                $users = $this->userService->getAll();
                SendEmail::dispatch($message, $users)->delay(now()->addMinute());
            }
            // DB::commit();
            return redirect()->route('client.successBooking')->with('success', "Cảm ơn bạn đã đặt Xe chúng tôi sẽ liên hệ sớm với bạn qua Email hoặc SĐT");
        }

        if ($type == 'booking_ticket') {
            $ticketBooking = $this->ticket->find($id);
            $dataBooking = [
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'note' => $data['note']
            ];
            $order = $this->orderService->store($dataBooking);
            $dataBookingDetail = [
                'order_id' => $order->id,
                'ticket_id' => $id,
                'quantity' => 0,
                'gender' => $data['pronoun'] == "Anh" ? 0 : 1,
                'date_selected' => $data['date_selected'],
                'total_price' => (($data['nguoilon'] + $data['treem']) * (int) str_replace(',', '', $ticketBooking->price)),
                'status' => 0,
            ];
            if ($order) {
                $this->orderDetailService->store($dataBookingDetail);
                $message = [
                    'type' => 'Thông báo có khách đặt vé xe bus',
                    'task' => 'Khách hàng có tên: ' . $data['name'] . ' có số điện thoại ' . $data['phone'],
                    'content' => 'Đã đặt vé xe bus cần liên hệ gấp',
                    'link' => route('admin.order.list'),
                ];
                $users = $this->userService->getAll();
                SendEmail::dispatch($message, $users)->delay(now()->addMinute());
            }
            // DB::commit();
            return redirect()->route('client.successBooking')->with('success', "Cảm ơn bạn đã đặt vé xe Bus chúng tôi sẽ liên hệ sớm với bạn qua Email hoặc SĐT");
        }
        // } catch (\Exception $exception) {
        //     DB::rollBack();
        //     Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        // }
    }

    public function successBooking()
    {
        return view('Home::successBooking');
    }
}
