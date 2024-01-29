@extends('Core::layouts.frontend.app')
@section('content')
@include('Core::layouts.frontend.breadcrumb', ['slug' => $postDetail->slug, 'title' => $postDetail->title])
<section class="product-item pt0 bgfff">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12 col-sm-3">
                <div class="clearfix-20"></div>
                <div class="margin-bottom-30">
                    <h1 class="h2-detail">{{ $postDetail->title }}</h1>
                    <p class="date">Ngày đăng: {{ $postDetail->updated_at }}</p>
                    <div class="margin-bottom-20">
                        <div class="content-new-detail">
                            {!! $postDetail->content !!}
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_google_plus"></a>
                                <a class="a2a_button_skype"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <div style="margin: 0px -8px">
                                <div class="fb-comments" data-href="gioi-thieu-ve-ha-giang-open-tour.html"
                                    data-numposts="20" data-width="825"></div>
                            </div>
                            <style>
                                .content-new-detail img {
                                    max-width: 100% !important;
                                    height: auto !important;
                                }
                            </style>
                        </div>

                    </div>
                </div>
                <hr>


            </div>

            <div class="col-md-3 col-xs-12 col-sm-3">

                <h4 class="h4-footer">
                    Bài viết mới </h4>
                <div class="box-sukiennoibat-list">
                    <ul>
                        @if($postRelated)
                        @foreach($postRelated as $post)
                        <li>
                            <a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}"><img
                                    src="{{ asset($post->image_path) }}" alt="{{ $post->title }}"></a>
                            <div class="box-2-title">
                                <a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}">{{ $post->title
                                    }}</a>
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>


        </div>
        <div class="clearfix-20 visible-xs"></div>

        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <h2 class="h2-detail">Có thể bạn quan tâm</h2>

            </div>
            @foreach($postRelated->take(3) as $post)
            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-20">
                <div class="item">
                    <div class="img">
                        <a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}"><img
                                src="{{ asset($post->image_path) }}" alt="{{ $post->title }}"></a>
                    </div>
                    <div class="info">
                        <h3 class="h3-name">
                            <a href="{{ route('client.postDetail', ['slug' => $post->slug]) }}">
                                {{ $post->title }} </a>
                        </h3>
                        <div class="desc-kndl" style="width: 100%">
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>

</section>
@endsection
