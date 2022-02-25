<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

</head>

<body>

    <div>
        <x-home-components.header-components.header />
    </div>
    <div>
        <x-home-components.navigation-components.navigation />
    </div>

    @yield('content')

    <div>
        <x-home-components.footer-components.footer />
    </div>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>