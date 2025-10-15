@extends('Core::layouts.frontend.app')
@section('content')
<section style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb ">
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href=""> Đặt Tour</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section style="style=" background: #f5f5f5"">
    <div class="container">
        <div class="row">
            <div class="clearfix-20"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="tsNav" class="row page_speed_165641320">
                    <div class="col-md-12 page_speed_909149143">
                        <div class="fix-width-booking">
                            <div class="text-center">
                                <h2 class="h2-title" style="margin-bottom: 20px">ĐẶT TOUR</h2>
                            </div>
                            <ul
                                class="text-center header-progress has-secondary-logo ts__stepsBar full-width page_speed_895730547">
                                <li id="step-1" class="step-1 ">
                                    <span class="content">1</span>
                                    <div class="information">
                                        <span data-bind="text: progressTracker.customerInformationText">Lịch khởi
                                            hành</span>
                                    </div>
                                </li>
                                <li id="step-2" class="step-2 active"><span class="content">2</span>
                                    <div class="information">
                                        <span data-bind="text: progressTracker.paymentInformationText">Xem lại</span>
                                    </div>
                                </li>
                                <li id="step-3" class="step-3">
                                    <span class="content">
                                        <i class="fa fa-check styl-icon-check"></i>
                                    </span>
                                    <div class="information">
                                        <span data-bind="text: progressTracker.bookingCompletedText">Hoàn thành</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div id="tsTourDetail">
                                <div class="item-info-combo">
                                    <div class="styl-image-booking">
                                        <div class="img-booking">
                                            <img src="{{ asset($tourBooking->feature_image_path) }}"
                                                alt="{{ $tourBooking->name }}">
                                        </div>
                                        <div class="item-info-booking booking-info-tour">
                                            <p class="page_speed_1021675572">
                                                {{ $tourBooking->name }} </p>
                                            <style>
                                                .ulproduct li {
                                                    margin-bottom: 5px;
                                                }
                                            </style>
                                            <div class="item-booking">
                                                <ul class="ulproduct">
                                                    <li>
                                                        <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                                            hành từ: </span> {{ $tourBooking->destination_from }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o text-pri"></i><span
                                                            class="font-semi">Lịch trình: </span> {{
                                                        $tourBooking->destination_to }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar text-pri"></i><span
                                                            class="font-semi">Khởi hành: </span> {{
                                                        $tourBooking->schedule }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                                            tiện: </span> {{ $tourBooking->vehicle }}
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ts__reviewBox">
                                <div class="ts__reviewTitle item-title-booking">
                                    Tóm tắt tour
                                </div>
                                <div class="ts__reviewContent">
                                    <div class="ts__reviewInfo">

                                        <div class="row-step2">
                                            <div class="title-schedule-fix">
                                                <span class="page_speed_1369991212">Hành trình</span>
                                            </div>
                                            <div class="content-schedule-fix">
                                                <span class="page_speed_1262894178">{{ $tourBooking->name }}</span>
                                            </div>
                                        </div>
                                        <div class="row-step2">
                                            <div class="title-schedule-fix">
                                                <span class="page_speed_1369991212">Ngày khởi hành</span>
                                            </div>
                                            <div class="content-schedule-fix">
                                                <span class="page_speed_1262894178"> {{
                                                    Session::get('bookingCart')['date_selected'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="ts__reviewPrice">
                                        <div class="row-step2">
                                            <div class="title-schedule">
                                                <span class="font-12 page_speed_162777778">Người lớn</span>
                                            </div>
                                            <div class="content-schedule">
                                                <span class="font-14 page_speed_1413671375">{{
                                                    Session::get('bookingCart')['namnguoilon'] }} x {{
                                                    number_format((int) str_replace(',', '',
                                                    $tourBooking->price)) }} VND</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ts__reviewPrice">
                                        <div class="row-step2">
                                            <div class="title-schedule">
                                                <span class="font-12 page_speed_162777778">Trẻ em</span>
                                            </div>
                                            <div class="content-schedule">
                                                <span class="font-14 page_speed_1413671375">{{
                                                    Session::get('bookingCart')['namnguoilon811'] }} x {{
                                                    number_format((int) str_replace(',', '',
                                                    $tourBooking->price) * 0.5) }} VND</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ts__reviewPrice">
                                        <div class="row-step2">
                                            <div class="title-schedule">
                                                <span class="font-12 page_speed_162777778">Em bé</span>
                                            </div>
                                            <div class="content-schedule">
                                                @if (Session::get('bookingCart')['nametreem'] === null)
                                                <span class="font-14 page_speed_1413671375">1 x 0 VND</span>
                                                @else
                                                <span
                                                    class="font-14 page_speed_1413671375">{{Session::get('bookingCart')['nametreem']}}
                                                    x 0 VND</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="ts__reviewTotalPrice">
                                        <div class="row-step2">
                                            <div class="title-schedule">
                                                <span class="font-13 font-weight-bold page_speed_1513125089">Tổng giá
                                                    trị</span>
                                            </div>
                                            <div class="content-schedule">

                                                <span class="font-18 font-weight-bold page_speed_715582960"> {{
                                                    number_format($totalPrice, 0, '.', ',') }}
                                                    VND</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group item-continue-step1 text-center page_speed_342536955">
                                <form method="post"
                                    action="{{ route('client.storeBooking', ['id' => $tourBooking->id]) }}">
                                    @csrf
                                    <input type="text" style="display: none;" name="total_price"
                                        value="{{ $totalPrice }}">
                                    <button type="submit" id="btn_continue" class="btn item-btn-continue-step1"
                                        value="create" name="create">
                                        Tiếp tục </button>
                                </form>
                                <div class="item-text-color-booking page_speed_342536955">
                                    <i class="fa fa-check-square"></i><span> Đặt giữ chỗ trước, thanh toán sau. Dễ dàng,
                                        thuận tiện, nhanh chóng</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-2"></div>

        </div>

    </div>
</section>
@endsection
