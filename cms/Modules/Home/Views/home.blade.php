@extends('Core::layouts.frontend.app')
@section('content')
<h1 class="hidden"> DU LỊCH HÀ GIANG - TOUR HÀ GIANG - TOUR DU LỊCH HÀ GIANG</h1>
<main>
    @if(!empty($sliders))
    <section class="banner-home">
        <div id="slider-home" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
            @foreach($sliders as $slider)
            <div class="item"><a href="#"><img src="{{ asset($slider->image_path) }}" /></a>
            </div>
            @endforeach
        </div>
    </section>
    @endif
    <section class="taisaochon wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="item-taisaochon">
                        <div class="img"><img style="border-radius: 50%" src="https://hagiangmountaintravel.com/storage/logo.jpeg"
                                alt="LẮNG NGHE">
                        </div>
                        @if (session()->get('locale') == 'vi')
                        @if(isset($configLabels['du-lich']))
                        <div class="info">
                            <h3>{{ $configLabels['du-lich'] }}</h3>
                            <p style="text-align: left;">{{ $configValues['du-lich'] }}</p>
                        </div>
                        @endif
                        @else
                        <div class="info">
                            <h3>Travel</h3>
                            <p style="text-align: left;">The suitable journeys are created for you.</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="item-taisaochon">
                        <div class="img"><img style="border-radius: 50%" src="https://hagiangmountaintravel.com/storage/logo.jpeg"
                                alt="AN TÂM - TIN TƯỞNG">

                        </div>
                        @if (session()->get('locale') == 'vi')
                        @if(isset($configLabels['tu-thien']))
                        <div class="info">
                            <h3>{{ $configLabels['tu-thien'] }}</h3>
                            <p style="text-align: left;">{{ $configValues['tu-thien'] }}</p>
                        </div>
                        @endif
                        @else
                        <div class="info">
                            <h3>Charity</h3>
                            <p style="text-align: left;">Every act of kindness is a step towards paradise.</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="aboutus wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <h2 class="h2-title none">10 dollars for Ha Giang</h2>
                    <div class="text-justify" id="text-justify-home">
                        <p style="text-align: justify;"><span style="font-size:16px;"><span
                                    style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;">
<strong>Hà Giang</strong> has a global geopark recognized by <strong>UNESCO</strong> as a world heritage site - <strong>Dong Van Karst Plateau</strong>. <br> This place is famous for its beautiful roads and steep passes, making it an ideal destination for adventurers.<br> These include: <strong>Happiness Road, Mã Pí Lèng Pass, Nho Quế River, Thẩm Mã Slope...</strong>
For each guest booking a tour at <strong>HaGiang Mountain Travel</strong>, they will indirectly contribute $10 to the travel company's Fund to contribute to the purpose of protecting the environment and developing life and people of <strong>Ha Giang</strong>. <br>
Come to <strong>Ha Giang Mountain Travel</strong> to have unique experiences and unforgettable memories with our tours for you.
                    </div>
                </div>
                @if (!empty($galleries))
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div id="slider-hagiang" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @foreach($galleries as $gallery)
                        <div class="item">
                            <a href="#"><img alt="{{ $gallery->name }}" src="{{ asset($gallery->image_path) }}" /></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

        </div>

    </section>

    <section class="product-item bgfff wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="h2-title">@lang('language.charityProject')</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h3 style="text-transform: uppercase;">@lang('language.numberCustomer')</h3>
                                <p style="font-size: 36px; text-align: center; color: orange; font-weight: bold;">{{ $customerTour }}</p>
                            </div>
                            <div>
                                <h3 style="text-transform: uppercase;">@lang('language.theMoney')</h3>
                                <p style="font-size: 36px; text-align: center; color: orange; font-weight: bold;">{{ $totalMoney }} {{ (session()->get('locale') == 'en') ? 'USD' : 'VND' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ (session()->get('locale') == 'en') ? 'Name' : 'Tên khách hàng' }} </th>
                                <th scope="col">{{ (session()->get('locale') == 'en') ? 'Phone number' : 'SDT' }}</th>
                                <th scope="col">{{ (session()->get('locale') == 'en') ? 'Tour name' : 'Tour đã đặt' }}</th>
                                <th scope="col">{{ (session()->get('locale') == 'en') ? 'Money' : 'Tiền' }}</th>
                                </tr>
                            </thead>
                            @if($tourInfos)
                            <tbody>
                                @foreach($tourInfos as $info)
                                <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $info['name'] }}</td>
                                <td>{{ $info['phone'] }}</td>
                                <td>{{ $info['tour_name'] }}</td>
                                <td>{{ $info['total_price'] }} {{ (session()->get('locale') == 'en') ? 'USD' : 'VND' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            @endif
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .absoluteTour {
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 100%;
            text-align: center;
            background: #00933d;
            padding: 8px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .absoluteTour a {
            color: #fff;
        }

        .relativeTour {
            position: relative;
            margin-bottom: 30px
        }

        .relativeTour img {
            border-radius: 10px;
            height: 170px;
            width: 100%;
            object-fit: cover
        }
    </style>

    <style>
        .product-category-owl .owl-stage {
            left: -40px;
        }
    </style>

    @if ($categoryWithTour)
    <section class="product-item wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="h2-title">@lang('language.highlight')</h2>
                    </div>
                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @foreach($categoryWithTour->children as $cate)
                        @foreach($cate->tour as $tour)
                        <div class="item">
                            <div class="img">
                                <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}"><img
                                        src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>

                            </div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}">
                                        {{ $tour->name }}
                                    </a>
                                </h3>
                                <ul class="ulproduct">
                                    <li>
                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>
                                        <span class="font-semi">@lang('language.tourCode'): </span> {{ $tour->tour_code }}
                                    </li>
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.destinationFrom'): </span> {{ $tour->destination_from }}
                                    </li>
                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">@lang('language.schedule'): </span> {{ $tour->destination_to }}
                                    </li>
                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">@lang('language.departureTime'): </span> {{ $tour->schedule }}
                                    </li>
                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">@lang('language.vehicle'): </span> {{ $tour->vehicle }}
                                    </li>
                                </ul>
                                <div class="priceproduct"> @lang('language.priceFrom'):
                                    <span class="price mr-2">{{ $tour->price }} {{ session()->get('locale') == 'vi' ? 'VND' : 'USD' }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</main>

@endsection
