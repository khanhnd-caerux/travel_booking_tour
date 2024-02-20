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
                                <h2 class="h2-title" style="margin-bottom: 20px">Đặt Tour</h2>
                            </div>
                            <ul
                                class="text-center header-progress has-secondary-logo ts__stepsBar full-width page_speed_895730547">
                                <li id="step-1" class="step-1 active">
                                    <span class="content">1</span>
                                    <div class="information">
                                        <span data-bind="text: progressTracker.customerInformationText">Lịch khởi
                                            hành</span>
                                    </div>
                                </li>
                                <li id="step-2" class="step-2"><span class="content">2</span>
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

                            @if ($tourBooking)
                            <div id="tsTourDetail">
                                <div class="item-info-combo">
                                    <div class="styl-image-booking">
                                        <div class="img-booking">
                                            <img src="{{ $tourBooking->feature_image_path }}"
                                                alt="{{ $tourBooking->name }}">
                                        </div>
                                        <div class="item-info-booking booking-info-tour">
                                            <p class="page_speed_1021675572">
                                                {{ $tourBooking->name }} </p>
                                            <div class="item-booking">
                                                <style>
                                                    .ulproduct li {
                                                        margin-bottom: 5px;
                                                    }
                                                </style>
                                                <ul class="ulproduct">
                                                    <li>
                                                        <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                                            hành từ: </span> {{ $tourBooking->destination_from }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o text-pri"></i><span
                                                            class="font-semi">Lịch trình:
                                                        </span> {{ $tourBooking->destination_to }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar text-pri"></i><span
                                                            class="font-semi">Khởi hành: </span> {{
                                                        $tourBooking->schedule }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                                            tiện:
                                                        </span> {{ $tourBooking->vehicle }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div
                                class="content-booking content-booking-update price-detail-animation page_speed_1628318564">
                                <h3 class="title-step">
                                    <strong>1</strong>
                                    Chọn ngày khởi hành
                                </h3>

                                <div class="wrapper">

                                    <div class="container-calendar">

                                        <div class="button-container-calendar">
                                            <h3 id="monthAndYear"></h3>

                                            <button id="previous" onclick="previous()"><i
                                                    class="fa fa-chevron-left"></i>&nbsp;&nbsp;Tháng trước </button>
                                            <button id="next" onclick="next()">Tháng sau&nbsp;&nbsp;<i
                                                    class="fa fa-chevron-right"></i></button>
                                        </div>

                                        <table class="table-calendar" id="calendar" data-lang="en">
                                            <thead id="thead-month"></thead>
                                            <tbody id="calendar-body"></tbody>
                                        </table>


                                    </div>

                                </div>
                            </div>
                            <form method="post" id="mailsubricrexe"
                                action="{{ route('client.addToCart', ['id' => $tourBooking->id]) }}">
                                @csrf
                                <div
                                    class="content-booking content-booking-update price-detail-animation page_speed_1628318564">
                                    <h3 class="title-step">
                                        <strong>2</strong>
                                        Chọn số lượng
                                    </h3>
                                    <!-- <div>
                                        <div class="d-flex">
                                            <span class="font-weight-bold font-15 fix-center">Hạng tour *</span>
                                            <select class="optionTour form-control" name="optionTour">
                                                <option data-price="115"
                                                    value="01 night in Hotel 3 Stars + 01 night homestay - 115 VNĐ">
                                                    01 night in Hotel 3 Stars + 01 night homestay - 115 VNĐ
                                                </option>
                                                <option data-price="165"
                                                    value="01 night in Hotel 4 Stars + 01 night homestay - 165 VNĐ">
                                                    01 night in Hotel 4 Stars + 01 night homestay - 165 VNĐ
                                                </option>
                                                <option data-price="215"
                                                    value="01 night in Hotel 3 Stars + 01 night homestay - 215 VNĐ">
                                                    01 night in Hotel 3 Stars + 01 night homestay - 215 VNĐ
                                                </option>
                                            </select>
                                        </div>
                                    </div> -->

                                    <div class="item-detail-option ts__itemDetailOption page_speed_621266137">
                                        <p id="date_picked" class="fs__headerBlock page_speed_741868319">Ngày đã chọn :
                                            <span class="page_speed_234675984" id="valueDATE2">11-01-2024</span>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 full-width">
                                            <div class="ts__customerQualities">
                                                <div class="ts__leftContent ts__tableRpsNone">
                                                    <span class="font-weight-bold font-15 fix-center">
                                                        Số lượng </span>
                                                </div>
                                                <div class="ts__rightContent bd-l-0">
                                                    <!-- ng lớn -->
                                                    <ul class="no-list-style ts__listPriceDetail">
                                                        <li class="page_speed_744869658">
                                                            <div class="row page_speed_1944299596">
                                                                <div class="col-md-4 ts__mbView value-change">
                                                                    <div
                                                                        class="price-detail__title text-right font-14 page_speed_485828817">
                                                                        Người lớn </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-4 text-center ts__mbViewNone page_speed_2040083816">
                                                                    <span id="price_adult_true"
                                                                        class="font-weight-bold ts__pricePerPerson page_speed_1358849455">

                                                                        {{ $tourBooking->price }} VNĐ
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-4 text-center ts__mbView">
                                                                    <div class="input-group mb-3 page_speed_1343872355">
                                                                        <div class="input-group-prepend">
                                                                            <span
                                                                                class="input-group-text change-value-hv minus"><i
                                                                                    class="fa fa-minus"></i> </span>
                                                                        </div>
                                                                        <input type="number" value="" placeholder="0"
                                                                            name="namnguoilon" min="1"
                                                                            class="namnguoilon form-control page_speed_1017920312 changeNum1"
                                                                            data-price="{{ (int) str_replace(',', '', $tourBooking->price) }}"
                                                                            required>
                                                                        <div class="input-group-append">
                                                                            <span
                                                                                class="input-group-text change-value-hv plus"><i
                                                                                    class="fa fa-plus"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- trẻ em -->
                                                    <ul class="no-list-style ts__listPriceDetail">
                                                        <li class="page_speed_744869658">
                                                            <div class="row page_speed_1944299596">
                                                                <div class="col-md-4 col-sm-4 ts__mbView value-change">
                                                                    <div
                                                                        class="price-detail__title text-right font-14 page_speed_485828817">
                                                                        Trẻ em <span class="font-12"> từ 8 - 11
                                                                            tuổi</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-4 col-sm-4 text-center ts__mbViewNone page_speed_267174597">
                                                                    <span
                                                                        class="font-weight-bold ts__pricePerPerson page_speed_1358849455"
                                                                        id="price_children_true">
                                                                        {{ number_format((int) str_replace(',', '',
                                                                        $tourBooking->price) * 0.5) }} VNĐ</span>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 text-center ts__mbView ">
                                                                    <div class="input-group mb-3 page_speed_1343872355">
                                                                        <div class="input-group-prepend">
                                                                            <span
                                                                                class="input-group-text change-value-hv minus"><i
                                                                                    class="fa fa-minus"></i> </span>
                                                                        </div>
                                                                        <input type="number" value="" placeholder="0"
                                                                            name="namnguoilon811" min="1"
                                                                            class="namnguoilon811 form-control page_speed_1017920312 changeNum2"
                                                                            data-price="{{ (int) str_replace(',', '', $tourBooking->price) * 0.5 }}">
                                                                        <div class="input-group-append">
                                                                            <span
                                                                                class="input-group-text change-value-hv plus"><i
                                                                                    class="fa fa-plus"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="no-list-style ts__listPriceDetail">
                                                        <li class="page_speed_744869658">
                                                            <div class="row page_speed_1944299596">
                                                                <div class="col-md-4 ts__mbView value-change">
                                                                    <div
                                                                        class="price-detail__title text-right font-14 page_speed_485828817">
                                                                        Trẻ sơ sinh </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-4 text-center ts__mbViewNone page_speed_267174597">
                                                                    <span id="price_infant_true"
                                                                        class="font-weight-bold ts__pricePerPerson page_speed_1358849455">
                                                                        0 VNĐ
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-4 text-center ts__mbView ">
                                                                    <div class="input-group mb-3 page_speed_1343872355">
                                                                        <div class="input-group-prepend">
                                                                            <span
                                                                                class="input-group-text change-value-hv minus"><i
                                                                                    class="fa fa-minus"></i> </span>
                                                                        </div>
                                                                        <input type="number" value="" placeholder="0"
                                                                            name="nametreem" min="1"
                                                                            class="nametreem form-control page_speed_1017920312 changeNum3"
                                                                            data-price="0">
                                                                        <div class="input-group-append">
                                                                            <span
                                                                                class="input-group-text change-value-hv plus"><i
                                                                                    class="fa fa-plus"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Total price-->


                                        <div class="col-md-12 page_speed_767011908">
                                            <div class="divider-solid-bottom hide page_speed_720306205"></div>
                                            <div class="payment-info">
                                                <ul class="list-unstyled ts__promotionBlock">
                                                    <li class="no-padding bd-b-0 page_speed_167042417">
                                                        <span id="text-all-price" class="info page_speed_920631463">
                                                            Chi phí dự tính </span>
                                                        <span class="money page_speed_629009547">
                                                            <input type="text" value="0" id="totalPrice1"
                                                                class="totalPriceQ" style="display: none">
                                                            <input type="text" value="0" id="totalPrice2"
                                                                class="totalPriceQ" style="display: none">
                                                            <input type="text" value="0" id="totalPrice3"
                                                                class="totalPriceQ" style="display: none">
                                                            <input type="text" value="0" id="valueNUMINPUT"
                                                                style="display: none">
                                                            <span class="valueNUM">0</span> VND </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-booking content-booking-update price-detail-animation page_speed_1628318564"
                                    id="formQ">
                                    <h3 class="title-step">
                                        <strong>3</strong>
                                        Thông tin liên hệ
                                    </h3>
                                    <div class="content-booking page_speed_1427014602">
                                        <div class="mt-10">
                                            <div class="error"></div>
                                            <div class="form-group">
                                                <div
                                                    class="form-check form-check-inline item-category-product page_speed_55152856">
                                                    <label class="container-radio">Anh <input type="radio"
                                                            id="customerMale" name="pronoun"
                                                            class="custom-control-input pronoun" value="Anh" checked>
                                                        <span class="checkmark-radio"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline item-category-product">
                                                    <label class="container-radio">Chị <input type="radio"
                                                            id="customerFemale" name="pronoun"
                                                            class="custom-control-input pronoun" value="Chị">
                                                        <span class="checkmark-radio"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 mb-3 ">
                                                    <input type="text" name="name" value=""
                                                        class="form-control fullname"
                                                        placeholder="Mời anh/chị nhập họ và tên *" autocomplete="off"
                                                        required />

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8 mb-3">
                                                    <label class="font-12">Thông tin xác nhận sẽ được gửi qua
                                                        e-mail anh/chị nhập</label>
                                                    <input type="email" name="email" value="" class="form-control email"
                                                        placeholder="Mời anh/chị nhập email *" autocomplete="off"
                                                        required />

                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 mb-3">
                                                    <label class="font-12">Đơn vị sẽ liên hệ trực tiếp với SĐT
                                                        trên</label>
                                                    <input type="text" name="phone" value="" class="form-control phone"
                                                        placeholder="Mời anh/chị nhập SĐT *" autocomplete="off"
                                                        required />

                                                </div>

                                            </div>

                                        </div>
                                        <div class="row style-margin-bot-booking">
                                            <div class="col-md-8 ">
                                                <label id="add_booking_note">Yêu cầu đặc biệt :</label>
                                                <textarea name="note" cols="40" rows="10" class="form-control message"
                                                    placeholder="Ví dụ: Gia đình có trẻ em, có người say xe..."
                                                    autocomplete="off"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group item-continue-step1 text-center ">
                                    <input style="display: none" type="text" name="date_selected" value=""
                                        class="form-control ngaykhoihanh" id="valueDATE" placeholder=""
                                        autocomplete="off">
                                    <button type="submit" class="btn item-btn-continue-step1">
                                        Tiếp tục</button>
                                    <div class="item-text-color-booking">
                                        <i class="fa fa-check-square"></i><span> Đặt trước, thanh toán sau. Dễ dàng,
                                            thuận lợi,
                                            nhanh chóng</span>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@section('js')
<script src="{{asset('frontend/template/acore/js/time.js')}}"></script>
@endsection
@endsection
