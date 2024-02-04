@extends('Core::layouts.frontend.app')
@section('content')
<section style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb ">
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href=""> Đặt Tour thành công</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section style="style=" background: #f5f5f5"">
    <div class="container">
        <div class="row">
            <div class="clearfix-20"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="tsNav" class="row page_speed_165641320">
                    <div class="col-md-12 page_speed_909149143">
                        <div class="fix-width-booking">
                            <div class="text-center">
                                <h2 class="h2-title" style="margin-bottom: 20px">Đặt Tour thành công</h2>
                            </div>
                            <ul
                                class="text-center header-progress has-secondary-logo ts__stepsBar full-width page_speed_895730547">
                                <li id="step-1" class="step-1 ">
                                    <span class="content">1</span>
                                    <div class="information">
                                        <span data-bind="text: progressTracker.customerInformationText">Lịch khởi
                                            hành</span>
                                    </div>
                                </li>
                                <li id="step-2" class="step-2"><span class="content">2</span>
                                    <div class="information">
                                        <span data-bind="text: progressTracker.paymentInformationText">Xem lại</span>
                                    </div>
                                </li>
                                <li id="step-3" class="step-3 active">
                                    <span class="content">
                                        <i class="fa fa-check styl-icon-check"></i>
                                    </span>
                                    <div class="information">
                                        <span data-bind="text: progressTracker.bookingCompletedText">Đặt Tour thành
                                            công</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            {{ Session::get('success') }}
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@endsection
