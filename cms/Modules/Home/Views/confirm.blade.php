@extends('Core::layouts.frontend.app')
@section('css')
    <link rel="stylesheet" href="/frontend/css/contact.css">
    <style>
        .form_price_tour {
            display: none;
        }
        .table_price {
            margin-bottom: 36px;
        }
    </style>
@endsection
@section('content')
    <div class='main_wrapper'>
        <div class=" container_main_wrapper">
            <div class="main-area main-area-1col main-area-full">
                <div class="img-title-cat">
                    <img class="banner_news" alt="/frontend/images/config/untitled-1_1698920312.jpg" width="1920px"
                        height="550px" src="/frontend/images/config/untitled-1_1698920312.jpg"
                        srcset="/frontend/images/config/untitled-1_1698920312.jpg">
                    <div class="title_box">
                        <h2 class="title_h1">
                            Confirm Order
                        </h2>

                        <div class='breadcrumbs_wrapper' itemscope itemtype="http://schema.org/WebPage">
                            <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">

                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="http://schema.org/ListItem">
                                    <a title='LinenHaGiang’s Homestay - Explore Ha Giang' href="../index.html"
                                        itemprop="item">
                                        <span itemprop="name">Home</span>
                                        <meta content="1" itemprop="position">
                                    </a>

                                </li>
                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="http://schema.org/ListItem">
                                    <span itemprop="name">Confirm Order</span>
                                    <meta content="2" itemprop="position">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="contact">
                    <div class="contact_title container">
                        <h1 class="block_title">Your order</h1>
                    </div>
                    <div class="container">
                        <div class="row top cls">
                            <div class="row_form">
                                <div class="right_row itm">
                                    @if(session('error'))
                                        <script>
                                            alert("{{ session('error') }}");
                                        </script>
                                    @endif
                                    <form method="POST" action="{{ route('client.saveOrder') }}" name="contact"
                                        id="form_contact" class="form ct_form">
                                        @csrf()
                                        {!! json_decode($cart['html_data']) !!}
                                        <input type="hidden" name="tour_id" value="{{ $cart['buy_tour'] }}">
                                        <input type="hidden" name="date_selected" value="{{ $cart['buy_time'] }}">
                                        <input type="hidden" name="total_price" value="{{ $cart['sum_price_tour'] }}">
                                        <input type="hidden" name="html_data" value="{{ $cart['html_data'] }}">
                                        <div class="contact_table" width="100%">
                                            <div class="ctn_wrap cls">
                                                <div class="mbl ctn_input">
                                                    <div class="input_txt">
                                                        <input type="text" maxlength="255"
                                                            placeholder="First and last name *" value="" name="contact_name"
                                                            id="contact_name" class="txtinput" />
                                                    </div>

                                                </div>
                                                <div class="mbl ctn_input">
                                                    <div class="input_txt">
                                                        <input type="tel" maxlength="255" placeholder="Whatsapp *" value=""
                                                            name="contact_phone" id="contact_phone" class="txtinput" />
                                                    </div>
                                                </div>
                                                <div class="mbl ctn_input">

                                                    <div class="input_txt">
                                                        <input type="text" maxlength="255" placeholder="Email *" value=""
                                                            name="contact_email" id="contact_email" class="txtinput" />
                                                    </div>
                                                </div>
                                                <div class="mbl ctn_input">
                                                    <div class="input_txt">
                                                        <input type="text" maxlength="255" placeholder="Country *" value=""
                                                            name="contact_address" id="contact_address" class="txtinput" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mbl ctn_mess">

                                                <div class="input_txt textarea_txt">
                                                    <textarea placeholder="Message *" rows="8" cols="20" name='message'
                                                        id='message'></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="summary">
                                            Please confirm order request and send us with complete information </div>
                                        <div class="mbl_ctn ">
                                            <button class="btn mbl" id='submitbt'>
                                                <span>Confirm Order</span>
                                            </button>
                                        </div>
                                        <input type="hidden" name="module" value="contact" />
                                        <input type="hidden" name="task" value="save" />
                                        <input type="hidden" name="view" value="contact" />
                                        <input type="hidden" name="Itemid" value="43" />
                                    </form>

                                </div>
                                <hr>
                                <div class="left_row itm">
                                    <div class="grid_icon">
                                        <div class="item">
                                            <div class="name ctn">
                                                <a href="javascript:void(0)" title="LinenHaGiang's Tour Ha Giang"
                                                    class="click_me" data-id="1">
                                                    LinenHaGiang's Tour Ha Giang </a>
                                            </div>
                                            <div class="address ctn">
                                                <span>Address:</span> No.124, 20/8 street, Ha Giang, Vietnam
                                            </div>
                                            <div class="email ctn">
                                                <span>Email:</span> LinenHaGiangshomestayhg@gmail.com
                                            </div>
                                            <div class="website ctn">
                                                <span>Website:</span> https://LinenHaGiangshomestay.com/
                                            </div>
                                            <div class="phone ctn">
                                                <div class="phone-icon"><svg fill="#fac686" version="1.1" id="Capa_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 891.024 891.024" xml:space="preserve">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g>
                                                                <path
                                                                    d="M2.8,180.875c46.6,134,144.7,286.2,282.9,424.399c138.2,138.2,290.4,236.301,424.4,282.9c18.2,6.3,38.3,1.8,52-11.8 l92.7-92.7l21.6-21.6c19.5-19.5,19.5-51.2,0-70.7l-143.5-143.4c-19.5-19.5-51.2-19.5-70.7,0l-38.899,38.9 c-20.2,20.2-52.4,22.2-75,4.6c-44.7-34.8-89-73.899-131.9-116.8c-42.9-42.9-82-87.2-116.8-131.9c-17.601-22.6-15.601-54.7,4.6-75 l38.9-38.9c19.5-19.5,19.5-51.2,0-70.7l-143.5-143.5c-19.5-19.5-51.2-19.5-70.7,0l-21.6,21.6l-92.7,92.7 C1,142.575-3.5,162.675,2.8,180.875z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg></div>
                                                <div class="phone-title">Hotline Whatsapp 24/7:</div>
                                                <div><span>+84397223444</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
