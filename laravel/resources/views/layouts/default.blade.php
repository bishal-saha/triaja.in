<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} - @yield('page-title')</title>
    <meta name="description" content="" />
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon -->
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Bootstrap  v5.1.3 css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Sall css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sal.css') }}" />
    <!-- magnific css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- Swiper Slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.min.css') }}" />
    <!-- Remixicon Fonts css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ico-fonts.css') }}" />
    <!-- Remixicon Fonts css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/odometer.min.css') }}" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    @stack('header')
</head>
<body>
<!-- preloader -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
            <div class="loader-icon">
                <img src="{{ asset('assets/images/favicon.png') }}" alt="Corporate Business HTML Template" />
            </div>
        </div>
        <div class="txt-loading">
            <span data-text-preloader="T" class="letters-loading"> T </span>
            <span data-text-preloader="R" class="letters-loading"> R </span>
            <span data-text-preloader="I" class="letters-loading"> I </span>
            <span data-text-preloader="A" class="letters-loading"> A </span>
            <span data-text-preloader="J" class="letters-loading"> J </span>
            <span data-text-preloader="A" class="letters-loading"> A </span>
        </div>
        <p class="text-center">Loading</p>
    </div>
</div>
<!-- welcome content start from here -->

<!--========== Header Section Start ==============-->
@include('layouts.partials.header')
<!--========== Header Section End ==============-->

@yield('content')

<!--=========== Footer Section Start =========-->
@include('layouts.partials.footer')
<!--=========== Footer Section End =========-->


<!--Sc Offcanvas Area Start-->
@include('layouts.partials.offcanvas')
<!--Sc Offcanvas Area End-->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="icon-angle_right"></i>
</div>
<!-- End scrollUp  -->

<!-- start scrollUp  -->
<div class="boxfin-scroll-top progress-done">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path
            d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    "
        ></path>
    </svg>
    <div class="boxfin-scroll-top-icon">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            role="img"
            width="1em"
            height="1em"
            viewBox="0 0 24 24"
            data-icon="mdi:arrow-up"
            class="iconify iconify--mdi"
        >
            <path
                fill="currentColor"
                d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"
            ></path>
        </svg>
    </div>
</div>
<!-- End scrollUp  -->

<!-- Bootstrap.min js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- jquery.min js -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- modernizr.js -->
<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- magnific.min js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Swiper.min js -->
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<!-- appear js -->
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<!-- odometer js -->
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<!-- sal js -->
<script src="{{ asset('assets/js/sal.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('footer')
</body>
</html>
