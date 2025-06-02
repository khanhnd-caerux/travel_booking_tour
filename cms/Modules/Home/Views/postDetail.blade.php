@extends('Core::layouts.frontend.app')
@section('css')
    <style>
        .news_detail .title {
            font-weight: normal;
            margin-bottom: 10px;
            text-align: center;
            font-weight: 600;
            color: #000;
            font-size: 28px;
            line-height: 38px;
        }
    </style>
@endsection
@section('content')
    <div class='main_wrapper'>

        <div class=" container_main_wrapper">

            <div class="main-area main-area-1col main-area-full">

                <div class="img-title-cat">
                    <img class="banner_news" alt="{{ $postDetail->title }}" width="1920px" height="550px"
                        src="{{ asset($postDetail->image_path) }}" srcset="{{ asset($postDetail->image_path) }}">
                    <div class="title_box">
                        <h2 class="title_h1">
                            {{ $postDetail->title }} </h2>

                        <div class='breadcrumbs_wrapper' itemscope itemtype="http://schema.org/WebPage">
                            <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">

                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="http://schema.org/ListItem">
                                    <a title='LinenHaGiang’s Homestay - Explore Ha Giang' href="../index.html" itemprop="item">
                                        <span itemprop="name">Home</span>
                                        <meta content="1" itemprop="position">
                                    </a>

                                </li>
                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="http://schema.org/ListItem">


                                    <span itemprop="name">{{ $postDetail->title }}</span>
                                    <meta content="2" itemprop="position">

                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="news_detail">
                        <h1 class='title'>
                            {{ $postDetail->title }}
                        </h1>
                        <div class="description">{{ $postDetail->description }}</div>
                        {!! $postDetail->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
