@extends('Core::layouts.frontend.app')
@section('content')
<section class="product-item pt0" style="padding-bottom: 0px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('client.index') }}">Trang chủ</a></li>
                    <li class="uk-active"><a href="{{ route('client.tourList', ['slug' => $tourList->slug]) }}"
                            title="{{ $tourList->name }}">{{ $tourList->name }}</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>

<section class="product-item wow fadeInUp bgfff" style="padding: 30px 0px; visibility: visible;">
    <div class="container">
        <div class="row" id="row_mobile">
            @include('Core::layouts.frontend.sidebar')
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="text-center">
                    <h1 class="h2-title">{{ $tourList->name }} </h1>
                </div>
                <div class="clearfix"></div>
                <div class="desc-catalogue">
                    <div style="text-align: justify;">
                        <p><a href="https://hagiangopentour.com/tour-tay-bac.html">{{ $tourList->description }}</p>
                    </div>

                </div>

                <div class="pull-right" style="background: #eceff0;padding: 3px 15px;width: 100%;text-align: right;">
                    <div class="pull-left">
                        <ul class="flex-row sort">
                            <li><b>Sắp xếp theo</b></li>
                            <li><a href="https://hagiangopentour.com/tour-du-lich-tay-bac.html?sort=price|asc">Giá tăng
                                    dần</a> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></li>
                            <li><a href="https://hagiangopentour.com/tour-du-lich-tay-bac.html?sort=price|desc">Giá giảm
                                    dần <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></li>

                        </ul>

                    </div>
                    <div class="pagination pull-right">
                    </div>
                </div>
                <div class="clearfix-20"></div>
                <div class="row">
                    @if(count($tourList->children) > 0)
                    @foreach($tourList->children as $category)
                    @foreach($category->tour as $tour)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}"><img
                                        src="{{ $tour->feature_image_path }}" alt="{{ $tour->name }}"></a>
                                <div class="poAB">-{{ $tour->discount_percent }}%</div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}">{{ $tour->name
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
                    @foreach($tourList->tour as $tour)
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="item itemCatalogue" style="margin-bottom: 30px">
                            <div class="img">
                                <a href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}"><img
                                        src="{{ $tour->feature_image_path }}" alt="{{ $tour->name }}"></a>
                                <div class="poAB">-{{ $tour->discount_percent }}%</div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.tourDetail', ['slug' => $tour->slug]) }}">{{ $tour->name
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
