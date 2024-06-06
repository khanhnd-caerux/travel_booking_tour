@extends('Core::layouts.frontend.app')
@section('content')
<section class="product-item pt0" style="padding-bottom: 0px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('client.index') }}">@lang('language.homepage')</a></li>
                    <li class="uk-active"><a href="{{ route('client.contentList', ['slug' => $contentList->slug]) }}"
                            title="{{ $contentList->name }}">{{ $contentList->name }}</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>

<section class="product-item wow fadeInUp bgfff" style="padding: 30px 0px; visibility: visible; height: auto">
    <div class="container">
        @if ($contentList->slug != "charity-project")
        <div class="row" id="row_mobile">
            @if ($contentList->type && $contentList->type == 'tour')
            @include('Core::layouts.frontend.sidebar')
            @endif
            <div class="@if ($contentList->type && $contentList->type == 'tour')
            col-md-9 col-sm-9
            @else
            col-md-12 col-sm-12
            @endif col-xs-12 h-100">
                <div class="text-center">
                    <h1 class="h2-title">{{ $contentList->name }} </h1>
                </div>
                <div class="clearfix"></div>
                <div class="desc-catalogue">
                    <div style="text-align: justify;">
                        <p><a href="#">{{ $contentList->description }}</p>
                    </div>

                </div>
                <div class="clearfix-20"></div>
                <div class="row">
                    @if(count($contentList->children) > 0)
                    @foreach($contentList->children as $category)
                    @foreach($category->tour as $tour)
                    @if ($tour->status == 0)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}"><img
                                        src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}">{{ $tour->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li>
                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>
                                        <span class="font-semi">@lang('language.tourCode'): </span> {{ $tour->tour_code }}
                                    </li>
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.destinationFrom'): </span>
                                        {{ $tour->destination_from }} </li>
                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">@lang('language.schedule'):
                                        </span> {{ $tour->destination_to }} </li>
                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">@lang('language.departureTime'):
                                        </span> {{ $tour->schedule }} </li>
                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">@lang('language.vehicle'): </span>
                                        {{ $tour->vehicle }} </li>

                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> @lang('language.priceFrom'): <span class="price mr-2">{{ $tour->price }}
                                        {{ session()->get('locale') == 'vi' ? 'VND' : 'USD' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                    @else
                    @foreach($contentList->tour as $tour)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}"><img
                                        src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}">{{ $tour->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li>
                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>
                                        <span class="font-semi">@lang('language.tourCode'): </span> {{ $tour->tour_code }}
                                    </li>
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.destinationFrom'): </span>
                                        {{ $tour->destination_from }} </li>
                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">@lang('language.schedule'):
                                        </span> {{ $tour->destination_to }} </li>
                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">@lang('language.departureTime'):
                                        </span> {{ $tour->schedule }} </li>
                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">@lang('language.vehicle'): </span>
                                        {{ $tour->vehicle }} </li>

                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> @lang('language.priceFrom'): <span class="price mr-2">{{ $tour->price }}
                                        {{ session()->get('locale') == 'vi' ? 'VND' : 'USD' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    @if(count($contentList->children) > 0)
                    @foreach($contentList->children as $category)
                    @foreach($category->ticket as $ticket)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset($ticket->feature_image_path) }}" alt="{{ $ticket->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="javascript:void(0)">{{
                                        $ticket->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.departureTime'): </span>{{
                                        $ticket->destination_from }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> @lang('language.priceFrom'): <span class="price mr-2">{{ $ticket->price }}
                                        {{ session()->get('locale') == 'vi' ? 'VND' : 'USD' }}</span>
                                </div>
                            </div>
                            <!--<div class="link">-->
                            <!--<a href="javascript:void(0)" target="_blank" rel="noopener noreferrer">-->
                            <!--    <img class="img_booknow" src="{{ asset('frontend/book_now.png') }}" alt="Book Now">-->
                            <!--</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                    @else
                    @foreach($contentList->ticket as $ticket)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset($ticket->feature_image_path) }}" alt="{{ $ticket->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="javascript:void(0)">{{
                                        $ticket->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.departureTime'): </span>{{
                                        $ticket->destination_from }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> @lang('language.priceFrom'): <span class="price mr-2">{{ $ticket->price }}
                                        {{ session()->get('locale') == 'vi' ? 'VND' : 'USD' }}</span>
                                </div>
                                <!--<div class="link">-->
                                <!--<a href="javascript:void(0)" target="_blank" rel="noopener noreferrer">-->
                                <!--    <img class="img_booknow" src="{{ asset('frontend/book_now.png') }}" alt="Book Now">-->
                                <!--</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    @if(count($contentList->children) > 0)
                    @foreach($contentList->children as $category)
                    @foreach($category->car as $car)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset($car->feature_image_path) }}" alt="{{ $car->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="javascript:void(0)">{{
                                        $car->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.departureTime'): </span>{{
                                        $car->destination_from }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> @lang('language.priceFrom'): <span class="price mr-2">{{ $car->price }}
                                        {{ session()->get('locale') == 'vi' ? 'VND' : 'USD' }}</span>
                                </div>
                                <!--<div class="link">-->
                                <!--<a href="javascript:void(0)" target="_blank" rel="noopener noreferrer">-->
                                <!--    <img class="img_booknow" src="{{ asset('frontend/book_now.png') }}" alt="Book Now">-->
                                <!--</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                    @else
                    @foreach($contentList->car as $car)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset($car->feature_image_path) }}" alt="{{ $car->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="javascript:void(0)">{{
                                        $car->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.departureTime'): </span>{{
                                        $car->destination_from }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="priceproduct"> @lang('language.priceFrom'): <span class="price mr-2">{{ $car->price }}
                                        {{ session()->get('locale') == 'vi' ? 'VND' : 'USD' }}</span>
                                </div>
                                <!--<div class="link">-->
                                <!--    <a href="javascript:void(0)" target="_blank" rel="noopener noreferrer">-->
                                <!--        <img class="img_booknow" src="{{ asset('frontend/book_now.png') }}" alt="Book Now">-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        @else
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
                                @if (isset($configValues['so-nguoi-tu-thien']))
                                <p style="font-size: 36px; text-align: center; color: orange; font-weight: bold;">{{ $configValues['so-nguoi-tu-thien'] }}</p>
                                @else
                                <p style="font-size: 36px; text-align: center; color: orange; font-weight: bold;">50</p>
                                @endif
                            </div>
                            <div>
                                <h3 style="text-transform: uppercase;">@lang('language.theMoney')</h3>
                                @if (isset($configValues['tong-tien-tu-thien']))
                                <p style="font-size: 36px; text-align: center; color: orange; font-weight: bold;">{{ $configValues['tong-tien-tu-thien'] }} USD</p>
                                @else
                                <p style="font-size: 36px; text-align: center; color: orange; font-weight: bold;">1,000 USD</p>
                                @endif
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
                                </tr>
                            </thead>
                            @if($tourInfos)
                            <tbody>
                                @foreach($tourInfos as $info)
                                <tr>
                                @if ($configValues['so-bat-dau'])
                                <th scope="row">{{ (int)$configValues['so-bat-dau'] ++ }}</th>
                                @else
                                <th scope="row">{{ $loop + 1 }}</th>
                                @endif
                                <td>{{ $info->name }}</td>
                                <td>{{ substr($info->phone, 0, 4) . "." . substr($info->phone, 4, 3) . ".xxx" }}</td>
                                <td>{{ $info->tour->name }}</td>
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
        @endif
    </div>
</section>
<style>
    .img_booknow {
        margin: 10px auto;
        width: 160px;
        height: auto;
        border-radius: 15px;
    }
    .link {
        display: flex;
        width: 100%;
        justify-content: center;
    }
</style>
@endsection
