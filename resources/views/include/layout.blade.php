<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
    <link rel="icon" href="{{ asset('images/UTM-LOGO.png') }}" type="image/png">
    <title>@yield('title','EVUTM')</title>
</head>
<body>
    @yield('content')
    <div class="loader"></div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>