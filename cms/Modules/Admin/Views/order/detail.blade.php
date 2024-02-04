@extends('Core::layouts.backend.app', ['activePage' => __('order') , 'titlePage' => __('Chi tiết Order')])
@section('js')
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlert.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlertFunction.js') }}"></script>
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Chi tiết Order</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card-body p-3 col-4">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-3 text-sm">{{ $order->name }}</h6>
                                            <span class="mb-2 text-xs">SDT: <span
                                                    class="text-dark font-weight-bold ms-sm-2">{{ $order->phone
                                                    }}</span></span>
                                            <span class="mb-2 text-xs">Email: <span
                                                    class="text-dark ms-sm-2 font-weight-bold">{{ $order->email
                                                    }}</span></span>
                                            <span class="text-xs">Note: <span
                                                    class="text-dark ms-sm-2 font-weight-bold">{{
                                                    $order->note }}</span></span>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="javascript:;"><i
                                                    class="material-icons text-sm me-2">delete</i>Delete</a>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                    class="material-icons text-sm me-2">edit</i>Edit</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-3 col-8">
                                <table cellpadding="0" cellspacing="0" class="w-100">
                                    <tr class="top">
                                        <td colspan="2">
                                            <table class="w-100">
                                                <tr class="d-flex justify-content-between">
                                                    <td class="title">
                                                        <img src="https://sparksuite.github.io/simple-html-invoice-template/images/logo.png"
                                                            style="width: 100%; max-width: 300px" />
                                                    </td>
                                                    <td>
                                                        Mã hoá đơn #: 123<br />
                                                        Ngày tạo: January 1, 2023<br />
                                                        Hạn đến ngày: February 1, 2023
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    @foreach($order->orderDetail as $detail)
                                    <tr class="heading">
                                        <td>Tên Tour</td>

                                        <td>{{ $detail->tour_id }}</td>
                                    </tr>
                                    <tr class="heading">
                                        <td>Ngày bắt đầu: </td>

                                        <td>{{ $detail->date_selected }}</td>
                                    </tr>
                                    <tr class="heading">
                                        <td>Số lượng </td>
                                        @foreach (json_decode($detail->quantity, true) as $key => $value)
                                        <td>@if($key == "nguoilon")  Người lớn @elseif ($key == "treem") Trẻ em @else Trẻ sơ sinh @endif: @if ($value !== null) {{ $value }} @else 0 @endif</td>
                                        @endforeach

                                    </tr>
                                    @endforeach
                                    <tr class="total">
                                        <td></td>

                                        <td>Tổng tiền: {{ $detail->total_price }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .img {
        width: 200px;
        object-fit: cover;
    }

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .invoice-box.rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .invoice-box.rtl table {
        text-align: right;
    }

    .invoice-box.rtl table tr td:nth-child(2) {
        text-align: left;
    }
</style>
@endsection
