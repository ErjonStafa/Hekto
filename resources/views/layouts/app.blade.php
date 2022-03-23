<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
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

    @if (session()->has('success'))
    <div x-data="{show:true}" x-show="show"
        class="fixed w-[100vw] z-50 h-[100vw] top-0 left-0 flex justify-center items-center bg-black bg-opacity-20">
        <div class="fixed w-1/3 h-1/3 top-1/3 left-1/3 flex flex-col bg-white">
            <div class="bg-off-navy-blue h-9 flex justify-end px-2">
                <div class="cursor-pointer w-fit h-fit" x-on:click='show=false'>
                    <x-fas-window-close class="w-5 h-5 my-2 text-white" />
                </div>
            </div>
            <div class="text-navy-blue absolute h-full w-full flex justify-center items-center text-center mt-3">
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
    @endif

    <script type="module">
        import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js';
        // first swiper
        const swiper = new Swiper(".swiper1", {
            pagination: {
                el: ".swiper-pagination1",
                clickable: true,
                draggable: true,
            },
            loop: true,
            loopedSlides: 50,
        
            slidesPerView: 'auto',
        
        });
        //second swiper
        const swiper1 = new Swiper(".swiper2", {
            pagination: {
                el: ".swiper-pagination2",
                clickable: true,
                draggable: true,
                dynamicBullets: true,
                dynamicMainBullets: 4,
            },
            slidesPerView: 4,
            spaceBetween: 40,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                816: {
                    slidesPerView: 3,
                },
                1088: {
                    slidesPerView: 4,
                },
            },
            loop: true,
        });
        
        
        //third swiper
        const swiper2 = new Swiper(".swiper3", {
            pagination: {
                el: ".swiper-pagination3",
                clickable: true,
                draggable: true,
                dynamicBullets: true,
                dynamicMainBullets: 3,
            },
            slidesPerView: 4,
            spaceBetween: 40,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                552: {
                    slidesPerView: 2,
                },
                828: {
                    slidesPerView: 3,
                },
                1104: {
                    slidesPerView: 4,
                },
            },
            loop: true,
            loopedSlides: 50,
            slidesPerView: 'auto',
        });

    </script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>