<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place Order </title>
</head>
<body>
    You Have Order Form {{ env('APP_URL') }} some Order With Total {{ $order->total }}
</html>
