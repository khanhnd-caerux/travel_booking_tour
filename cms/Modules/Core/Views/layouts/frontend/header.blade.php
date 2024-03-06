<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 visible-xs">
                <div class="language_mobile">
                    <ul class="flex-row " style="justify-content: center;padding-bottom: 5px">
                        <li><a href="{{ url('language/vi') }}"><img src="{{asset('frontend/template/backend/img/vietnam.gif')}}"
                                    alt="vietnamese"></a>
                        </li>
                        <li><a href="{{ url('language/en') }}"><img
                                    src="{{asset('frontend/template/backend/img/english.png')}}" alt="english"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row flex-row" style="position: relative">
            <div class="header-left col-md-7 col-sm-6 col-xs-12" style="padding-right: 0px;">
                <div class="flex-row">
                    <div class="wLOGO">
                        <a href="{{ route('client.index') }}">
                            <img src="{{ asset('storage/logo.jpeg') }}" style="border-radius: 50%"
                                alt="HA GIANG OPEN TOUR - OHG TRAVEL">
                        </a>
                    </div>
                    <div class="wSLOGAN">
                        <a href="{{ route('client.index') }}" style="float: left;">
                            <div style="font-family: UTM-AvoBold;color: #00933d;font-weight: bold">
                                {{ Str::upper($configValues['ten-web-chinh']) }}
                            </div>
                            <div style="font-family: UTM-EdwardianB;color: #f67e17; font-size: 21px" ;>
                                {{ $configValues['ten-web-phu'] }}
                            </div>
                        </a>
                    </div>
                </div>

                <div class="wrapper cf">
                    <nav id="main-nav">
                        <style>
                            #main-nav {

                                display: none;

                            }
                        </style>
                        <ul class="second-nav">
                            <li>
                                <a href="{{ route('client.index') }}">@lang('language.name')</a>
                            </li>
                            @if($categories)
                            @foreach($categories as $cate)
                            <li>
                                <a href="{{ route('client.contentList', ['slug' => $cate->slug]) }}">{{ $cate->name
                                    }}</a>
                                @if($cate->children)
                                <ul>
                                    @foreach($cate->children as $subCate)
                                    <li>
                                        <a href="{{ route('client.contentList', ['slug' => $subCate->slug]) }}">{{
                                            $subCate->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                            @endif
                            <li>
                                <a href="{{ route('client.postDetail', ['slug' => 'trai-nghiem-du-lich']) }}">@lang('language.experience')</a>
                            </li>
                            <li>
                                <a href="{{ route('client.postDetail', ['slug' => 'lien-he']) }}">@lang('language.contact')</a>
                            </li>
                        </ul>
                    </nav>
                    <a class="toggle">
                        <span></span>
                    </a>
                </div>
                <!-- end mobile -->
            </div>

            <div class="header-left col-md-5 hidden-xs col-sm-6">
                <div class="top-hotline flex-row">
                    @if (isset($configValues['hotline']))
                    <a href="tel:{{ $configValues['hotline'] }}" class="hotline">
                        <p>{{ Str::upper($configLabels['hotline']) }}</p>{{ $configValues['hotline'] }}
                    </a>
                    @endif
                </div>
            </div>
            @include('Core::layouts.frontend.bookNowTop')
            <div class="language hidden-xs">
                <ul class="flex-row">
                    <li><a href="{{ url('language/vi') }}"><img src="{{asset('frontend/template/backend/img/vietnam.gif')}}"
                                alt="vietnamese"></a> </li>

                    <li><a href="{{ url('language/en') }}">
                            <img src="{{asset('frontend/template/backend/img/english.png')}}" alt="english"></a> </li>
                </ul>

            </div>

        </div>

        <div class="row flex-row">

            <div class="header-left col-md-12 hidden-xs col-sm-12">

                <div class="menu-pc">

                    <ul class="pull-right flex-row">
                        <li>
                            <a href="{{ route('client.index') }}">@lang('language.name')</a>
                        </li>
                        @if($categories)
                        @foreach($categories as $cate)
                        <li>
                            <a href="{{ route('client.contentList', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a>
                            @if($cate->children)
                            <ul>
                                @foreach($cate->children as $subCate)
                                <li>
                                    <a href="{{ route('client.contentList', ['slug' => $subCate->slug]) }}">{{
                                        $subCate->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                        @endif
                        <li>
                        <a href="{{ route('client.postDetail', ['slug' => 'trai-nghiem-du-lich']) }}">@lang('language.experience')</a>
                        </li>
                        <li>
                            <a href="{{ route('client.postDetail', ['slug' => 'lien-he']) }}">@lang('language.contact')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .language_mobile img {
        width: 19.06px;
        height: 13.86px;
        margin-left: 5px;
    }
</style>
<script>
    function en() {
        window.location.assign("en/index2912.html?lang=japan")
    } function fr() {
        window.location.assign("fr/indexf9ca.html?lang=korea")
    }
</script>
<style>
    .language img {
        width: 19.06px;
        height: 13.86px;
        margin-left: 5px;

    }

    .language {
        position: absolute;
        top: 0px;
        right: 0px
    }
</style>
