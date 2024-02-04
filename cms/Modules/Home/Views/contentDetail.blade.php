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
                    <h1>{{ $contentDetail->name }}</h1>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 wow fadeInLeft">
                <div class="listAbums hidden-xs">
                    <div class="col-115">
                        <ul id='carousel-custom-dots' class='owl-dots list_yk'>
                            @if ($contentDetail->tourImages)
                            @foreach($contentDetail->tourImages as $image)
                            <li class="owl-dot">
                                <a href="javascript:void(0)"><img class="img_yk_cm click"
                                        src="{{ asset($image->image_path) }}" alt="{{ $contentDetail->name }}"></a>

                            </li>
                            @endforeach
                            @endif
                            @if ($contentDetail->carImages)
                            @foreach($contentDetail->carImages as $image)
                            <li class="owl-dot">
                                <a href="javascript:void(0)"><img class="img_yk_cm click"
                                        src="{{ asset($image->image_path) }}" alt="{{ $contentDetail->name }}"></a>

                            </li>
                            @endforeach
                            @endif
                            @if ($contentDetail->ticketImages)
                            @foreach($contentDetail->ticketImages as $image)
                            <li class="owl-dot">
                                <a href="javascript:void(0)"><img class="img_yk_cm click"
                                        src="{{ asset($image->image_path) }}" alt="{{ $contentDetail->name }}"></a>

                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="col-t115">
                        <div id="slider-home-chitiet" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                            @if ($contentDetail->tourImages)
                            @foreach($contentDetail->tourImages as $image)
                            <div class="item ">
                                <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                        alt="{{ $contentDetail->name }}" /></a>
                            </div>
                            @endforeach
                            @endif
                            @if ($contentDetail->carImages)
                            @foreach($contentDetail->carImages as $image)
                            <div class="item ">
                                <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                        alt="{{ $contentDetail->name }}" /></a>
                            </div>
                            @endforeach
                            @endif
                            @if ($contentDetail->ticketImages)
                            @foreach($contentDetail->ticketImages as $image)
                            <div class="item ">
                                <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                        alt="{{ $contentDetail->name }}" /></a>
                            </div>
                            @endforeach
                            @endif
                        </div>

                    </div>

                </div>
                <div class="visible-xs">
                    <div id="sync1" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @if ($contentDetail->tourImages)
                        @foreach($contentDetail->tourImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $contentDetail->name }}" /></a>
                        </div>
                        @endforeach
                        @endif
                        @if ($contentDetail->ticketImages)
                        @foreach($contentDetail->ticketImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $contentDetail->name }}" /></a>
                        </div>
                        @endforeach
                        @endif
                        @if ($contentDetail->carImages)
                        @foreach($contentDetail->carImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $contentDetail->name }}" /></a>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="clearfix-10"></div>
                    <div id="sync2" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @if ($contentDetail->tourImages)
                        @foreach($contentDetail->tourImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $contentDetail->name }}" /></a>
                        </div>
                        @endforeach
                        @endif
                        @if ($contentDetail->ticketImages)
                        @foreach($contentDetail->ticketImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $contentDetail->name }}" /></a>
                        </div>
                        @endforeach
                        @endif
                        @if ($contentDetail->carImages)
                        @foreach($contentDetail->carImages as $image)
                        <div class="item ">
                            <a href="javascript:void(0)"><img src="{{ asset($image->image_path) }}"
                                    alt="{{ $contentDetail->name }}" /></a>
                        </div>
                        @endforeach
                        @endif
                    </div>


                </div>


            </div>
            <div class="clearfix-20 visible-xs"></div>
            <div class="col-md-4 col-lg-3 col-sm-12 col-xs-12 wow fadeInRight">
                <aside class="package-full">
                    <p class="dp-n-tablet-small">Giá chỉ từ: </p>

                    <p class="price-new">{{ $contentDetail->price }} VND</p>
                    <p class="price-old">{{ $contentDetail->price }} VND</p>

                    <div class="star star-mobile">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                    </div>
                </aside>

                <div class="info-tour">
                    @if ($contentDetail->category->type == 'tour')
                    <ul class="ulproduct">
                        <li>
                            <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>
                            <span class="font-semi">Mã tour: </span> {{ $contentDetail->tour_code }}
                        </li>
                        <li>
                            <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành từ: </span> {{
                            $contentDetail->destination_from }}
                        </li>
                        <li>
                            <i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch trình: </span> {{
                            $contentDetail->destination_to }}
                        </li>
                        <li>
                            <i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi hành: </span> {{
                            $contentDetail->schedule }}
                        </li>
                        <li>
                            <i class="fa fa-car text-pri"></i><span class="font-semi">Phương tiện: </span> {{
                            $contentDetail->vehicle }}
                        </li>
                    </ul>
                    @else
                    <ul class="ulproduct">
                        <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí: </span>{{
                            $contentDetail->free }} </li>
                        <li>
                            <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành: </span> {{
                            $contentDetail->destination_from }}
                        </li>
                        <li>
                            <i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón trả: </span> {{
                            $contentDetail->destination_to }}
                        </li>
                    </ul>
                    <div class="service-child service-child-mobile" style="padding-left: 0px; border: none">
                        <div class="item-service-left-mobile">
                            <b>Lộ trình: </b> {{ $contentDetail->road }}
                        </div>
                    </div>
                    @endif
                </div>


                <div class="mt-15">
                    <a href="{{ route('client.bookingTour', ['id' => $contentDetail->id]) }}" class="btn btn-primary btn-lg btn-block button-booking-tour">
                        @if ($contentDetail->category->type == 'tour')
                        <span class="main-text text-uppercase">Đặt tour ngay <i
                                class="fa fa-angle-right icon-arrow-right"></i></span>
                        @else
                        <span class="main-text text-uppercase">Đặt xe ngay <i
                                class="fa fa-angle-right icon-arrow-right"></i></span>
                        @endif
                        <span class="tiny-text">Giữ chỗ, chưa cần thanh toán</span>
                    </a>
                </div>


                <div class="visible-xs">
                    <div class="hotline-aside">
                        <p style="color: #ef7325;width: 100%;text-align: center">Để lại số điện thoại chúng tôi sẽ liên
                            hệ với bạn!</p>
                        <form class="form-hotline" action="{{ route('client.contact.store') }}" id="mailsubricre"
                            method="post">
                            @csrf
                            <div class="error"></div>
                            <div class="rel">
                                <input type="phone" name="phone_number" class="form-control phone"
                                    placeholder="Số điện thoại của tôi" required>
                                <input type="hidden" name="url" value="{{Request::url()}}">
                                <button type="submit">Gửi</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 wow fadeInUp">
                <div class="menu-body-tour">
                    <ul class="nav nav-tour nav-tour-mobile">
                        @if ($contentDetail->category->type == 'tour')
                        <li class="nav-item nav-item-tour">
                            <a id="introduce" href="#gioithieu" class="nav-link nav-link-tour active">Giới thiệu</a>
                        </li>
                        <li class="nav-item nav-item-tour">
                            <a id="schedule" href="#lichtrinh" class="nav-link nav-link-tour">Lịch trình</a>
                        </li>
                        <li class="nav-item nav-item-tour">
                            <a id="clause" href="#dieukhoan" class="nav-link nav-link-tour">Bao gồm và Điều khoản</a>
                        </li>
                        @else
                        <li class="nav-item nav-item-tour">
                            <a id="introduce" href="javascript:void(0)" class="nav-link nav-link-tour active"
                                data-toggle="tab">Chi tiết</a>
                        </li>
                        @endif
                    </ul>
                    <div class="clearfix-10"></div>

                    <div id="gioithieu">
                        {!! $contentDetail->content !!}
                    </div>
                    <div class="clearfix-10"></div>
                    <div class="col-md-4 col-sm-4 visible-xs">
                        <div class="mt-15">
                            <a href="{{ route('client.bookingTour', ['id' => $contentDetail->id]) }}"
                                class="btn btn-primary btn-lg btn-block button-booking-tour">
                                <span class="main-text text-uppercase">Đặt tour ngay <i
                                        class="fa fa-angle-right icon-arrow-right"></i></span>
                                <span class="tiny-text">Giữ chỗ, chưa cần thanh toán</span>
                            </a>
                        </div>
                        <div class="hotline-aside">
                            <p style="color: #ef7325;width: 100%;text-align: center">Để lại số điện thoại chúng tôi sẽ
                                liên hệ với bạn!</p>
                            <form class="form-hotline" action="{{ route('client.contact.store') }}" method="post">
                                @csrf
                                <div class="error"></div>
                                <div class="rel">
                                    <input type="phone" name="phone_number" class="form-control phone"
                                        placeholder="Số điện thoại của tôi" required>
                                    <input type="hidden" name="url" value="{{Request::url()}}">
                                    <button type="submit">Gửi</button>
                                </div>
                            </form>

                        </div>
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
                                    <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}"><img
                                            src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>
                                    <div class="poAB">-{{ $tour->discount_percent }}%</div>
                                </div>

                                <div class="info">
                                    <h3 class="h3-name">
                                        <a
                                            href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}">{{$tour->name}}</a>
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
                    <form class="form-hotline" action="{{ route('client.contact.store') }}" method="post">
                        @csrf
                        <div class="error"></div>
                        <div class="rel">
                            <input type="phone" name="phone_number" class="form-control phone"
                                placeholder="Số điện thoại của tôi" required>
                            <input type="hidden" name="url" value="{{Request::url()}}">
                            <button type="submit">Gửi</button>
                        </div>
                    </form>
                </div>

                @if (count($tourRelated) > 0)
                <div class="product-item bgfff" style="padding-top: 25px;padding-bottom: 0px">
                    @foreach($tourRelated->take(1) as $tour)
                    <div class="item">
                        <div class="img">
                            <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}"><img
                                    src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>
                            <div class="poAB">-{{ $tour->discount_percent }}%</div>
                        </div>

                        <div class="info">
                            <h3 class="h3-name">
                                <a
                                    href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}">{{$tour->name}}</a>
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
                        <a href="{{ route('client.bookingTour', ['id' => $contentDetail->id]) }}" class="btn btn-primary btn-lg btn-block button-booking-tour">
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
    @if(session('success'))
    <div class="modal fade in" id="exampleModalCenter" aria-hidden="false"
        style="display: block; background: #00000070">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="display: flex; justify-content: space-between;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hà Giang Tour xin cảm ơn</h5>
                    <button type="button" class="close hide-modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary hide-modal" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    </div>
</section>
<script>
    $(".hide-modal").click(function () {
        $("#exampleModalCenter").toggle();
    });
</script>
@endsection
