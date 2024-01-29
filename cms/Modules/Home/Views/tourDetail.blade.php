@extends('Core::layouts.frontend.app')
@section('content')
<section style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li class="uk-active"><a href="tour-ha-giang.html" title="TOUR HÀ GIANG">TOUR HÀ GIANG</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

</section>
<section class="product-item pt0 bgfff">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="title-detail-tour">
                    <h1>{{ $tourDetail->name }}</h1>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 wow fadeInLeft">
                <div class="listAbums hidden-xs">
                    <div class="col-115">
                        <ul id='carousel-custom-dots' class='owl-dots list_yk'>
                            @foreach($tourDetail->tourImages as $image)
                            <li class="owl-dot">
                                <a href="javascript:void(0)"><img class="img_yk_cm click"
                                        src="{{ asset($image->image_path) }}" alt="{{ $tourDetail->name }}"></a>

                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-t115">
                        <div id="slider-home-chitiet" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                            @foreach($tourDetail->tourImages as $image)
                            <div class="item ">
                                <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                        alt="{{ $tourDetail->name }}" /></a>
                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>
                <div class="visible-xs">
                    <div id="sync1" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @foreach($tourDetail->tourImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $tourDetail->name }}" /></a>
                        </div>
                        @endforeach
                    </div>
                    <div class="clearfix-10"></div>
                    <div id="sync2" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @foreach($tourDetail->tourImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $tourDetail->name }}" /></a>
                        </div>
                        @endforeach
                    </div>


                </div>


            </div>
            <div class="clearfix-20 visible-xs"></div>
            <div class="col-md-4 col-lg-3 col-sm-12 col-xs-12 wow fadeInRight">
                <aside class="package-full">
                    <p class="dp-n-tablet-small">Giá chỉ từ: </p>

                    <p class="price-new">{{ $tourDetail->price }} VND</p>
                    <p class="price-old">{{ $tourDetail->price }} VND</p>

                    <div class="star star-mobile">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                    </div>
                </aside>

                <div class="info-tour">
                    <ul class="ulproduct">
                        <li>
                            <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>
                            <span class="font-semi">Mã tour: </span> {{ $tourDetail->tour_code }}
                        </li>
                        <li>
                            <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành từ: </span> {{
                            $tourDetail->destination_from }}
                        </li>
                        <li>
                            <i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch trình: </span> {{
                            $tourDetail->destination_to }}
                        </li>
                        <li>
                            <i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi hành: </span> {{
                            $tourDetail->schedule }}
                        </li>
                        <li>
                            <i class="fa fa-car text-pri"></i><span class="font-semi">Phương tiện: </span> {{
                            $tourDetail->vehicle }}
                        </li>
                    </ul>
                </div>


                <div class="mt-15">
                    <a href="dat-tour1e35.html?id=39" class="btn btn-primary btn-lg btn-block button-booking-tour">
                        <span class="main-text text-uppercase">Đặt tour ngay <i
                                class="fa fa-angle-right icon-arrow-right"></i></span>
                        <span class="tiny-text">Giữ chỗ, chưa cần thanh toán</span>
                    </a>
                </div>


                <div class="visible-xs">
                    <div class="hotline-aside">
                        <p style="color: #ef7325;width: 100%;text-align: center">Để lại số điện thoại chúng tôi sẽ liên
                            hệ với bạn!</p>
                        <form class="form-hotline" action="https://hagiangopentour.com/contact/frontend/contact/create"
                            id="mailsubricre">
                            <div class="error"></div>
                            <div class="rel">
                                <input type="phone" name="phone" class="form-control phone"
                                    placeholder="Số điện thoại của tôi" required>
                                <button type="submit">Gửi</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 wow fadeInUp">
                <div class="menu-body-tour">
                    <ul class="nav nav-tour nav-tour-mobile">
                        <li class="nav-item nav-item-tour">
                            <a id="introduce" href="#gioithieu" class="nav-link nav-link-tour active">Giới thiệu</a>
                        </li>
                        <li class="nav-item nav-item-tour">
                            <a id="schedule" href="#lichtrinh" class="nav-link nav-link-tour">Lịch trình</a>
                        </li>
                        <li class="nav-item nav-item-tour">
                            <a id="clause" href="#dieukhoan" class="nav-link nav-link-tour">Bao gồm và Điều khoản</a>
                        </li>

                    </ul>
                    <div class="clearfix-10"></div>

                    <div id="gioithieu">
                        {!! $tourDetail->content !!}
                    </div>
                    <div class="clearfix-10"></div>
                    <div class="col-md-4 col-sm-4 visible-xs">
                        <div class="mt-15">
                            <a href="dat-tour1e35.html?id=39"
                                class="btn btn-primary btn-lg btn-block button-booking-tour">
                                <span class="main-text text-uppercase">Đặt tour ngay <i
                                        class="fa fa-angle-right icon-arrow-right"></i></span>
                                <span class="tiny-text">Giữ chỗ, chưa cần thanh toán</span>
                            </a>
                        </div>
                        <div class="hotline-aside">
                            <p style="color: #ef7325;width: 100%;text-align: center">Để lại số điện thoại chúng tôi sẽ
                                liên hệ với bạn!</p>
                            <form class="form-hotline"
                                action="https://hagiangopentour.com/contact/frontend/contact/create"
                                id="mailsubricre_1">
                                <div class="error"></div>

                                <div class="rel">
                                    <input type="phone" name="phone" class="form-control phone"
                                        placeholder="Số điện thoại của tôi" required>
                                    <button type="submit">Gửi</button>
                                </div>
                            </form>

                        </div>
                        <script>
                            $(document).ready(function () {
                                $('#mailsubricre_1 .error').hide();
                                var uri = $('#mailsubricre_1').attr('action');
                                $('#mailsubricre_1').on('submit', function () {
                                    var postData = $(this).serializeArray();
                                    $.post(uri, {
                                        post: postData,
                                        fullnam)(),
                                        phone: $('#mailsubricre_1 .phone                                ,
                                        email                                ilsubricre_1.email').val()
                                                            }, function (data) {
                                                                va                                        rse(data);
                                    $('#mailsubricre_1 .error').s                                                                       if (json.er                                                                                                                     ricre_1.error').remo                                        lert-success').addClass('aler                                        ;
                                                                          ilsubricre_1.error').htm                                            r);
                                        } else {

                                1 .error').removeClass('alert alert- danger').addClass('                                        ess');
                                                                    $('#mailsubricre_1 .error').html('').html('Đăng ký tư vấn thành công.');
                            $('#mailsubricre_1').trigger("reset");
                            setTimeout(function () {
                            }, 3000)                                                                                                                                                                                                        });
                            return false;
                                });
                            });
                        </script>
                    </div>


                    <div class="clearfix-10"></div>

                    <hr>

                    @if (count($tourRelated) > 0)
                    <h3 class="cothebanquantam">Có thể bạn quan tâm</h3>
                    <div class="clearfix-10"></div>

                    <div class="product-item bgfff" style="padding: 0px">
                        @foreach($tourRelated as $tour)
                        <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                            <div class="item itemCatalogue" style="margin-bottom: 30px">
                                <div class="img">
                                    <a href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}"><img
                                            src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>
                                    <div class="poAB">-{{ $tour->discount_percent }}%</div>
                                </div>

                                <div class="info">
                                    <h3 class="h3-name">
                                        <a
                                            href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}">{{$tour->name}}</a>
                                    </h3>

                                    <ul class="ulproduct">
                                        <li>
                                            <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>
                                            <span class="font-semi">Mã tour: </span> {{ $tour->tour_code }}
                                        </li>
                                        <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành từ:
                                            </span> {{ $tour->destination_from }} </li>
                                        <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch trình:
                                            </span> {{ $tour->destination_to }}</li>
                                        <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi hành:
                                            </span> {{ $tour->schedule }} </li>
                                        <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương tiện:
                                            </span> {{ $tour->vehicle }} </li>

                                    </ul>
                                    <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $tour->price }}
                                            VND</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-md-4 col-lg-3 col-sm-12 col-xs-12 wow fadeInUp hidden-xs">
                <div class="hotline-aside">
                    <p style="color: #ef7325;width: 100%;text-align: center">Để lại số điện thoại chúng tôi sẽ liên hệ
                        với bạn!</p>
                    <form class="form-hotline" action="https://hagiangopentour.com/contact/frontend/contact/create"
                        id="mailsubricre">
                        <div class="error"></div>

                        <div class="rel">
                            <input type="phone" name="phone" class="form-control phone"
                                placeholder="Số điện thoại của tôi" required>
                            <button type="submit">Gửi</button>
                        </div>
                    </form>

                </div>

                @if (count($tourRelated) > 0)
                <div class="product-item bgfff" style="padding-top: 25px;padding-bottom: 0px">
                    @foreach($tourRelated->take(1) as $tour)
                    <div class="item">
                        <div class="img">
                            <a href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}"><img
                                    src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>
                            <div class="poAB">-{{ $tour->discount_percent }}%</div>
                        </div>

                        <div class="info">
                            <h3 class="h3-name">
                                <a href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}">{{$tour->name}}</a>
                            </h3>

                            <ul class="ulproduct">
                                <li>
                                    <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>
                                    <span class="font-semi">Mã tour: </span> {{ $tour->tour_code }}
                                </li>
                                <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành từ:
                                    </span> {{ $tour->destination_from }} </li>
                                <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch trình:
                                    </span> {{ $tour->destination_to }}</li>
                                <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi hành:
                                    </span> {{ $tour->schedule }} </li>
                                <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương tiện:
                                    </span> {{ $tour->vehicle }} </li>

                            </ul>
                            <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $tour->price }}
                                    VND</span>
                            </div>
                        </div>
                        <div class="clearfix-10"></div>
                        <a href="dat-tour1e35.html?id=39" class="btn btn-primary btn-lg btn-block button-booking-tour">
                            <span class="main-text text-uppercase">Đặt tour ngay <i
                                    class="fa fa-angle-right icon-arrow-right"></i></span>
                            <span class="tiny-text">Giữ chỗ, chưa cần thanh toán</span>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif

            </div>

        </div>

    </div>

    </div>

</section>
@endsection
