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
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="item-taisaochon">
                        <div class="img"><img src="https://hagiangopentour.com/upload/images/logo/langnghe.png"
                                alt="LẮNG NGHE">
                        </div>
                        @if(isset($configLabels['du-lich']))
                        <div class="info">
                            <h3>{{ $configLabels['du-lich'] }}</h3>
                            <p>{{ $configValues['du-lich'] }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="item-taisaochon">
                        <div class="img"><img src="https://hagiangopentour.com/upload/images/logo/antam.png"
                                alt="AN TÂM - TIN TƯỞNG">

                        </div>
                        @if(isset($configLabels['tu-thien']))
                        <div class="info">
                            <h3>{{ $configLabels['tu-thien'] }}</h3>
                            <p>{{ $configValues['tu-thien'] }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">

                    <div class="item-taisaochon">

                        <div class="img"><img src="https://hagiangopentour.com/upload/images/logo/trainghiem.png"
                                alt="TRẢI NGHIỆM MỚI LẠ">

                        </div>

                        @if(isset($configLabels['trai-nghiem']))
                        <div class="info">
                            <h3>{{ $configLabels['trai-nghiem'] }}</h3>
                            <p>{{ $configValues['trai-nghiem'] }}</p>
                        </div>
                        @endif

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
                        <h2 class="h2-title">{{ $categoryWithTour->name }}</h2>
                    </div>
                    <div class="product-category-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @foreach($categoryWithTour->children as $cate)
                        <div class="item">
                            <div class="relativeTour">
                                <a href="{{ route('client.contentList', ['slug' => $cate->slug]) }}">
                                    <img src="{{ asset($cate->image_path) }}" alt="{{ $cate->name }}">
                                </a>
                                <div class="absoluteTour">
                                    <a href="{{ route('client.contentList', ['slug' => $cate->slug]) }}">{{ $cate->name
                                        }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-center">
                        <h2 class="h2-title">Chương trình tour nổi bật</h2>
                    </div>

                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @foreach($categoryWithTour->children as $cate)
                        @foreach($cate->tour as $tour)
                        <div class="item">
                            <div class="img">
                                <a href="{{ route('client.contentDetail', ['slug' => $tour->slug]) }}"><img
                                        src="{{ asset($tour->feature_image_path) }}" alt="{{ $tour->name }}"></a>
                                <div class="poAB">-{{ $tour->discount_percent }}%</div>
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
    <section class="product-item bgfff wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="h2-title">{{$categoryWithCar->name}}</h2>
                    </div>
                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        @if ($categoryWithCar->car)
                        @foreach ($categoryWithCar->car as $car)
                        <div class="item">
                            <div class="img">
                                <a href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}"><img
                                        src="{{ asset($car->feature_image_path) }}" alt="{{ $car->name }}"></a>
                                <div class="poAB">-{{ $car->discount_percent }}%</div>
                            </div>
                            <div class="info">
                                <h3 class="h3-name"><a
                                        href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}">{{ $car->name
                                        }}</a></h3>
                                <ul class="ulproduct">
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>{{ $car->destination_from }}
                                    </li>
                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> {{ $car->destination_to }}
                                    </li>
                                </ul>
                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">{{ $car->price }}
                                        VND</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @if ($categoryWithCar->children)
                        @foreach ($categoryWithCar->children as $children)
                        @foreach ($children->car as $car)
                        <div class="item">
                            <div class="img">
                                <a href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}"><img
                                        src="{{ asset($car->feature_image_path) }}" alt="{{ $car->name }}"></a>
                                <div class="poAB">-{{ $car->discount_percent }}%</div>
                            </div>
                            <div class="info">
                                <h3 class="h3-name"><a
                                        href="{{ route('client.contentDetail', ['slug' => $car->slug]) }}">{{ $car->name
                                        }}</a></h3>
                                <ul class="ulproduct">
                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>{{ $car->destination_from }}
                                    </li>
                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> {{ $car->destination_to }}
                                    </li>
                                </ul>
                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">{{ $car->price }}
                                        VND</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                        @endif
                    </div>

                </div>

            </div>

        </div>

    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css')}}">

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js')}}"></script>







    <section class="section wow fadeInUp" style="background: #00933d;color:#ffffff" id="box-whyus">

        <div class="container">

            <div class="row text-center text-300">


                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">{{ $configValues['nam-kinh-nghiem-to-chuc-tour']
                            }}</span></h5>
                    {{ $configLabels['nam-kinh-nghiem-to-chuc-tour'] }}
                </div>


                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">{{ $configValues['top-20-doanh-nghiep-du-lich']
                            }}</span>

                    </h5>{{ $configLabels['top-20-doanh-nghiep-du-lich'] }}

                </div>


                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">{{ $configValues['top-tour-ha-giang'] }}</span>

                    </h5> {{ $configLabels['top-tour-ha-giang'] }}

                </div>

                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">{{ $configValues['khach-hang-hai-long'] }}</span>

                    </h5> {{ $configLabels['khach-hang-hai-long'] }}

                </div>

            </div>

        </div>

    </section>











    <section class="ykienkhachhang wow fadeInUp">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">
                        <h2 class="h2-title">@lang('language.customerReview')</h2>

                        <i><a style="color: red" href="/" target="_blank">@lang('language.watchMore')</a> </i>


                    </div>



                    <div id="slider-ykien" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">


                        <div class="item">

                            <div class="avatar "><img
                                    src="https://hagiangopentour.com/upload/images/anh-y-kien/y-kien-khach-hang-4.jpg"
                                    alt="Trải nghiệm tour xe máy 3Đ2N">

                                <div>

                                    <div class="name-test color-orange font-weight-bold f18">Trải nghiệm
                                        tour xe máy 3Đ2N
                                    </div>

                                    <div class="tour-test color-orange f14">Mình vừa trải nghiệm tour xe máy
                                        cùng Hà Giang Open Tour, an toàn, xe máy đi rất thích&nbsp;và thú vị
                                        cùng bạn HDV nhiệt tình, vui tính,&nbsp;Team phục vụ rất chuyên
                                        nghiệp và nhiệt tình.
                                    </div>

                                </div>


                            </div>



                            <div class="margin-bottom-10" style="font-size: 16px">



                            </div>

                        </div>


                        <div class="item">

                            <div class="avatar "><img
                                    src="https://hagiangopentour.com/upload/images/anh-y-kien/y-kien-khach-hang-2.jpg"
                                    alt="Trải nghiệm Hà Giang 3N2D">

                                <div>

                                    <div class="name-test color-orange font-weight-bold f18">Trải nghiệm Hà
                                        Giang 3N2D
                                    </div>

                                    <div class="tour-test color-orange f14">I just had a wonderful
                                        experience with Ha Giang Open Tour in Ha Giang 3N2D trip ... under
                                        the witty, graceful, thoughtful direction of Tuan; The absolute
                                        safety of Loc driving and his enthusiasm Tuan helps me and the team
                                        have beautiful photos ...
                                    </div>

                                </div>


                            </div>



                            <div class="margin-bottom-10" style="font-size: 16px">



                            </div>

                        </div>


                        <div class="item">

                            <div class="avatar "><img
                                    src="https://hagiangopentour.com/upload/images/anh-y-kien/y-kien-khach-hang-1.jpg"
                                    alt="Trải nghiệm chuyến đi Hà Giang, đúng thật vui hết cỡ!">

                                <div>

                                    <div class="name-test color-orange font-weight-bold f18">Trải nghiệm
                                        chuyến đi Hà Giang, đúng thật vui hết cỡ!
                                    </div>

                                    <div class="tour-test color-orange f14">Chị rất ấn tượng về bạn
                                        Hùng&nbsp;- HDV tour chị đi với những chia sẻ là :"Dù biết đấy là
                                        đặc thù công việc, nhưng với giọng nói hay, dí dỏm, nhiệt tình với
                                        tất cả các thành viên của đoàn đã đem lại hứng thú cho mình.
                                    </div>

                                </div>


                            </div>



                            <div class="margin-bottom-10" style="font-size: 16px">



                            </div>

                        </div>


                        <div class="item">

                            <div class="avatar "><img
                                    src="https://hagiangopentour.com/upload/images/anh-y-kien/y-kien-khach-hang-3.jpg"
                                    alt="Hà Giang những chuyến đi trải nghiệm thú vị">

                                <div>

                                    <div class="name-test color-orange font-weight-bold f18">Hà Giang những
                                        chuyến đi trải nghiệm thú vị
                                    </div>

                                    <div class="tour-test color-orange f14">Nhóm chúng mình đã đồng hành
                                        trên mọi nẻo đường cùng Hà Giang Open Tour liên tục trong 2 năm liền
                                        và gần đây nhất là chuyến đi Hoàng Su Phì....
                                    </div>

                                </div>


                            </div>



                            <div class="margin-bottom-10" style="font-size: 16px">



                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>




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
                    <div class="img-kn"><a href="index.html"> <img src="{{ asset($firstPostExperience->image_path) }}"
                                alt="{{ $firstPostExperience->title }}"
                                style="max-height: 435px;width: 100%;object-fit: cover"> </a>

                        <div class="clearfix-10"></div>
                        <h3>
                            <a href="index.html">{{ $firstPostExperience->title }}</a>
                        </h3>
                        <div class="margin-bottom-10">{{ Str::limit($firstPostExperience->description, 150, '...') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">
                    @foreach($postExperiences->skip(1)->take(6) as $post)
                    <div class="clearfix margin-bottom-20"><a href="index.html"> <img class="img-p-small"
                                src="{{ asset($post->image_path) }}" alt="{{ $post->title }}">
                        </a>
                        <div style="overflow: hidden">
                            <h4 class="f16 font-semi"><a href="index.html">{{ $post->title }}</a>
                            </h4>
                            <div class="font-desc">
                                <p>{{ Str::limit($post->description, 150, '...') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-right"><a class="bt-view" href="index.html">@lang('language.watchMore')<i
                                class="fa fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    @endif
</main>

@endsection
