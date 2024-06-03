<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        【HA GIANG TRAVEL MOUNTAIN THÔNG BÁO CÓ KHÁCH ĐẶT TOUR】
    </title>
    <style>
        .container {
            max-width: 900px;
            border-radius: 2px;
            margin: 0;
            padding: 0;
        }

        .link-support {
            color: #526ced;
            font-weight: 700;
            text-decoration: none;
            display: block;
        }

        .content {
            color: #000;
            padding: 16px 0;
            margin: 0;
        }

        #btn {
            padding: 10px;
            background: #4d5cb1;
            margin: 16px 0;
            display: inline-block;
            color: #fff;
            border-radius: 3px;
            font-weight: 700;
            text-decoration: none;
        }

        .pt-0 {
            padding-top: 0;
        }

        .pb-0 {
            padding-bottom: 0;
        }

        .block-btn-verify {
            margin: 30px 0;
            text-align: center;
        }

        .btn-verify {
            padding: 15px 50px;
            border-radius: 8px;
            background-color: #1a73e8;
            color: white !important;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>
            THÔNG BÁO CÓ KHÁCH HÀNG ĐẶT TOUR
        </p>
        <p> Thông tin chi tiết </p>
        <p>
           Tên khách hàng:  <b>{{ $data['customer'] }}</b>
        </p>
        <p>
           Số điện thoại:  <b>{{ $data['phone'] }}</b>
        </p>
        <p>
           Email: <b>{{ $data['email'] }}</b>
        </p>
        <p>
           Ghi chú: <b>{{ $data['note'] }}</b>
        </p>
        <p>
            <a href="{{ $data['link'] }}" target="_blank">Xem thông tin order</a>
        </p>
        <p>-------------------------------------------------------</p>
    </div>
</body>

</html>
