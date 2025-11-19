<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;
use Cms\Modules\Admin\Services\Contracts\OrderDetailServiceContract;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;
use Cms\Modules\Admin\Jobs\SendEmail;
use Cms\Modules\Home\Requests\ContactRequest;

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

    public function sendContact(ContactRequest $request)
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
            'customer' => $request->contact_name,
            'phone' => $request->contact_phone,
            'email' => $request->contact_email,
            'note' => $request->message,
            'link' => route('admin.contact.list'),
        ];
        $users = DB::table('users')->get();
        SendEmail::dispatch($message, $users);

        return redirect()->route('client.index')->with('success', true);
    }

    public function successBooking()
    {
        return view('Home::successBooking');
    }

    public function getPricesTour(Request $request)
    {
        $id = $request->input('id');

        $prices = DB::table('tour_prices')
            ->where('tour_id', $id)
            ->orderBy('id', 'asc')
            ->get()
            ->toArray();

        $tour = DB::table('tours')
            ->where('id', $id)
            ->first();

        $data = collect($prices)->map(function ($item) use ($tour) {
            return [
                'id' => $item->id,
                'name' => $tour->name,
                'price' => $item->price,
                'description' => $item->description
            ];
        });

        return response()->json($data);
    }

    public function countPricesTour(Request $request)
    {
        $id = $request->input('id');
        $price = DB::table('tour_prices')
            ->join('tours', 'tour_prices.tour_id', '=', 'tours.id')
            ->select(
                'tour_prices.price',
                'tour_prices.description',
                'tours.name'
            )
            ->where('tour_prices.id', $id)
            ->first();

        if (!$price) {
            return response()->json(['error' => 'Không tìm thấy dữ liệu'], 404);
        }

        return response()->json([
            'price' => $price->price,
            'name' => $price->description,
            'title' => $price->name
        ]);
    }

    public function confirmOrder(Request $request)
    {
        session()->put('cart', $request->all());
        $cart = session()->get('cart');

        return view('Home::confirm', compact('cart'));
    }

    public function saveOrder(Request $request)
    {
        $dataOrder = [
            'tour_id' => $request->tour_id,
            'whats_app' => $request->contact_phone,
            'full_name' => $request->contact_name,
            'country' => $request->contact_address,
            'email' => $request->contact_email,
            'note' => $request->message,
            'status' => 0,
            'total' => $request->total_price
        ];

        $order = $this->orderService->store($dataOrder);
        if ($order) {
            $dataOrderDetail = [
                'order_id' => $order->id,
                'date_selected' => $request->date_selected,
                'html_data' => $request->html_data
            ];
            $this->orderDetailService->store($dataOrderDetail);
        }

        $message = [
            'customer' => $request->contact_name,
            'phone' => $request->contact_phone,
            'email' => $request->contact_email,
            'note' => $request->message,
            'link' => route('admin.contact.list'),
        ];
        $users = DB::table('users')->get();
        SendEmail::dispatch($message, $users);

        session()->remove('cart');


        return redirect()->route('client.index')->with('success', true);
    }

    public function getBusCheckbox(Request $request)
    {
        $departmentId = $request->input('department_id');
        $direction = $request->input('direction');

        $buses = DB::table('buses')
                    ->where('department_id', $departmentId)
                    ->where('direction', $direction)
                    ->get();

        return response()->json($buses);
    }

    public function getPricesBusDeparture(Request $request)
    {
        $id = $request->input('id');

        $busDeparture = DB::table('buses')
                            ->where('id', $id)
                            ->first();

        return response()->json($busDeparture);
    }

    public function getPricesBusReturn(Request $request)
    {
        $id = $request->input('id');

        $busReturn = DB::table('buses')
                            ->where('id', $id)
                            ->first();

        return response()->json($busReturn);
    }
}
