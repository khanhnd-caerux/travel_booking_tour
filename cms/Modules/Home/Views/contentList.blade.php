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

                <!--<div class="pull-right" style="background: #eceff0;padding: 3px 15px;width: 100%;text-align: right;">-->
                <!--    <div class="pull-left">-->
                <!--        <ul class="flex-row sort">-->
                <!--            <li><b>{{ session()->get('locale') == 'vi' ? 'Sắp xếp theo' : 'Group by' }}</b></li>-->
                <!--            <li><a href="#">{{ session()->get('locale') == 'vi' ? 'Giá tăng dần' : 'Price up' }}</a> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></li>-->
                <!--            <li><a href="#">{{ session()->get('locale') == 'vi' ? 'Giá giảm dần' : 'Price down' }}<i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--    <div class="pagination pull-right">-->
                <!--    </div>-->
                <!--</div>-->
                <div class="clearfix-20"></div>
                <div class="row">
                    @if(count($contentList->children) > 0)
                    @foreach($contentList->children as $category)
                    @foreach($category->tour as $tour)
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
