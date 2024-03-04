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
                            @if ($tourBooking)
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
                            <form method="post" id="mailsubricrexe"
                                action="{{ route('client.addToCart', ['id' => $tourBooking->id]) }}">
                                @csrf
                                <div class="content-booking content-booking-update price-detail-animation page_speed_1628318564"
                                    id="formQ">
                                    <h3 class="title-step">
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
                                                <div class="col-md-12 mb-3 ">
                                                    <input type="text" name="name" value=""
                                                        class="form-control fullname"
                                                        placeholder="Mời anh/chị nhập họ và tên *" autocomplete="off"
                                                        required />

                                                </div>
                                            </div>
                                            <label class="font-12">Mời anh/chị chọn số lượng</label>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <input type="number" name="nguoilon" value=""
                                                        class="form-control"
                                                        min="0"
                                                        placeholder="Người lớn *" autocomplete="on"
                                                        required />
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <input type="number" name="treem" value=""
                                                        class="form-control"
                                                        min="0"
                                                        placeholder="Trẻ em từ 8 - 11 tuổi *" autocomplete="on"
                                                        required />
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <input type="number" name="sosinh" value=""
                                                        class="form-control"
                                                        min="0"
                                                        placeholder="Trẻ sơ sinh *" autocomplete="on"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <label class="font-12">Mời anh/chị chọn ngày</label>
                                                <input type="date" class="form-control" name="date_selected" value="" min="2018-01-01" max="" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label class="font-12">Thông tin xác nhận sẽ được gửi qua
                                                        e-mail anh/chị nhập</label>
                                                    <input type="email" name="email" value="" class="form-control email"
                                                        placeholder="Mời anh/chị nhập email *" autocomplete="off"
                                                        required />

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label class="font-12">Đơn vị sẽ liên hệ trực tiếp với SĐT
                                                        trên</label>
                                                    <input type="text" name="phone" value="" class="form-control phone"
                                                        placeholder="Mời anh/chị nhập SĐT *" autocomplete="off"
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row style-margin-bot-booking">
                                            <div class="col-md-12 ">
                                                <label id="add_booking_note">Yêu cầu đặc biệt :</label>
                                                <textarea name="note" cols="40" rows="10" class="form-control message"
                                                    placeholder="Ví dụ: Gia đình có trẻ em, có người say xe..."
                                                    autocomplete="off"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group item-continue-step1 text-center ">
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
