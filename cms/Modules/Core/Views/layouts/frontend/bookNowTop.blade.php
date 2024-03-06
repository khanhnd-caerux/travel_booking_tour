<div class="book_now">
    <img class="img_booknow" id="img_booknowTop" src="{{ asset('frontend/book_now.png') }}" alt="Book Now">
</div>
<div class="contact_layout d-none" id="contact_layoutTop">
<div class="contact_form d-none" id="contact_formTop">
    <button class="btn_close" id="closeTop">X</button>
    <form action="{{ route('client.contact.store') }}" method="post">
    @csrf
    <h1>@lang('language.labelForm')</h1>
    <p>@lang('language.descForm')</p>
    <div class="column">
        <label for="the-name">@lang('language.nameCustomer')</label>
        <input type="text" name="name" id="the-name">
        <label for="the-email">@lang('language.emailCustomer')</label>
        <input type="email" name="email" id="the-email">
        <label for="the-phone">@lang('language.phoneCustomer')</label>
        <input type="tel" name="phone_number" id="the-phone">
        <label for="the-reason">@lang('language.pick')</label>
        <select name="url" id="the-reason">
            <option value="1">@lang('language.choose')</option>
            @if ($tours)
            @foreach ($tours as $tour)
            <option value="{{ config('app.url') . '/noi-dung-chi-tiet/' . $tour->slug }}">{{ $tour->name }}</option>
            @endforeach
            @endif
        </select>
    <label for="the-message">@lang('language.note')</label>
        <textarea name="note" id="the-message"></textarea>
        <input type="submit" value="@lang('language.send')">
    </div>
    </form>
</div>
</div>
<style>
    .d-none {
        display: none;
    }
    .contact_form {
        position: fixed;
        width: 40%;
        left: 30%;
        background: #f0f0f0;
        padding: 10px;
        top: 10%;
        z-index: 9999;
        border-radius: 15px;
    }
    .contact_layout {
        position: fixed;
        background: #00000070;
        width: 100%;
        height: 100vh;
        z-index: 9000;
        top: 0;
        left: 0;
    }
    .contact_form h1, .contact_form p{
    text-align: center;
    }
    label{
    display:block;
    margin:1em 0 .2em;
    }
    /* single-line text, checkbox, and button */
    input, select, textarea{
    display:block;
    width:100%;
    padding:.3em;
    font-size:20px;
    background-color:#fbfbfb;
    border:solid 1px #CCC;
    resize:vertical;
    }
    textarea{
    min-height:180px;
    }
    select{
    color:indigo;
    }
    option{
    color:blue;
    background: lavenderBlush;
    }
    input[type=checkbox]{
    display:inline;
    width:auto;
    color:red;
    }

    input[type=submit]{
    background:lightcoral;
    margin:1em 0 0;
    color:white;
    border:none;
    float: left;
    width: 100%;
    margin-right: 10px;
    border-radius:8px;
    transition:all .3s ease-out;
    }

    input:focus,
    input:hover,
    select:focus,
    select:hover,
    textarea:focus,
    textarea:hover{
    background: lavenderBlush;
    }

    /* hover and focus states */
    input[type=submit]:hover,
    input[type=submit]:focus{
    background: lightgreen;
    outline:none;
    }

    @media screen and (min-width:600px) {
    /*  make the form 2 columns */
    form:after{
        content:'';
        display:block;
        clear:both;
    }
    .column{
        width:100%;
        padding:1em;
        float:left;
    }
    }
    .book_now {
            right: 20px;
            bottom: 100px;
        }
        .book_now .img_booknow {
            cursor: pointer;
            width: 180px;
            height: auto;
            border-radius: 15px;
            animation: bounce 2s ease infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }
        .btn_close {
            padding: 10;
            border-radius: 10px;
            border: none;
            position: absolute;
            font-size: 20px;
            top: 5px;
            right: 5px;
        }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $("#img_booknowTop").click(function() {
        $("#contact_formTop").toggleClass('d-none');
        $("#contact_layoutTop").toggleClass('d-none');
    });
    $("#closeTop").click(function() {
        $("#contact_formTop").toggleClass('d-none');
        $("#contact_layoutTop").toggleClass('d-none');
    });
</script>
