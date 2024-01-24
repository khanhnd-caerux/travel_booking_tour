@extends('Core::layouts.frontend.app')
@section('content')



<h1 class="hidden"> DU LỊCH HÀ GIANG - TOUR HÀ GIANG - TOUR DU LỊCH HÀ GIANG</h1>

<main>
    @if($sliders)
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
                        <div class="info">
                            <h3>LẮNG NGHE</h3>
                            <p>Chúng tôi luôn lắng nghe những phản hồi, góp ý của khách hàng để phục vụ tốt
                                hơn</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="item-taisaochon">
                        <div class="img"><img src="https://hagiangopentour.com/upload/images/logo/antam.png"
                                alt="AN TÂM - TIN TƯỞNG">

                        </div>
                        <div class="info">
                            <h3>AN TÂM - TIN TƯỞNG</h3>
                            <p>Hơn 7 năm kinh nghiệm và đồng hành cùng 100.000+ khách hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">

                    <div class="item-taisaochon">

                        <div class="img"><img src="https://hagiangopentour.com/upload/images/logo/trainghiem.png"
                                alt="TRẢI NGHIỆM MỚI LẠ">

                        </div>

                        <div class="info">
                            <h3>TRẢI NGHIỆM MỚI LẠ</h3>

                            <p>Đến với Hà Giang Open Tour khách hàng được trải nghiệm tour Hà Giang chất
                                100%</p>
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



    <section class="product-item wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="h2-title">TOUR HÀ GIANG</h2>
                    </div>
                    <div class="product-category-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-o-to-ha-giang.html">
                                    <img src="https://hagiangopentour.com/upload/images/1.jpg" alt="Tour ô tô Hà Giang">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-o-to-ha-giang.html">Tour ô tô Hà Giang</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-phuot-xe-may.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour-6/z2197647055793-d1b9ddd53a914eebe866f7be9ae8e040.jpg"
                                        alt="Tour phượt xe máy">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-phuot-xe-may.html">Tour phượt xe máy</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-xe-jeep-ha-giang.html">
                                    <img src="https://hagiangopentour.com/upload/images/caravan-hg/tour-xe-jeep.jpg"
                                        alt="Tour xe Jeep Hà Giang">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-xe-jeep-ha-giang.html">Tour xe Jeep Hà Giang</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="trai-nghiem-ngu-homestay.html">
                                    <img src="https://hagiangopentour.com/upload/images/ta-van-village.jpg"
                                        alt="Tour trải nghiệm ngủ Homestay">
                                </a>
                                <div class="absoluteTour">
                                    <a href="trai-nghiem-ngu-homestay.html">Tour trải nghiệm ngủ
                                        Homestay</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-ha-giang-hoang-su-phi.html">
                                    <img src="https://hagiangopentour.com/upload/images/du-lich-hoang-su-phi-2.jpg"
                                        alt="Tour Hà Giang - Hoàng Su Phì">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-ha-giang-hoang-su-phi.html">Tour Hà Giang - Hoàng Su
                                        Phì</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-ha-giang-cao-bang-ban-gioc-ba-be.html">
                                    <img src="https://hagiangopentour.com/upload/images/121.jpg"
                                        alt="Tour Hà Giang - Cao Bằng - Bản Giốc - Ba Bể">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-ha-giang-cao-bang-ban-gioc-ba-be.html">Tour Hà Giang - Cao
                                        Bằng - Bản Giốc - Ba Bể</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-ha-giang-sapa.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour/sapa-fansipan-ha-giang-open-tour.jpg"
                                        alt="Tour Hà Giang - Sapa">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-ha-giang-sapa.html">Tour Hà Giang - Sapa</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-ha-giang-ha-long.html">
                                    <img src="https://hagiangopentour.com/upload/images/du-lich-ha-long-2.jpg"
                                        alt="Tour Hà Giang - Hạ Long">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-ha-giang-ha-long.html">Tour Hà Giang - Hạ Long</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-ha-giang-ninh-binh.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour/chua-bai-dinh-ninh-binh.png')}}"
                                        alt="Tour Hà Giang - Ninh Bình">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-ha-giang-ninh-binh.html">Tour Hà Giang - Ninh Bình</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h2 class="h2-title">Chương trình tour nổi bật</h2>
                    </div>

                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">

                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/tour-1/z2197647553360-f2020210de0c87877a3db189570381aa.jpg"
                                        alt="Tour Hà Giang 3 Ngày 2 Đêm"></a>


                                <div class="poAB">-8%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang 3 Ngày 2 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 01
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội - Nội Bài
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Lũng Cú - Đồng Văn - Mã Pí Lèng - Sông
                                        Nho Quế
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Limousine + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">3,650,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/tour-ha-giang-4-ngay-3-dem.jpg"
                                        alt="Tour Hà Giang 4 Ngày 3 Đêm"></a>


                                <div class="poAB">-6%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang 4 Ngày 3 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 11
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội Hoặc Sài Gòn
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Lũng Cú - Đồng Văn - Sông Nho
                                        Quế - Mèo Vạc - Hà Nội
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Limousine + Xe ô tô du lịch
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">4,950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/thac-du-da.jpg"
                                        alt="Tour Hà Nội - Hà Giang 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-5%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Nội - Hà Giang 5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 16
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội – Hà Giang – Lũng Cú – Đồng Văn – Mèo Vạc
                                        –  Du Già
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Limousine + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">5,650,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour-2/z2197647457399-e7cd8982dd6a0b8b30c06c2a9b63f27a.jpg"
                                        alt="DU LỊCH HÀ GIANG 2 NGÀY 3 ĐÊM"></a>


                                <div class="poAB">-6%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        DU LỊCH HÀ GIANG 2 NGÀY 3 ĐÊM
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG-02
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội - Nội Bài
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Lũng Cú - Đồng Văn - Mã Pí Lèng - Sông
                                        Nho Quế
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Cabin Cung Điện + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">3,150,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/a115.png')}}"
                                        alt="TOUR HÀ GIANG 3 NGÀY 4 ĐÊM - BẰNG Ô TÔ"></a>


                                <div class="poAB">-4%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        TOUR HÀ GIANG 3 NGÀY 4 ĐÊM - BẰNG Ô TÔ
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG-03
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội - Nội Bài
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Lũng Cú - Đồng Văn - Mã Pí Lèng - Sông
                                        Nho Quế - Pả Vi - Mèo Vạc.
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Cabin Cung Điện + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">4,350,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/5(1).jpg"
                                        alt="TOUR PHƯỢT XE MÁY HÀ GIANG 2 NGÀY 3 ĐÊM"></a>


                                <div class="poAB">-21%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        TOUR PHƯỢT XE MÁY HÀ GIANG 2 NGÀY 3 ĐÊM
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> XHG - 04
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Giang - Lũng Cú - Đồng Văn - Sông Nho Quế
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Cabin Cung Điện + Xe Máy
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">2,950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/doc-chu-m-ha-giang-open-tour.jpg"
                                        alt="TOUR XE MÁY HÀ GIANG - PẢ VI 3 NGÀY 4 ĐÊM"></a>


                                <div class="poAB">-24%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        TOUR XE MÁY HÀ GIANG - PẢ VI 3 NGÀY 4 ĐÊM
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> XHG - 05
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Giang - Lũng Cú - Đồng Văn - Mã Pí Lèng - Pả
                                        Vi - Mèo Vạc - Dốc Chữ M
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Cabin Cung Điện + Xe Máy
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">3,850,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/dan-toc-lo-lo-ha-giang-open-tour.jpg"
                                        alt="TOUR XE MÁY HÀ GIANG - DU GIÀ 3 NGÀY 4 ĐÊM"></a>


                                <div class="poAB">-23%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        TOUR XE MÁY HÀ GIANG - DU GIÀ 3 NGÀY 4 ĐÊM
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> XHG - 06
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Giang - Lũng Cú - Đồng Văn - Mã Pí Lèng - Du
                                        Già
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Cabin Cung Điện + Xe Máy
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">3,950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/toan-canh-khu-nghi-duong-h-mong-village-min.jpg"
                                        alt="Tour Hà Giang 4 Ngày 3 Đêm - Hmong Village"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang 4 Ngày 3 Đêm - Hmong Village
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 11.2 Plus
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - H’Mong Village - Lũng Cú -
                                        Đồng Văn - Sông Nho Quế - Hà Nội
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô du lịch
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">5,000,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/qunag-ba.jpg"
                                        alt="Tour Du Lịch Hà Giang - H’Mong Village 3 ngày 2 đêm"></a>


                                <div class="poAB">-17%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Du Lịch Hà Giang - H’Mong Village 3 ngày 2 đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 01.Plus
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - H’Mong Village - Lũng Cú -
                                        Đồng Văn - Sông Nho Quế - Hà Nội
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô du lịch
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">4,950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="du-lich-ha-giang-3-ngay-4-dem-trai-nghiem-ngu-homestay.html"><img
                                        src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/8.jpg"
                                        alt="DU LỊCH HÀ GIANG 3 NGÀY 4 ĐÊM - TRẢI NGHIỆM NGỦ HOMESTAY"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="du-lich-ha-giang-3-ngay-4-dem-trai-nghiem-ngu-homestay.html">

                                        DU LỊCH HÀ GIANG 3 NGÀY 4 ĐÊM - TRẢI NGHIỆM NGỦ HOMESTAY
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 07
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội, Nội Bài
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Giang - Lũng Cú - Đồng Văn - Mã Pí Lèng - Pả
                                        Vi - Mèo Vạc.
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Cabin Cung Điện + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">4,150,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/4.1.jpg"
                                        alt="TOUR HOÀNG SU PHÌ - HÀ GIANG - QUẢN BẠ - ĐỒNG VĂN 5 NGÀY 4 ĐÊM"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        TOUR HOÀNG SU PHÌ - HÀ GIANG - QUẢN BẠ - ĐỒNG VĂN 5 NGÀY 4 ĐÊM
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 08
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hoàng Su Phì - Hà Giang - Quản Bạ - Đồng Văn
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Limousine + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,900,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/bac-sum-ha-giang-open-tour.jpg"
                                        alt="Tour du lịch TP. Hồ Chí Minh - Hà Nội City - Hà Giang Hmong Village 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-13%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour du lịch TP. Hồ Chí Minh - Hà Nội City - Hà Giang Hmong Village
                                        5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 11.3 Plus
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hồ Chí Minh
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> TP Hồ Chí Minh - TP Hà Nội - Hà Giang
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,500,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/ha-giang-mua-hoa-tam-giac-mach.jpg"
                                        alt="Tour Hà Giang - Ninh Bình (Bái Đính - Tràng An) - Hà Nội 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang - Ninh Bình (Bái Đính - Tràng An) - Hà Nội 5 Ngày 4
                                        Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG -68
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội Hoặc Sài Gòn
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Đồng Văn - Ninh Bình
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">5,990,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="tour-o-to-tu-lai-caravan-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/caravan-hg/f4f5fcfdc1200b7e52318.jpg"
                                        alt="Tour Ô Tô Tự Lái Caravan Hà Giang"></a>


                                <div class="poAB">-29%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="tour-o-to-tu-lai-caravan-ha-giang.html">

                                        Tour Ô Tô Tự Lái Caravan Hà Giang
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> CHG - 15
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Quản Bạ - Yên Minh –  Mã Pí Lèng - Sông
                                        Nho Quế - Đồng Văn - Lũng Cú
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô tự lái
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">1,950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/dinh-fansipang.jpg"
                                        alt="Tour Hà Giang - Đồng Văn - Sapa - Fansipan 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-13%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang - Đồng Văn - Sapa - Fansipan 5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 10
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội – Quản Bạ - Yên Minh – Đồng Văn – Mèo Vạc
                                        – Lũng Cú - TP. Hà Giang – Sa Pa – Hà Nội
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,900,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/1222.jpg"
                                        alt="Tour Hà Giang - Đồng Văn - Sapa - Fansipan - Ô Quy Hồ - 6 Ngày 5 Đêm"></a>


                                <div class="poAB">-39%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang - Đồng Văn - Sapa - Fansipan - Ô Quy Hồ - 6 Ngày 5 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 35
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Đồng Văn - Sapa Fansipan - Ô
                                        Quy Hồ
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">8,900,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/sapa-fansipan-ha-giang-open-tour.jpg"
                                        alt="Tour Hà Giang - Đồng Văn - Sapa - Fansipan - 4Đêm 4 Ngày"></a>


                                <div class="poAB">--16.9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang - Đồng Văn - Sapa - Fansipan - 4Đêm 4 Ngày
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 15
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Đồng Văn - Sapa - Fansipan -
                                        Hà Nội
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Ghép đoàn hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,900,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/hg.jpg"
                                        alt="Tour Du Lịch Hà Nội City - Hà Giang - Sapa 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Du Lịch Hà Nội City - Hà Giang - Sapa 5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 14
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Đồng Văn - Mã Pí Lèng - Sapa
                                        - Fansipan
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Giường Nằm + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,900,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/du-lich-hoang-su-phi-2.jpg"
                                        alt="Tour Hà Giang - Hoàng Su Phì 3 Ngày 2 Đêm"></a>


                                <div class="poAB">-19%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang - Hoàng Su Phì 3 Ngày 2 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 96
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Hoàng Su Phì - Hà Nội
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">3,500,000 VND</span>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>





    <section class="product-item wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="h2-title">Tour Du Lịch Miền Bắc</h2>
                    </div>
                    <div class="product-category-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">
                        <div class="item">
                            <div class="relativeTour">
                                <a href="index.html">
                                    <img src="https://hagiangopentour.com/upload/images/trai-nghiem-khong-dien-khong-4g-di-duoi-lon-bat-ga-o-lang-nguyen-thuy-moc-chau.jpg"
                                        alt="Tour Mộc Châu">
                                </a>
                                <div class="absoluteTour">
                                    <a href="index.html">Tour Mộc Châu</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="index.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour-2/tour-sapa-fansipan-3-ngay-2-dem.jpg"
                                        alt="Tour Sapa">
                                </a>
                                <div class="absoluteTour">
                                    <a href="index.html">Tour Sapa</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="index.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour/chua-bai-dinh-ninh-binh.png')}}"
                                        alt="Tour Ninh Bình">
                                </a>
                                <div class="absoluteTour">
                                    <a href="index.html">Tour Ninh Bình</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="index.html">
                                    <img src="https://hagiangopentour.com/upload/images/du-lich-ha-long-2.jpg"
                                        alt="Tour Hạ Long">
                                </a>
                                <div class="absoluteTour">
                                    <a href="index.html">Tour Hạ Long</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-mien-bac-1-ngay.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour/chua-bai-dinh-ninh-binh.jpg"
                                        alt="Tour Miền Bắc 1 Ngày">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-mien-bac-1-ngay.html">Tour Miền Bắc 1 Ngày</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-mien-bac-2-ngay.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour/tour-du-lich-mai-chau.jpg"
                                        alt="Tour Miền Bắc 2 Ngày">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-mien-bac-2-ngay.html">Tour Miền Bắc 2 Ngày</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-mien-bac-3-ngay.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour-6/ma-pi-leng-ha-giang.jpg"
                                        alt="Tour Miền Bắc 3 Ngày">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-mien-bac-3-ngay.html">Tour Miền Bắc 3 Ngày</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-mien-bac-4-ngay.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour-6/cot-co-lung-cu.jpg"
                                        alt="Tour Miền Bắc 4 Ngày">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-mien-bac-4-ngay.html">Tour Miền Bắc 4 Ngày</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-mien-bac-5-ngay.html">
                                    <img src="https://hagiangopentour.com/upload/images/anh-tour-6/ruong-bac-thang-hoang-su-phi.jpg"
                                        alt="Tour Miền Bắc 5 Ngày">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-mien-bac-5-ngay.html">Tour Miền Bắc 5 Ngày</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="relativeTour">
                                <a href="tour-mien-bac-6-ngay.html">
                                    <img src="https://hagiangopentour.com/upload/images/doc-chu-m-ha-giang-open-tour.jpg"
                                        alt="Tour Miền Bắc 6 Ngày">
                                </a>
                                <div class="absoluteTour">
                                    <a href="tour-mien-bac-6-ngay.html">Tour Miền Bắc 6 Ngày</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h2 class="h2-title">Chương trình tour nổi bật</h2>
                    </div>

                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">

                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/cuc-phuong-national-park-3.jpg"
                                        alt="Tour du ngoạn Ninh Bình 2 ngày 1 đêm"></a>


                                <div class="poAB">-17%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour du ngoạn Ninh Bình 2 ngày 1 đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 97
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Ninh Bình
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">2,450,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/ha-long-bay/cd43595e448d84d3dd9c21.jpg"
                                        alt="Tour Du Lịch Hạ Long 2 Ngày 1 Đêm Ngủ Tàu"></a>


                                <div class="poAB">-24%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Du Lịch Hạ Long 2 Ngày 1 Đêm Ngủ Tàu
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 82
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hạ Long - Động Sửng Sốt - Hòn Gà Trọi
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">2,950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/nha-tho-lon.jpg"
                                        alt="Hà Nội City Full Day"></a>


                                <div class="poAB">-17%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Hà Nội City Full Day
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG -
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội City
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">960,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/1-min-6.jpg"
                                        alt="Tour Hoa Lư - Tam Cốc 01 ngày"></a>


                                <div class="poAB">-26%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hoa Lư - Tam Cốc 01 ngày
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG -
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hoa Lư - Tam Cốc
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">850,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/luxury-hoa-lu-mua-cave-tam-coc-1-day-tour-201711151741271.jpeg"
                                        alt="Tour Hà Nội - Hoa Lư - Tràng An - Hang Múa 01 ngày"></a>


                                <div class="poAB">-18%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Nội - Hoa Lư - Tràng An - Hang Múa 01 ngày
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG -
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hoa Lư - Tràng An - Hang Múa
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">1,190,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/image(17).png')}}"
                                        alt="Tour Hà Nội - Bái Đính - Tràng An - Hang Múa 01 ngày"></a>


                                <div class="poAB">-22%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Nội - Bái Đính - Tràng An - Hang Múa 01 ngày
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG -
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Bái Đính - Tràng An - Hang Múa
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">1,050,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/image-20220715115058-1.jpeg"
                                        alt="Hà Nội - Sapa - Hạ Long - Ninh Binh 5 ngày 5 đêm"></a>


                                <div class="poAB">-14%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Hà Nội - Sapa - Hạ Long - Ninh Binh 5 ngày 5 đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 32.1 Plus
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Sapa - Hạ Long - Ninh Binh
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">12,500,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/du-lich-trang-an-ninh-binh.jpg"
                                        alt="Tour Hà Nội - Hoa Lư - Tam Cốc - Hang Múa 01 Ngày"></a>


                                <div class="poAB">-17%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Nội - Hoa Lư - Tam Cốc - Hang Múa 01 Ngày
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 61
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hoa Lư - Tam Cốc - Hang Múa
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/cap-treo-nu-hoang-ha-long.jpg"
                                        alt="TOUR HẠ LONG 2 NGÀY 1 ĐÊM"></a>


                                <div class="poAB">-14%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        TOUR HẠ LONG 2 NGÀY 1 ĐÊM
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 84
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hạ Long - Động Sửng Sốt - Hòn Gà Trọi
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">2,550,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/tham-quan-dao-ti-top.jpg"
                                        alt="DU LỊCH HẠ LONG 1 NGÀY"></a>


                                <div class="poAB">-26%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        DU LỊCH HẠ LONG 1 NGÀY
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 81
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hạ Long - Động Sửng Sốt - Hòn Gà Trọi
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">1,150,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour-2/tour-sapa-fansipan-3-ngay-2-dem.jpg"
                                        alt="Tour Sapa Fansipan 3 Ngày 2 Đêm"></a>


                                <div class="poAB">-14%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Sapa Fansipan 3 Ngày 2 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 33
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Sapa Fansipan- Cát Cát - Núi Hàm Rồng
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">2,550,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour-2/du-lich-sapa-fansipan-2-ngay-3dem.jpg"
                                        alt="Du Lịch Sapa Fansipan 2 Ngày 3 Đêm"></a>


                                <div class="poAB">-19%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Du Lịch Sapa Fansipan 2 Ngày 3 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 32
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Lào Cai - Sapa Fansipan - Bản Cát Cát
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">2,150,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour-2/tour-sapa-fansipan.jpg"
                                        alt="Tour Sapa Fansipan 2 ngày 1 đêm"></a>


                                <div class="poAB">-20%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Sapa Fansipan 2 ngày 1 đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 31
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Lào Cai - Sapa Fansipan - Bản Cát Cát
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">1,950,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/bac-sum-ha-giang-open-tour.jpg"
                                        alt="Tour du lịch TP. Hồ Chí Minh - Hà Nội City - Hà Giang Hmong Village 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-13%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour du lịch TP. Hồ Chí Minh - Hà Nội City - Hà Giang Hmong Village
                                        5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 11.3 Plus
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hồ Chí Minh
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> TP Hồ Chí Minh - TP Hà Nội - Hà Giang
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,500,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/tour-du-lich-moc-chau-2-ngay-1-dem.jpg"
                                        alt="TOUR DU LỊCH MỘC CHÂU 2 NGÀY 1 ĐÊM"></a>


                                <div class="poAB">-34%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        TOUR DU LỊCH MỘC CHÂU 2 NGÀY 1 ĐÊM
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 41
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Đồi Chè Trái Tim - Thác Dải Yếm
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">1,220,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-tour/ha-giang-mua-hoa-tam-giac-mach.jpg"
                                        alt="Tour Hà Giang - Ninh Bình (Bái Đính - Tràng An) - Hà Nội 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang - Ninh Bình (Bái Đính - Tràng An) - Hà Nội 5 Ngày 4
                                        Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG -68
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội Hoặc Sài Gòn
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Đồng Văn - Ninh Bình
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">5,990,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/cot-co-lung-cu-du-lich-ha-giang-open-tour.jpg"
                                        alt="Tour Miền Bắc - Hà Nội - Hà Giang - Hạ Long - Ninh Bình 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-13%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Miền Bắc - Hà Nội - Hà Giang - Hạ Long - Ninh Bình 5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 13
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội Hoặc Sài Gòn
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Tp.Hồ Chí Minh - Hà Nội - Hà Giang - Hạ Long -
                                        Ninh Bình - TP.Hồ Chí Minh
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô + Ghép đoàn
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,900,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img
                                        src="https://hagiangopentour.com/upload/images/sapa-fansipan-ha-giang-open-tour.jpg"
                                        alt="Tour Hà Giang - Đồng Văn - Sapa - Fansipan - 4Đêm 4 Ngày"></a>


                                <div class="poAB">--16.9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Hà Giang - Đồng Văn - Sapa - Fansipan - 4Đêm 4 Ngày
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 15
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Đồng Văn - Sapa - Fansipan -
                                        Hà Nội
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Ghép đoàn hàng ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,900,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/mocchau.jpg"
                                        alt="Tour Nội Bài - Hà Nội - Hà Giang - Mộc Châu 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-13%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Nội Bài - Hà Nội - Hà Giang - Mộc Châu 5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 27
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hầ Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Nội Bài - Hà Nội - Hà Giang - Mộc Châu
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe ô tô
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,500,000 VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="index.html"><img src="https://hagiangopentour.com/upload/images/hg.jpg"
                                        alt="Tour Du Lịch Hà Nội City - Hà Giang - Sapa 5 Ngày 4 Đêm"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name">

                                    <a href="index.html">

                                        Tour Du Lịch Hà Nội City - Hà Giang - Sapa 5 Ngày 4 Đêm
                                    </a>

                                </h3>



                                <ul class="ulproduct">

                                    <li>

                                        <i class="fa fa-barcode  text-pri" aria-hidden="true"></i>

                                        <span class="font-semi">Mã tour: </span> OHG - 14
                                    </li>

                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi hành
                                            từ: </span> Hà Nội
                                    </li>

                                    <li><i class="fa fa-clock-o text-pri"></i><span class="font-semi">Lịch
                                            trình: </span> Hà Nội - Hà Giang - Đồng Văn - Mã Pí Lèng - Sapa
                                        - Fansipan
                                    </li>

                                    <li><i class="fa fa-calendar text-pri"></i><span class="font-semi">Khởi
                                            hành: </span> Hàng Ngày - Tour Nhóm Nhỏ
                                    </li>

                                    <li><i class="fa fa-car text-pri"></i><span class="font-semi">Phương
                                            tiện: </span> Xe Giường Nằm + Ô Tô DL
                                    </li>

                                </ul>



                                <div class="priceproduct"> Giá chỉ từ:
                                    <span class="price mr-2">6,900,000 VND</span>

                                </div>

                            </div>

                        </div>


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
                        <h2 class="h2-title">CHO THUÊ XE DU LỊCH HÀ GIANG</h2>
                    </div>

                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-jeep-tour-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/video/jeeeeppppppppppp.jfif"
                                        alt="Cho thuê xe JEEP Tour Hà Giang"></a>


                                <div class="poAB">-22%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-jeep-tour-ha-giang.html">Cho thuê
                                        xe JEEP Tour Hà Giang</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Từ Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">7,000,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-may-tai-ha-giang-gia-re.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/4.jpg"
                                        alt="Cho thuê xe máy  - Tại Hà Giang Giá rẻ"></a>


                                <div class="poAB">-28%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-may-tai-ha-giang-gia-re.html">Cho
                                        thuê xe máy - Tại Hà Giang Giá rẻ</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Từ Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">180,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-may-cao-cao-tai-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/tour-1/xe-may.png')}}"
                                        alt="Cho Thuê Xe Máy Cào Cào  Tại Hà Giang"></a>


                                <div class="poAB">-23%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-may-cao-cao-tai-ha-giang.html">Cho
                                        Thuê Xe Máy Cào Cào Tại Hà Giang</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Từ Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">500,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-o-to-4-cho-du-lich-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/4-cho.jpg"
                                        alt="Cho thuê xe ô tô 4 Chỗ Du Lịch Hà Giang"></a>


                                <div class="poAB">-18%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-o-to-4-cho-du-lich-ha-giang.html">Cho thuê xe ô
                                        tô
                                        4 Chỗ Du Lịch Hà Giang</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>từ Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> tại khách sạn TP Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">3,250,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-o-to-7-cho-du-lich-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/7-cho.jpg"
                                        alt="Cho Thuê Xe ô tô 7 Chỗ Du Lịch Hà Giang"></a>


                                <div class="poAB">-13%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-o-to-7-cho-du-lich-ha-giang.html">Cho Thuê Xe ô
                                        tô
                                        7 Chỗ Du Lịch Hà Giang</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>từ Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> tại khách sạn TP Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">3,900,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-tour-ha-giang-16-cho-2n1d-3n2d.html"><img
                                        src="https://hagiangopentour.com/upload/images/tour-1/xe-16-cho.jpg"
                                        alt="Cho thuê xe Tour Hà Giang 16 chỗ 2N1Đ, 3N2Đ"></a>


                                <div class="poAB">-9%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-tour-ha-giang-16-cho-2n1d-3n2d.html">Cho thuê
                                        xe
                                        Tour Hà Giang 16 chỗ 2N1Đ, 3N2Đ</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>từ Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> tại khách sạn TP Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">5,900,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-tour-ha-giang-29-cho-2n1d-3n2d.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/29.jpg"
                                        alt="Cho thuê xe Tour Hà Giang 29 chỗ 2N1Đ, 3N2Đ"></a>


                                <div class="poAB">-11%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-tour-ha-giang-29-cho-2n1d-3n2d.html">Cho thuê
                                        xe
                                        Tour Hà Giang 29 chỗ 2N1Đ, 3N2Đ</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>từ Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> tại khách sạn TP Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">7,900,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-limousine-ha-noi-di-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/z2225978720906-c10c36c4baf02b615f52e123d5ff0c62.jpg"
                                        alt="Cho thuê xe Limousine Hà Nội đi Hà Giang"></a>


                                <div class="poAB">-10%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-limousine-ha-noi-di-ha-giang.html">Cho thuê xe
                                        Limousine Hà Nội đi Hà Giang</a></h3>



                                <ul class="ulproduct">



                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí:
                                        </span>Đón trả Phố Cổ, Nội Bài
                                    </li>



                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Hà Nội - TP Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Nội - TP Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">4,500,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="cho-thue-xe-29-45-cho-tu-ha-noi-di-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/29-cho.jpeg"
                                        alt="Cho thuê xe 29, 45 chỗ từ Hà Nội đi Hà Giang"></a>


                                <div class="poAB">-17%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="cho-thue-xe-29-45-cho-tu-ha-noi-di-ha-giang.html">Cho thuê
                                        xe
                                        29, 45 chỗ từ Hà Nội đi Hà Giang</a></h3>



                                <ul class="ulproduct">




                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Hà Nội - TP Hà Giang
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Nội - TP Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">4,900,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>






    <section class="product-item  wow fadeInUp">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">
                        <h2 class="h2-title">VÉ XE BUS HÀ GIANG HÀNG NGÀY</h2>
                    </div>

                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">


                        <div class="item">

                            <div class="img">

                                <a href="xe-limousine-ha-giang-ha-noi.html"><img
                                        src="https://hagiangopentour.com/upload/images/ve-xe-limousine-di-ha-giang.jpg"
                                        alt="XE LIMOUSINE HÀ GIANG - HÀ NỘI"></a>


                                <div class="poAB">-13%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="xe-limousine-ha-giang-ha-noi.html">XE LIMOUSINE
                                        HÀ GIANG - HÀ NỘI</a></h3>



                                <ul class="ulproduct">



                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí:
                                        </span>Đón,Trả, Hà Giang,Tuyên Quang,Nội Bài,Phố Cổ Hà Nội
                                    </li>



                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Hà Giang - Hà Nội
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Tại Khách Sạn
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">350,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="xe-giuong-nam-ha-noi-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/xe-giuong-nam.jpg"
                                        alt="XE GIƯỜNG NẰM HÀ NỘI - HÀ GIANG"></a>


                                <div class="poAB">-0%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="xe-giuong-nam-ha-noi-ha-giang.html">XE GIƯỜNG
                                        NẰM HÀ NỘI - HÀ GIANG</a></h3>



                                <ul class="ulproduct">



                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí:
                                        </span>Đón - trả Phố Cổ, sân bay Nội Bài
                                    </li>



                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Từ Hà Nội
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Nội - Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">300,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="ve-xe-limousine-ha-noi-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/limosin.jpg"
                                        alt="VÉ XE LIMOUSINE - HÀ NỘI - HÀ GIANG"></a>


                                <div class="poAB">-22%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="ve-xe-limousine-ha-noi-ha-giang.html">VÉ XE
                                        LIMOUSINE - HÀ NỘI - HÀ GIANG</a></h3>



                                <ul class="ulproduct">



                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí:
                                        </span>Đón - trả Phố Cổ, sân bay Nội Bài
                                    </li>



                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Từ Hà Nội
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Nội - Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">350,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a href="xe-cung-dien-ha-giang.html"><img
                                        src="https://hagiangopentour.com/upload/images/anh-cho-thue-xe/cung-dien-1.jpg"
                                        alt="XE CUNG ĐIỆN HÀ GIANG"></a>


                                <div class="poAB">-22%</div>


                            </div>



                            <div class="info">
                                <h3 class="h3-name"><a href="xe-cung-dien-ha-giang.html">XE CUNG ĐIỆN HÀ
                                        GIANG</a></h3>



                                <ul class="ulproduct">



                                    <li><i class="fa fa-rss text-pri"></i><span class="font-semi">Miễn phí:
                                        </span>Đón - trả Phố Cổ, sân bay Nội Bài
                                    </li>



                                    <li><i class="fa fa-home text-pri"></i><span class="font-semi">Khởi
                                            hành: </span>Từ Hà Nội
                                    </li>


                                    <li><i class="fa fa-map-marker text-pri"></i><span class="font-semi">Đón
                                            trả: </span> Hà Nội - Hà Giang
                                    </li>

                                </ul>



                                <div class="priceproduct"> Chỉ từ <span class="price mr-2">350,000
                                        VND</span>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>









    <section class="aboutus wow fadeInUp">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-xs-12 col-sm-6">
                    <h2 class="h2-title none">HÀ GIANG ĐIỂM ĐẾN LÝ TƯỞNG</h2>



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
                                        phong mở ra những chương trình </span><a href="tour-o-to-ha-giang.html"><span
                                            style="color:#000000;">tour du
                                            lịch Hà Giang bằng ô tô</span></a><span style="color:#000000;">
                                        và </span><a href="tour-phuot-xe-may.html"><span style="color:#000000;">tour du
                                            lịch Hà Giang bằng xe
                                            máy</span></a><span style="color:#000000;">.</span></span></span></p>

                        <p>&nbsp;</p>

                    </div>

                </div>

                <div class="col-md-6 col-xs-12 col-sm-6">

                    <div id="slider-hagiang" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">




                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/3.1.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/4.1.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/5.1.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/1-1.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/1-2.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/10.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/6.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/7.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/8.jpg" /></a>

                        </div>


                        <div class="item">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/hg-dem-den-ly-tuong/9.jpg" /></a>

                        </div>




                    </div>

                </div>

            </div>

        </div>

    </section>





    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css')}}">

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js')}}"></script>


    <section class="product-item wow fadeInUp">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">
                        <h2 class="h2-title">Video review Hà Giang</h2>
                    </div>

                    <div class="product-item-owl owl-carousel owl-theme owl-flex owl-loaded owl-drag">


                        <div class="item">

                            <div class="img">

                                <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=qZgqbdn1MYM"><img
                                        src="https://hagiangopentour.com/upload/images/video/hq720.jpg"
                                        alt="Let's Go - Ma Pi Leng Pass | Ha Giang Travel Guide"></a>


                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=kXWVDcta6BU"><img
                                        src="https://hagiangopentour.com/upload/images/video/hqdefault.jpg"
                                        alt="HA GIANG - " MASTERPIECE" OF THE NORTHWEST VIETNAM | Ma Pi Lè and Song Nho
                                        Que"></a>


                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=1NtV5KgRo0c"><img
                                        src="https://hagiangopentour.com/upload/images/video/hq720-1-.jpg"
                                        alt="Tìm về Hà Giang: Tuyệt tác thiên nhiên nơi núi rừng Tây Bắc - Đông Bắc"></a>


                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=MwdmFog6fc4"><img
                                        src="https://hagiangopentour.com/upload/images/video/a-video.jpg"
                                        alt="[PHIM TỰ GIỚI THIỆU] AMAZING HÀ GIANG | S35FILM"></a>


                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=wElFDsqrL50"><img
                                        src="https://hagiangopentour.com/upload/images/video/anh-video-2.jpg"
                                        alt="HÀ GIANG ƠI (MV Official) I Quách Beem I Gửi tặng Hà Giang nơi tôi đến và ...yêu"></a>


                            </div>

                        </div>


                        <div class="item">

                            <div class="img">

                                <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=PtqIj-ZqFqI"><img
                                        src="https://hagiangopentour.com/upload/images/video/0-1-.jpg"
                                        alt="Ha Giang Loop in Vietnam"></a>


                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>







    <section class="section wow fadeInUp" style="background: #00933d;color:#ffffff" id="box-whyus">

        <div class="container">

            <div class="row text-center text-300">


                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">10</span>

                    </h5>
                    Năm kinh nghiệm tổ chức&nbsp;Tour


                    &nbsp;

                </div>


                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">20</span>

                    </h5> Top 20 doanh nghiệp&nbsp;du lịch

                </div>


                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">10</span>

                    </h5> Top Tour Hà Giang

                </div>


                <div class="col-md-3 col-count col-6 col-sm-3 col-xs-6">

                    <h5 class="h5-count"><span class="count-element">999</span>

                    </h5> Khách hàng hài lòng

                </div>


            </div>

        </div>

    </section>











    <section class="ykienkhachhang wow fadeInUp">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">
                        <h2 class="h2-title">Ý kiến khách hàng</h2>

                        <i><a style="color: red"
                                href="https://www.google.com/maps/place/Ha+giang+Open+tour/@21.0372799,105.8458299,17.25z/data=!4m7!3m6!1s0x3135ab456e0a23cd:0x98840b4dfd4a308d!8m2!3d21.0369699!4d105.8479462!9m1!1b1?fbclid=IwAR1qcdjfnQmjhxrqaZPShxg-Kv64z1g_JiGVkH8DIjwdkG3dHRyfj3LPgrg"
                                target="_blank">Xem thêm đánh giá trên Google</a> </i>


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





    <section class="kinhnghiemdulich wow fadeInUp">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">
                        <h2 class="h2-title">Kinh nghiệm du lịch</h2>
                    </div>

                </div>


                <div class="col-md-6 col-xs-12 col-sm-6">

                    <div class="img-kn"><a href="index.html"> <img
                                src="https://hagiangopentour.com/upload/images/tin-tuc/pho-co-dong-van.jpg"
                                alt="Du lịch Hà Giang có gì? 30 Địa điểm du lịch Hà Giang nổi tiếng"
                                style="max-height: 435px;width: 100%;object-fit: cover"> </a>

                        <div class="clearfix-10"></div>

                        <h3>

                            <a href="index.html">Du lịch Hà Giang có gì? 30 Địa điểm du lịch Hà Giang nổi
                                tiếng </a>

                        </h3>



                        <div class="margin-bottom-10"> &nbsp;



                            Hà Giang - mảnh đất “Địa đầu Tổ Quốc”, nơi thu hút rất đông các bạn trẻ thích
                            khám phá, yêu xê dịch ghé thăm. Hà Giang đẹp quanh năm nên bạn có thể đến đây
                            vào bất kỳ khoảng thời gian. Không chỉ nổi tiếng với vẻ đẹp hoang sơ, hùng vĩ mà
                            còn có nhiều giá trị truyền thống lâu đời của... </div>

                    </div>

                </div>
                <div class="clearfix-20 visible-xs"></div>

                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="clearfix margin-bottom-20"><a href="index.html"> <img class="img-p-small"
                                src="https://hagiangopentour.com/upload/images/tin-tuc/30276ecc27b292b7709f09f9caf551d4-1-.jpg"
                                alt="Bản đồ du lịch Hà Giang ||| 11 điểm đến du lịch hấp dẫn nhất Hà Giang">
                        </a>

                        <div style="overflow: hidden">
                            <h4 class="f16 font-semi"><a href="index.html">Bản đồ du lịch Hà Giang ||| 11
                                    điểm đến du lịch hấp dẫn nhất Hà Giang </a>

                            </h4>

                            <div class="font-desc">
                                <p>Hà Giang đẹp quanh năm nên bạn có thể đến nơi đây du lịch nghỉ dưỡng,
                                    khám phá bất kỳ mùa nào trong năm. Hà Giang có rất nhiều địa điểm du
                                    lịch hấp...</p>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix margin-bottom-20"><a href="index.html"> <img class="img-p-small"
                                src="https://hagiangopentour.com/upload/images/tin-tuc/du-lich-ha-giang-mua-nao-dep-mua-dong.jpg"
                                alt="Giải đáp câu hỏi du lịch Hà Giang mặc gì đẹp, chất và thu hút?"> </a>

                        <div style="overflow: hidden">
                            <h4 class="f16 font-semi"><a href="index.html">Giải đáp câu hỏi du lịch Hà Giang
                                    mặc gì đẹp, chất và thu hút? </a>

                            </h4>

                            <div class="font-desc">
                                <p>&nbsp;



                                    Hà Giang là điểm đến được nhiều người săn lùng, đặc biệt là giới trẻ.
                                    Nơi đây không chỉ thu hút bởi vẻ đẹp của thiên nhiên&nbsp; mà còn...</p>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix margin-bottom-20"><a href="index.html"> <img class="img-p-small"
                                src="https://hagiangopentour.com/upload/images/tin-tuc/11-du-01-1682577585887.jpg"
                                alt="Bật mí kinh nghiệm du lịch Hà Giang mùa nào đẹp nhất?"> </a>

                        <div style="overflow: hidden">
                            <h4 class="f16 font-semi"><a href="index.html">Bật mí kinh nghiệm du lịch Hà
                                    Giang mùa nào đẹp nhất? </a>

                            </h4>

                            <div class="font-desc">
                                <p>Hà Giang là điểm đến du lịch thăm quan, nghỉ dưỡng được nhiều du khách
                                    trong và ngoài nước yêu thích. Vậy, du lịch Hà Giang mùa nào đẹp nhất?
                                    Cùng “bỏ...</p>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix margin-bottom-20"><a href="index.html"> <img class="img-p-small"
                                src="https://hagiangopentour.com/upload/images/anh-tour-2/kinh-nghiem-du-lich-ha-giang-2-ngay-1-dem.jpg"
                                alt="Kinh Nghiệm Du Lịch Hà Giang 2 Ngày 1 Đêm"> </a>

                        <div style="overflow: hidden">
                            <h4 class="f16 font-semi"><a href="index.html">Kinh Nghiệm Du Lịch Hà Giang 2
                                    Ngày 1 Đêm </a>

                            </h4>

                            <div class="font-desc">
                                <p>Kinh Nghiệm Du Lịch Hà Giang 2 Ngày 1 Đêm - Hà Giang – mảnh đất địa đầu
                                    cực Bắc Tổ quốc với cảnh quan núi rừng hùng vĩ, những cung đường đổ
                                    đèo...</p>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix margin-bottom-20"><a href="index.html"> <img class="img-p-small"
                                src="https://hagiangopentour.com/upload/images/anh-tour/kinh-nghiem-du-lich-ha-giang-2021.jpg"
                                alt="Kinh Nghiệm du lịch Hà Giang 2021"> </a>

                        <div style="overflow: hidden">
                            <h4 class="f16 font-semi"><a href="index.html">Kinh Nghiệm du lịch Hà Giang 2021
                                </a>

                            </h4>

                            <div class="font-desc">
                                <p>Kinh nghiệm du lịch Hà Giang 2021

                                    &nbsp;

                                    Hành trình khám phá du lịch Hà Giang không chỉ đến nơi thiên nhiên hùng
                                    vỹ mà còn là trải nghiệm một vùng đất của...</p>
                            </div>

                        </div>

                    </div>
                    <div class="text-right"><a class="bt-view" href="index.html">Xem tất cả <i
                                class="fa fa-angle-right"></i></a></div>

                </div>

            </div>

        </div>

    </section>









    <section class="kinhnghiemdulich wow fadeInUp">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="text-center">
                        <h2 class="h2-title">Thương hiệu cùng đồng hành</h2>
                    </div>

                </div>




                <div class="col-md-12">

                    <div id="slider-home-partner" class="owl-carousel owl-theme owl-flex owl-loaded owl-drag">


                        <div class="item" style="border: 1px solid #dddddd">

                            <a href="#"><img alt=""
                                    src="https://hagiangopentour.com/upload/images/logo-doi-tac/logo.jpg"
                                    style="height: 100px;object-fit: contain" /></a>

                        </div>


                        <div class="item" style="border: 1px solid #dddddd">

                            <a href="#"><img alt="" src="upload/.thumbs/images/logo-doi-tac/lolo.png')}}"
                                    style="height: 100px;object-fit: contain" /></a>

                        </div>


                        <div class="item" style="border: 1px solid #dddddd">

                            <a href="#"><img alt="" src="upload/.thumbs/images/logo-doi-tac/log-doi-tac-cheers.jpg"
                                    style="height: 100px;object-fit: contain" /></a>

                        </div>


                        <div class="item" style="border: 1px solid #dddddd">

                            <a href="www.hagiangepictour.com/vn.html"><img alt=""
                                    src="upload/.thumbs/images/logo-doi-tac/log-doi-tac-epic.jpg"
                                    style="height: 100px;object-fit: contain" /></a>

                        </div>


                        <div class="item" style="border: 1px solid #dddddd">

                            <a href="http://mayflowerhotelhanoi.com/"><img alt=""
                                    src="upload/.thumbs/images/logo-doi-tac/log-doi-tac-may.jpg"
                                    style="height: 100px;object-fit: contain" /></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
