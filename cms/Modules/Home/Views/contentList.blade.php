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

<section class="product-item wow fadeInUp bgfff" style="padding: 30px 0px; visibility: visible; height: 100vh">
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

                <div class="pull-right" style="background: #eceff0;padding: 3px 15px;width: 100%;text-align: right;">
                    <div class="pull-left">
                        <ul class="flex-row sort">
                            <li><b>Sắp xếp theo</b></li>
                            <li><a href="#">Giá tăng
                                    dần</a> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></li>
                            <li><a href="#">Giá giảm
                                    dần <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></li>

                        </ul>

                    </div>
                    <div class="pagination pull-right">
                    </div>
                </div>
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
                                        <span class="font-semi">Mã tour: </span> {{ $tour->tour_code }}
                                    </li>
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành từ: </span>
                                        {{ $tour->destination_from }} </li>
                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch trình:
                                        </span> {{ $tour->destination_to }} </li>
                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi hành:
                                        </span> {{ $tour->schedule }} </li>
                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương tiện: </span>
                                        {{ $tour->vehicle }} </li>

                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $tour->price }}
                                        VND</span>
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
                                        <span class="font-semi">Mã tour: </span> {{ $tour->tour_code }}
                                    </li>
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành từ: </span>
                                        {{ $tour->destination_from }} </li>
                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch trình:
                                        </span> {{ $tour->destination_to }} </li>
                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi hành:
                                        </span> {{ $tour->schedule }} </li>
                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương tiện: </span>
                                        {{ $tour->vehicle }} </li>

                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $tour->price }}
                                        VND</span>
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
                                <a href="{{ route('client.contentDetail', ['slug' => $ticket->slug]) }}"><img
                                        src="{{ asset($ticket->feature_image_path) }}" alt="{{ $ticket->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.contentDetail', ['slug' => $ticket->slug]) }}">{{
                                        $ticket->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí: </span>{{
                                        $ticket->free }} </li>
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành: </span>{{
                                        $ticket->destination_from }}
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón trả:
                                        </span> {{ $ticket->destination_to }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $ticket->price }}
                                        VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                    @else
                    @foreach($contentList->ticket as $ticket)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="{{ route('client.contentDetail', ['slug' => $ticket->slug]) }}"><img
                                        src="{{ asset($ticket->feature_image_path) }}" alt="{{ $ticket->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.contentDetail', ['slug' => $ticket->slug]) }}">{{
                                        $ticket->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí: </span>{{
                                        $ticket->free }} </li>
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành: </span>{{
                                        $ticket->destination_from }}
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón trả:
                                        </span> {{ $ticket->destination_to }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $ticket->price }}
                                        VND</span>
                                </div>
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
                                <a href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}"><img
                                        src="{{ asset($car->feature_image_path) }}" alt="{{ $car->name }}"></a>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}">{{
                                        $car->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí: </span>{{
                                        $car->free }} </li>
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành: </span>{{
                                        $car->destination_from }}
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón trả:
                                        </span> {{ $car->destination_to }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                                <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $car->price }}
                                        VND</span>
                                </div>
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
                                <a href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}"><img
                                        src="{{ asset($car->feature_image_path) }}" alt="{{ $car->name }}"></a>

                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}">{{
                                        $car->name
                                        }}</a>
                                </h3>
                                <div class="clearfix"></div>
                                <ul class="ulproduct">
                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí: </span>{{
                                        $car->free }} </li>
                                    <li>
                                        <i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành: </span>{{
                                        $car->destination_from }}
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón trả:
                                        </span> {{ $car->destination_to }}
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="priceproduct"> Giá chỉ từ: <span class="price mr-2">{{ $car->price }}
                                        VND</span>
                                </div>
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
@endsection
