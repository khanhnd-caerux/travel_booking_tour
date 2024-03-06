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
                        @if(isset($configLabels['du-lich']))
                        <div class="info">
                            <h3>{{ $configLabels['du-lich'] }}</h3>
                            <p style="text-align: left;">{{ $configValues['du-lich'] }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="item-taisaochon">
                        <div class="img"><img style="border-radius: 50%" src="https://hagiangmountaintravel.com/storage/logo.jpeg"
                                alt="AN TÂM - TIN TƯỞNG">

                        </div>
                        @if(isset($configLabels['tu-thien']))
                        <div class="info">
                            <h3>{{ $configLabels['tu-thien'] }}</h3>
                            <p style="text-align: left;">{{ $configValues['tu-thien'] }}</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="product-item bgfff wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="h2-title">Dự án thiện nguyện</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h3>Số lượng khách đã đặt Tour</h3>
                                <p>{{ $customerTour }}</p>
                            </div>
                            <div>
                                <h3>Số tiền được trích ra làm từ thiện</h3>
                                <p>{{ $totalMoney }} {{ (session()->get('locale') == 'en') ? 'USD' : 'VND' }}</p>
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
<section class="aboutus wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <h2 class="h2-title none">@lang('language.theIdea')</h2>
                    @if(session()->get('locale') == 'vi')
                    <div class="text-justify" id="text-justify-home">
                        <p style="text-align: justify;"><span style="font-size:16px;"><span
                                    style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;"><a
                                            href="index.html"><strong>Hà
                                                Giang</strong></a>&nbsp;có công viên địa chất toàn cầu
                                        được<strong> UNESCO</strong>&nbsp;cồng nhận&nbsp;là di sản thế giới
                                        -&nbsp;<strong>Cao</strong> <strong>Nguyên Đá Đồng Văn</strong>. Nơi
                                        đây nổi tiếng với&nbsp;những cung đường đẹp&nbsp;và những con
                                        dốc,&nbsp;con&nbsp;đèo hiểm trở vì vậy đây sẽ là điểm đến lý tưởng
                                        không thể thiếu trong hành trình của những phượt thủ. Đó là:
                                        <strong>Cung Đường Hạnh Phúc, Đèo Mã Pí Lèng, Sông Nho Quế, Dốc Thẩm
                                            Mã</strong>...</span></span></span></p>

                        <p style="text-align: justify;"><span style="font-size:16px;"><span
                                    style="font-family:Arial,Helvetica,sans-serif;"><span
                                        style="color:#000000;"><strong>Hà Giang</strong> có nhiều đồng bào
                                        dân tộc sinh sống như: <strong>H'Mông, Lô Lô, Tày, Dao</strong>...
                                        Với&nbsp;nhiều phong tục, tập quán truyền thống riêng nên tạo ra nơi
                                        đây có nhiều nét văn hóa đa dạng&nbsp;sắc màu để các bạn có những
                                        chuyến '' </span><a href="trai-nghiem-ngu-homestay.html"><span
                                            style="color:#000000;"><strong>Tour Trải
                                                Nghiêm</strong></span></a><span style="color:#000000;">
                                        ''&nbsp; lý thú bằng ô tô hoặc bằng xe máy.</span></span></span></p>

                        <p style="text-align: justify;"><span style="font-size:16px;"><span
                                    style="font-family:Arial,Helvetica,sans-serif;"><span
                                        style="color:#000000;"><strong>Hà Giang</strong> cũng nổi tiếng với
                                        những <strong>thửa ruộng bậc thang</strong>&nbsp;<strong>Hoàng Su
                                            Phì</strong>, với những cánh đồng&nbsp;<strong>Hoa Tam Giác
                                            Mạch</strong>,<strong> Hoa Đào</strong>, <strong>Hoa
                                            Mận</strong>, <strong>Hoa Cải</strong>... Để các bạn thực hiện
                                        những chuyến đi&nbsp;''<strong> Tour Checkin</strong> '' với những
                                        bức ảnh tuyệt đep.</span></span></span></p>

                        <p><span style="font-size:16px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span
                                        style="color:#000000;">Với điều kiện đường xá&nbsp;được xây dựng mới
                                        và được mở rộng nên việc&nbsp;đi lại nên <strong>Hà Giang</strong>
                                        hiện nay rất thuận tiện với nhiều hãng </span><a
                                        href="cho-thue-xe-du-lich-ha-giang.html"><span style="color:#000000;"><strong>xe
                                                du lịch Hà
                                                Giang</strong></span></a><span
                                        style="color:#000000;">&nbsp;mới,&nbsp;hiện đại chạy theo nhiều
                                        khung giờ khác nhau. Ngoài ra bạn cũng có thể đăng ký&nbsp;các
                                        chuyến</span><strong><span style="color:#000000;"> </span><a
                                            href="tour-ha-giang.html"><span style="color:#000000;">tour&nbsp;Hà
                                                Giang</span></a></strong><a href="tour-ha-giang-noi-bat.html"><span
                                            style="color:#000000;">&nbsp;</span></a><span style="color:#000000;">cũng
                                        rất dễ dàng.Hãy đến với
                                    </span><strong><a href="index.html"><span style="color:#000000;">Hà
                                                Giang Open Tour</span></a></strong><span style="color:#000000;"> các bạn
                                        sẽ có những trải nghiệm mới theo
                                        phong cách riêng và những trải nghiệm đáng nhớ nhất ,là nhà tiên
                                        phong mở ra những chương trình </span><a href="#"><span
                                            style="color:#000000;">tour du
                                            lịch Hà Giang bằng ô tô</span></a><span style="color:#000000;">
                                        và </span><a href="tour-phuot-xe-may.html"><span style="color:#000000;">tour du
                                            lịch Hà Giang bằng xe
                                            máy</span></a><span style="color:#000000;">.</span></span></span></p>

                        <p>&nbsp;</p>

                    </div>
                    @else
                        <div class="text-justify" id="text-justify-home">
                        <p style="text-align: justify;"><span style="font-size:16px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;"><a href="index.html"><strong>Hà Giang</strong></a> has a global geopark recognized by UNESCO as a world heritage site - <strong>Dong Van Karst Plateau</strong>. This place is famous for its beautiful roads and steep passes, making it an ideal destination for adventurers. These include: <strong>Happiness Road, Mã Pí Lèng Pass, Nho Quế River, Thẩm Mã Slope</strong>...</span></span></span></p>
                        <p style="text-align: justify;"><span style="font-size:16px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;"><strong>Hà Giang</strong> is home to many ethnic groups such as: <strong>Hmong, Lolo, Tay, Dao</strong>... With various customs and traditions, this place has diverse cultural aspects, providing interesting experiences for travelers through car or motorbike tours.</span></span></span></p>
                        <p style="text-align: justify;"><span style="font-size:16px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;"><strong>Hà Giang</strong> is also famous for its <strong>terraced fields</strong> in <strong>Hoàng Su Phì</strong>, with fields of <strong>Buckwheat Flowers, Cherry Blossoms, Plum Blossoms, Mustard Flowers</strong>... These provide perfect spots for "Check-in Tours" with stunning photographs.</span></span></span></p>
                        <p><span style="font-size:16px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#000000;">With newly constructed and expanded roads, traveling to <strong>Hà Giang</strong> is now very convenient with many modern tourist vehicles operating at various times. Additionally, you can easily book <strong>Hà Giang tours</strong>. Come to <strong>Hà Giang Open Tour</strong> for unique experiences and unforgettable memories, as pioneers offering <strong>car tours</strong> and <strong>motorbike tours</strong> in Hà Giang.</span></span></span></p>
                        <p>&nbsp;</p>
                        </div>
                    @endif

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
                                        <span class="font-semi">Mã tour: </span> {{ $tour->tour_code }}
                                    </li>
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> {{ $tour->destination_from }}
                                    </li>
                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> {{ $tour->destination_to }}
                                    </li>
                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> {{ $tour->schedule }}
                                    </li>
                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> {{ $tour->vehicle }}
                                    </li>
                                </ul>
                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">{{ $tour->price }} VND</span>
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

    @if(!empty($postExperiences))
    <section class="kinhnghiemdulich wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="h2-title">@lang('language.experience')</h2>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="img-kn"><a href="{{ route('client.postDetail', ['slug' => $firstPostExperience->slug]) }}"> <img src="{{ asset($firstPostExperience->image_path) }}"
                                alt="{{ $firstPostExperience->title }}"
                                style="max-height: 435px;width: 100%;object-fit: cover"> </a>

                        <div class="clearfix-10"></div>
                        <h3>
                            <a href="{{ route('client.postDetail', ['slug' => $firstPostExperience->slug]) }}">{{ $firstPostExperience->title }}</a>
                        </h3>
                        <div class="margin-bottom-10">{{ Str::limit($firstPostExperience->description, 150, '...') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">
                    @foreach($postExperiences->skip(1)->take(6) as $post)
                    <div class="clearfix margin-bottom-20"><a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}"> <img class="img-p-small"
                                src="{{ asset($post->image_path) }}" alt="{{ $post->title }}">
                        </a>
                        <div style="overflow: hidden">
                            <h4 class="f16 font-semi"><a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            </h4>
                            <div class="font-desc">
                                <p>{{ Str::limit($post->description, 150, '...') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-right"><a class="bt-view" href="/">@lang('language.watchAll')<i
                                class="fa fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    @endif
</main>

@endsection
