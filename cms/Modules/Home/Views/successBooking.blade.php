@extends('Core::layouts.frontend.app')
@section('content')
<section style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb ">
                    <li><a href="/">@lang('language.homepage')</a></li>
                    <li><a href=""> @lang('language.success')</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="clearfix-20"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="tsNav" class="row page_speed_165641320">
                    <div class="col-md-12 page_speed_909149143">
                        <div class="fix-width-booking">
                            <div class="text-center">
                                <h2 class="h2-title" style="margin-bottom: 20px">@lang('language.success')</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div class="thankyou">
                                <div class="thank_content">
                                    <h2>@lang('language.thank')</h2>
                                    <p>{{ Session::get('success') }}</p>
                                    <a href="{{ route('client.index') }}" class="text_back">@lang('language.backhomepage')</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<style>
    .thankyou {
        height: 500px;
        margin-bottom: 20px;
    }

    .thank_content {
        text-align: center;
        padding: 20px;
        background: #f5f5f5;
        height: 100%;
        border-radius: 30px;
    }

    .text_back {
        font-size: 30px;
        color: red;
    }
</style>
@endsection
