<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>

    <body>
        <div>
            <h2>{{ $data['type'] }}</h2>
            <br />
            <p><b>{{ $data['task'] }}</b></p>
            <p>{{ $data['content'] }}</p>
            <a href="{{ $data['link'] }}" target="_blank">Xem thông tin order</a>
        </div>
    </body>
</html>
