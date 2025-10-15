@extends('Core::layouts.frontend.app')
@section('content')
<section style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb ">
                    <li><a href="/">@lang('language.homepage')</a></li>
                    <li><a href="">{{ session()->get('locale') == 'vi' ? 'Đặt Tour-Vé-Xe' : 'Booking'}}</a></li>
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
                                <h2 class="h2-title" style="margin-bottom: 20px">{{ session()->get('locale') == 'vi' ? 'Đặt Tour-Vé-Xe' : 'Booking'}}</h2>
                            </div>
                            @if (isset($tourBooking))
                            <div id="tsTourDetail">
                                <div class="item-info-combo">
                                    <div class="styl-image-booking">
                                        <div class="img-booking">
                                            <img src="{{ asset($tourBooking->feature_image_path) }}"
                                                alt="{{ $tourBooking->name }}">
                                        </div>
                                        <div class="item-info-booking booking-info-tour">
                                            <p class="page_speed_1021675572">
                                                {{ $tourBooking->name }} </p>
                                            <div class="item-booking">
                                                <style>
                                                    .ulproduct li {
                                                        margin-bottom: 5px;
                                                    }
                                                </style>
                                                <ul class="ulproduct">
                                                    <li>
                                                        <i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.destinationFrom'): </span> {{ $tourBooking->destination_from }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o text-pri"></i><span
                                                            class="font-semi">@lang('language.schedule'):
                                                        </span> {{ $tourBooking->destination_to }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar text-pri"></i><span
                                                            class="font-semi">@lang('language.departureTime'): </span> {{ $tourBooking->schedule }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-car text-pri"></i><span class="font-semi">@lang('language.vehicle'):
                                                        </span> {{ $tourBooking->vehicle }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if (isset($carBooking))
                            <div id="tsTourDetail">
                                <div class="item-info-combo">
                                    <div class="styl-image-booking">
                                        <div class="img-booking">
                                            <img src="{{ asset($carBooking->feature_image_path) }}"
                                                alt="{{ $carBooking->name }}">
                                        </div>
                                        <div class="item-info-booking booking-info-tour">
                                            <p class="page_speed_1021675572">
                                                {{ $carBooking->name }} </p>
                                            <div class="item-booking">
                                                <style>
                                                    .ulproduct li {
                                                        margin-bottom: 5px;
                                                    }
                                                </style>
                                                <ul class="ulproduct">
                                                    <li>
                                                        <i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.destinationFrom') </span> {{ $carBooking->destination_from }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o text-pri"></i><span
                                                            class="font-semi">@lang('language.destinationFrom'):
                                                        </span> {{ $carBooking->destination_to }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar text-pri"></i><span
                                                            class="font-semi">@lang('language.destinationFrom'): </span> {{ $carBooking->road }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-car text-pri"></i><span class="font-semi">@lang('language.free'):
                                                        </span> {{ $carBooking->free }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if (isset($ticketBooking))
                            <div id="tsTourDetail">
                                <div class="item-info-combo">
                                    <div class="styl-image-booking">
                                        <div class="img-booking">
                                            <img src="{{ asset($ticketBooking->feature_image_path) }}"
                                                alt="{{ $ticketBooking->name }}">
                                        </div>
                                        <div class="item-info-booking booking-info-tour">
                                            <p class="page_speed_1021675572">
                                                {{ $ticketBooking->name }} </p>
                                            <div class="item-booking">
                                                <style>
                                                    .ulproduct li {
                                                        margin-bottom: 5px;
                                                    }
                                                </style>
                                                <ul class="ulproduct">
                                                    <li>
                                                        <i class="fa fa-home text-pri"></i><span class="font-semi">@lang('language.destinationFrom'): </span> {{ $ticketBooking->destination_from }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o text-pri"></i><span
                                                            class="font-semi">@lang('language.departureTime'):
                                                        </span> {{ $ticketBooking->destination_to }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar text-pri"></i><span
                                                            class="font-semi">@lang('language.schedule'): </span> {{ $ticketBooking->schedule }}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-car text-pri"></i><span class="font-semi">@lang('language.vehicle'):
                                                        </span> {{ $ticketBooking->vehicle }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <form method="post" id="mailsubricrexe"
                                @if(isset($tourBooking)) action="{{ route('client.addToCart', ['type' => $type, 'id' => $tourBooking->id]) }}" @endif
                                @if(isset($carBooking)) action="{{ route('client.addToCart', ['type' => $type, 'id' => $carBooking->id]) }}" @endif
                                @if(isset($ticketBooking)) action="{{ route('client.addToCart', ['type' => $type, 'id' => $ticketBooking->id]) }}" @endif
                                >
                                @csrf
                                <div class="content-booking content-booking-update price-detail-animation page_speed_1628318564"
                                    id="formQ">
                                    <h3 class="title-step">
                                        @lang('language.contactInfor')
                                    </h3>
                                    <div class="content-booking page_speed_1427014602">
                                        <div class="mt-10">
                                            <div class="error"></div>
                                            <div class="form-group">
                                                <div
                                                    class="form-check form-check-inline item-category-product page_speed_55152856">
                                                    <label class="container-radio">@lang('language.Mr') <input type="radio"
                                                            id="customerMale" name="pronoun"
                                                            class="custom-control-input pronoun" value="Anh" checked>
                                                        <span class="checkmark-radio"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline item-category-product">
                                                    <label class="container-radio">@lang('language.Mrs') <input type="radio"
                                                            id="customerFemale" name="pronoun"
                                                            class="custom-control-input pronoun" value="Chị">
                                                        <span class="checkmark-radio"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3 ">
                                                    <input type="text" name="name" value=""
                                                        class="form-control fullname"
                                                        placeholder="@lang('language.typeName')" autocomplete="off"
                                                        required />

                                                </div>
                                            </div>
                                            @if(!isset($carBooking))
                                            <label class="font-12">@lang('language.typeQuantity')</label>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <input type="number" name="nguoilon" value=""
                                                        class="form-control"
                                                        min="0"
                                                        placeholder="@lang('language.adult')" autocomplete="on"
                                                        required />
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <input type="number" name="treem" value=""
                                                        class="form-control"
                                                        min="0"
                                                        placeholder="@lang('language.childen')" autocomplete="on"
                                                        required />
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <input type="number" name="sosinh" value=""
                                                        class="form-control"
                                                        min="0"
                                                        placeholder="@lang('language.baby')" autocomplete="on"
                                                        required />
                                                </div>
                                            </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-12">
                                                <label class="font-12">@lang('language.pickDate')</label>
                                                <input type="date" class="form-control" name="date_selected" value="" min="2018-01-01" max="" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label class="font-12">@lang('language.emailAccept')</label>
                                                    <input type="email" name="email" value="" class="form-control email"
                                                        placeholder="@lang('language.typeEmail')" autocomplete="off"
                                                        required />

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label class="font-12">@lang('language.contactToPhone')</label>
                                                    <input type="text" name="phone" value="" class="form-control phone"
                                                        placeholder="@lang('language.typePhone')" autocomplete="off"
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row style-margin-bot-booking">
                                            <div class="col-md-12 ">
                                                <label id="add_booking_note">@lang('language.specialRequest'):</label>
                                                <textarea name="note" cols="40" rows="10" class="form-control message"
                                                    placeholder="@lang('language.exampleRequest')"
                                                    autocomplete="off"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group item-continue-step1 text-center ">
                                    <button type="submit" class="btn item-btn-continue-step1">
                                    @lang('language.continue')</button>
                                    <div class="item-text-color-booking">
                                        <i class="fa fa-check-square"></i><span> @lang('language.bookFirst')</span>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@section('js')
<script src="{{asset('frontend/template/acore/js/time.js')}}"></script>
@endsection
@endsection
