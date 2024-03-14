<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5 margin-bottom-20 col-xs-12 col-sm-5">
                <h4 class="h4-footer">
                    {{ Str::upper($configValues['ten-web-chinh']) }}
                </h4>
                <div class="bottom-address">
                    @if (isset($configLabels['van-phong']))
                    <p><i class="fa fa-map-marker"></i> {{ $configLabels['van-phong'] }} : {{
                        $configValues['van-phong']}}</p>
                    @endif
                    @if (isset($configLabels['email']))
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $configLabels['email'] }} : {{
                        $configValues['email'] }}</p>
                    @endif
                    @if (isset($configLabels['hotline']))
                    <p><i class="fa fa-phone" aria-hidden="true"></i> {{ $configLabels['hotline'] }} : {{
                        $configValues['hotline'] }}
                        <br>
                        @endif
                        @if (isset($configLabels['giay-phep-kinh-doanh']))
                        {{ $configLabels['giay-phep-kinh-doanh'] }} : {{ $configValues['giay-phep-kinh-doanh'] }}
                        @endif
                    </p>
                </div>
                <!-- <div style="display: flex;">
                    <div style="border-top: 2px solid #fff;padding-top: 20px">
                        <p>Được Ðiều hành bởi:<br />
                            Mr. Lưu Ðình Tùng<br />
                            (Tour operator)<br />
                            Phone number: 0984.650.239</p>
                    </div>
                    <img class="img_dh" src="https://hagiangopentour.com/upload/images/logo/at.jpg"
                        alt="ảnh giám đốc" />
                </div> -->
            </div>
            <div class="clearfix-20 visible-xs"></div>
            <div class="col-md-3 col-xs-12 col-sm-3">
                <h4 class="h4-footer">
                    @lang('language.activity')
                </h4>
                <div class="bottom-address">
                    <ul>
                        <li><a href="{{ route('client.postDetail', ['slug' => 'chinh-sach-bao-mat']) }}">@lang('language.policy')</a>
                        </li>
                        <li><a href="{{ route('client.postDetail', ['slug' => 'hinh-thuc-thanh-toan']) }}">@lang('language.payment')</a>
                        </li>
                        <li><a href="{{ route('client.postDetail', ['slug' => 'chinh-sach-huy-dat-ve']) }}">@lang('language.cancel')</a>
                        </li>
                        <li><a href="{{ route('client.postDetail', ['slug' => 'trai-nghiem-du-lich']) }}">@lang('language.experience')</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix-20 visible-xs"></div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <h4 class="h4-footer">
                    @lang('language.media')
                </h4>
                <div class="bottom-address">
                    <ul class="flex-row social">

                        <li class="ffb"><a href="https://www.facebook.com/hagiangopentour" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>

                        <li class="fins"><a href="Instagram.html" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>

                        <li class="femail"><a href="G-Q9CCW6K72H.html" target="_blank"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i></a>

                        </li>

                        <li class="fphone"><a href="tel:{{$configValues['hotline'] }}}}"><i class="fa fa-phone"
                                    aria-hidden="true"></i></a>
                        </li>

                        <li class="fyoutube"><a href="" target="_blank"><i class="fa fa-youtube-play"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="clearfix-20"></div>
                    <div class="flex-row">
                        <a
                            href="https://www.dmca.com/Protection/Status.aspx?ID=3ef57e79-7251-4d1f-aeae-7198116dd997&amp;refurl=https://hagiangopentour.com/"><img
                                src="https://hagiangopentour.com/upload/images/logo/dmca.png')}}" alt=""></a>

                        <a
                            href="http://online.gov.vn/Home/WebDetails/75962?zarsrc=30&amp;utm_source=zalo&amp;utm_medium=zalo&amp;utm_campaign=zalo&amp;AspxAutoDetectCookieSupport=1"><img
                                src="https://hagiangopentour.com/upload/images/logo/bct.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright" style="margin-top: 20px">
        <div class="container">
            <div class="row text-center">
                <p style="margin: 0px;font-size: 16px">Copyright 2024
                    - HA GIANG AWESOME TOURS</p>
            </div>
        </div>
    </div>
</footer>
