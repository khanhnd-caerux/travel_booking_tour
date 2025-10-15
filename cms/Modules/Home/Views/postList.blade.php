@extends('Core::layouts.frontend.app')
@section('content')
<section class="product-item pt0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="https://hagiangopentour.com/">@lang('language.homepage')</a></li>
                    <li class="uk-active"><a href="https://hagiangopentour.com/kinh-nghiem-du-lich.html"
                            title="@lang('language.experience')">@lang('language.experience')</a>
                    </li>
                </ul>
                <div class="text-center">
                    <h1 class="h2-title">@lang('language.experience')</h1>
                </div>
                <div class="clearfix"></div>
                <div class="desc-catalogue">

                    @if (session()->get('locale') == 'en')
                    <div style="text-align: justify;">
                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">Traveling to <strong>Hà Giang</strong> is very convenient and easy with various time frames from <strong>07h - 22h</strong> daily at bus stations from <strong>Hanoi</strong> such as <strong>Mỹ Đình</strong> bus station, <strong>Gia Lâm</strong> bus station. But the most convenient option is to book tickets from travel companies offering free pick-up services with modern and comfortable vehicles like: </span><a href="https://hagiangopentour.com/xe-limousine-ha-giang-ha-noi.html"><span style="color:#000000;"><strong>Ha Giang Epic Limousine</strong></span></a><span style="color:#000000;">,</span><strong><span style="color:#000000;"> </span><a href="https://hagiangopentour.com/xe-cung-dien-ha-giang-ha-giang-open-tour.html"><span style="color:#000000;">Hà Giang Royal Car</span></a><span style="color:#000000;">, Hà Giang sleeper buses</span></strong><span style="color:#000000;"> ... With extremely reasonable prices ranging from <strong>200,000 VND to 350,000 VND per ticket.</strong></span></span></span></p>

                            <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">For those who enjoy traveling - You don't need to ride a motorbike from Hanoi, you can take a passenger bus to <strong>Ha Giang City</strong>, then you can rent a motorbike from rental shops easily online or directly with various types of motorbikes such as: </span><strong><span style="color:#000000;"> </span><a href="https://hagiangopentour.com/ha-giang-cho-thue-xe-may-cao-cao.html"><span style="color:#000000;">Scooters</span></a></strong><span style="color:#000000;"> in large distribution, </span><a href="https://hagiangopentour.com/cho-thue-xe-may-wave-110-tai-ha-giang.html"><span style="color:#000000;"><strong>Wave motorbikes</strong></span></a><span style="color:#000000;"> ... with prices ranging from <strong>150,000 VND to 450,000 VND per day.</strong> Or you can also rent a tourist car with friends and family for sightseeing, exploring all over the <strong>Rocky Plateau.</strong></span></span></span></p>

                                <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">For first-time visitors, you can easily contact </span><strong><a href="https://hagiangopentour.com/"><span style="color:#000000;">Ha Giang Open Tour</span></a><span style="color:#000000;"> </span></strong><span style="color:#000000;">company for experiential trips with </span><strong><span style="color:#000000;"> </span><a href="https://hagiangopentour.com/tour-phuot-xe-may.html"><span style="color:#000000;">Ha Giang Motorcycle Adventure Tours</span></a></strong><span style="color:#000000;"> or </span><a href="https://hagiangopentour.com/tour-o-to-ha-giang.html"><span style="color:#000000;"><strong>Ha Giang Car Tours</strong></span></a><span style="color:#000000;"> combining sightseeing and enjoyable check-ins.</span></span></span></p>

                                    <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">When is the best time to visit <strong>Ha Giang</strong>?</span></span></span></p>

                                    <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">+ From January, February, March of the lunar calendar: <strong>Ha Giang</strong> becomes vibrant with the colors of <strong>Peach Blossoms</strong>, <strong>Plum Blossoms</strong>, <strong>Mustard Flowers</strong>. At the same time, this period coincides with our country's <strong>Tết Nguyên Đán (Lunar New Year)</strong> so there are also many traditional festivals of the highland ethnic groups.</span></span></span></p>

                                    <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">+ From April, May, June, July of the lunar calendar: <strong>Ha Giang</strong> turns into smooth yellow of mountains besides the emerald green of <strong>Nho Quế River</strong>, with the cool atmosphere of <strong>Đồng Văn</strong>, <strong>Lũng Cú</strong>, and peaceful countryside of <strong>Du Già...</strong></span></span></span></p>

                                    <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">+ From August, September of the lunar calendar: <strong>Ha Giang</strong> is famous for its magnificent terraced rice fields in <strong>Hoàng Su Phì</strong> district, cloud hunting at <strong>Quản Bạ Heaven's Gate</strong>, admiring the majestic rocky mountains at <strong>Mã Pí Lèng Pass</strong>...</span></span></span></p>

                                    <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span style="color:#000000;">+ From October, November, December of the lunar calendar: <strong>Ha Giang</strong> becomes intense red with the blooms of <strong>Buckwheat Flowers</strong> in the cold winter atmosphere on the border region.</span></span></span></p>
                                </div>
                                @else
                                <div style="text-align: justify;">
                                <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">Việc đi lại nên <strong>Hà Giang</strong>&nbsp;rất thuận
                                        tiện và dễ dàng với nhiều khung giờ khác nhau từ <strong>07h&nbsp;-
                                            22h</strong>&nbsp;hàng ngày tại các bến xe từ <strong>Hà Nội</strong> như
                                        bến xe&nbsp;<strong>Mỹ Đình</strong>, bến xe<strong> Gia Lâm</strong>. Nhưng
                                        thuận tiện nhất là các bạn đặt vé từ các hãng xe du lịch họ miễn phí đón tại nhà
                                        với nhiều loại xe mới tiện nghi như: xe </span><a
                                        href="https://hagiangopentour.com/xe-limousine-ha-giang-ha-noi.html"><span
                                            style="color:#000000;"><strong>Ha&nbsp;Giang Epic
                                                Limousine</strong></span></a><span
                                        style="color:#000000;">,</span><strong><span style="color:#000000;"> </span><a
                                            href="https://hagiangopentour.com/xe-cung-dien-ha-giang-ha-giang-open-tour.html"><span
                                                style="color:#000000;">xe cung điện Hà Giang</span></a><span
                                            style="color:#000000;">, xe giường&nbsp;nằm Hà Giang</span></strong><span
                                        style="color:#000000;">&nbsp;... Với giá cả cực kỳ hợp lý chỉ tử <strong>200.000
                                            đ - 350.000 đ/ vé.</strong></span></span></span></p>

                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">Đối với các bạn thích đi phượt - Các bạn không cần lái xe
                                        máy từ Hà Nội lên mà bạn chỉ cần đi xe khách lên <strong>TP. Hà Giang</strong>
                                        sau đó bạn có thể thuê xe máy từ các nhà xe dễ dàng qua online hay đặt trực tiếp
                                        với nhiều loại xe như:</span><strong><span style="color:#000000;"> </span><a
                                            href="https://hagiangopentour.com/ha-giang-cho-thue-xe-may-cao-cao.html"><span
                                                style="color:#000000;">Xe Cào Cào</span></a></strong><a
                                        href="https://hagiangopentour.com/ha-giang-cho-thue-xe-may-cao-cao.html"><span
                                            style="color:#000000;"> </span></a><span style="color:#000000;">phân phối
                                        lớn , </span><a
                                        href="https://hagiangopentour.com/cho-thue-xe-may-wave-110-tai-ha-giang.html"><span
                                            style="color:#000000;"><strong>Xe Wave</strong></span></a><span
                                        style="color:#000000;"> ... với giá từ <strong>150.000 đ - 450.000 đ/
                                            Ngày.&nbsp;</strong>Hoặc các bạn cũng có thể thuê xe ô tô du lịch&nbsp;cùng
                                        bạn bè&nbsp;và gia đình đi thăm quan, khám phá&nbsp;khắp vùng&nbsp;<strong>Cao
                                            Nguyên Đá.</strong></span></span></span></p>

                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">Đối với các bạn lần đầu lên có thể dễ dàng liên hệ công
                                        ty </span><strong><a href="https://hagiangopentour.com/"><span
                                                style="color:#000000;">Hà Giang Open Tour</span></a><span
                                            style="color:#000000;">&nbsp;</span></strong><span style="color:#000000;">để
                                        có những chuyến&nbsp;đi trải nghiệm bằng</span><strong><span
                                            style="color:#000000;"> </span><a
                                            href="https://hagiangopentour.com/tour-phuot-xe-may.html"><span
                                                style="color:#000000;">Tour&nbsp; Phượt Xe Máy Hà
                                                Giang</span></a></strong><span style="color:#000000;">&nbsp;hoặc
                                    </span><a href="https://hagiangopentour.com/tour-o-to-ha-giang.html"><span
                                            style="color:#000000;"><strong>Tour Ô TÔ Hà Giang</strong></span></a><span
                                        style="color:#000000;">&nbsp;vừa kết hợp thăm quan và checkin thật lý thú và dễ
                                        dàng.</span></span></span></p>

                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">Bạn nên đi&nbsp;<strong>Hà Giang</strong> vào&nbsp;mùa
                                        nào đẹp ?</span></span></span></p>

                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">+ Từ tháng 1,2,3 dương lịch: <strong>Hà Giang</strong>
                                        trở lên rực rỡ với các màu <strong>Hoa Đào</strong>, <strong>Hoa Mận</strong>,
                                        <strong>Hoa Cải</strong>. Đồng thời dịp này trùng vào dịp<strong> Tết Nguyên
                                            Đán</strong> của nước ta nên cũng có rất nhiều lễ hội dân gian của các đồng
                                        bào dân tộc vùng cao .</span></span></span></p>

                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">+ Từ tháng 4,5,6,7 dương lịch: <strong>Hà Giang</strong>
                                        chuyển sang sắc vàng mượt mà của núi rừng bên cạnh màu xanh ngọc bích của
                                        con<strong> Sông Nho Quế</strong>, với không khí tươi mát của vùng đất<strong>
                                            Đồng Văn</strong>, <strong>Lũng cú, </strong>và vùng quê thanh bình<strong>
                                            Du Già...</strong></span></span></span></p>

                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">+ Từ tháng 8,9 dương lịch: <strong>Hà Giang</strong> nổi
                                        tiếng với những cánh đồng lúa ruộng bậc thang tuyệt đẹp của huyện <strong>Hoàng
                                            Su Phì</strong>, săn mây trên&nbsp;<strong>Cổng Trời&nbsp;Quản Bạ</strong>,
                                        ngắm cảnh núi đá&nbsp;hùng vĩ trên đỉnh <strong>Đèo Mã Pí Lèng</strong>
                                        ....</span></span></span></p>

                        <p><span style="font-family:Arial,Helvetica,sans-serif;"><span style="font-size:16px;"><span
                                        style="color:#000000;">+ Từ tháng 10,11,12 dương lịch: <strong>Hà Giang</strong>
                                        trở lên đỏ sẫm rực rỡ của những cánh đồng<strong> Hoa Tam Giác Mạch</strong>
                                        trong cái không khí&nbsp;xe lạnh của mùa đông tại vùng biên
                                        cương.</span></span></span></p>
                        </div>
                    @endif

                </div>
                <div class="row">
                    @foreach($postRelated as $post)
                    <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-20">
                        <div class="item">
                            <div class="img">
                                <a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}"><img
                                        src="{{ asset($post->image_path) }}" alt="{{ $post->title }}"></a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="info">
                                <h3 class="h3-name">
                                    <a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}">
                                        {{ $post->title }} </a>
                                </h3>
                                <div class="clearfix"></div>
                                <div class="desc-kndl">
                                    <p>{{$post->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
