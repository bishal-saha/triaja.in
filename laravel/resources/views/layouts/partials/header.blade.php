<header class="sc-header-section" id="sc-header-sticky">
    <div class="sc-topbar-section sc-topbar-section-two">
        <div class="container">
            <!-- Topbar Section Start -->
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-7">
                    <div
                        class="sc-menu-inner p-z-idex d-flex align-items-center justify-content-md-start justify-content-center"
                    >
                        <div class="sc-header-date">
                            <ul class="list-gap sc-date">
                                <li><i class="icon-timer"></i> One Stop for IT Solutions</li>
                            </ul>
                        </div>
                        <div class="sc-header-content-left text-center">
                            <ul class="list-gap white-color">
                                <li>
                                    <i class="icon-phone"></i
                                    ><a href="tel:{{ config('app.phone') }}"> {{ config('app.phone') }}</a>
                                </li>
                                <li class="header-mail">
                                    <i class="icon-message"></i
                                    ><a href="mailto:{{ config('app.email') }}"> {{ config('app.email') }}</a>
                                </li>
                                <li>
                                    <i class="icon-map"></i
                                    ><a href="mailto:{{ config('app.email') }}">
                                        Sector 42 A, Nerul, Navi Mumbai, Thane
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div
                        class="sc-header-content-right p-z-idex align-items-center d-flex justify-content-md-end justify-content-center"
                    >
                        <div class="sc-header-social-icon">
                            <ul class="list-gap sc-social-list">
                                <li>
                                    <a href="https://www.linkedin.com/company/triaja-it-services-pvt-ltd/" target="_blank"> <i class="icon-facebook-2"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="icon-twiter"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="icon-intragram"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="icon-linkedin-2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Section End -->
        </div>
    </div>
    <!-- Header Section Start -->
    <div class="sc-header-content sc-header-content-two">
        <div class="container">
            <div class="row align-items-center justify-content-between p-z-idex">
                <div class="col-lg-9 col-6">
                    <div class="sc-menu-inner d-flex align-items-center">
                        <div class="sc-header-logo sc-pr-112">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" />
                            </a>
                        </div>
                        <div class="sc-main-menu d-lg-block d-none">
                            <!-- Mainmenu Section Start -->
                            <ul class="list-gap main-menu">
                                @include('layouts.partials.menu')
                            </ul>
                            <!-- Mainmenu Section End -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="sc-menu-select-box d-flex align-items-center justify-content-end">
                        <div class="sc-hambagur-icon sc-mr-20">
                            <a id="canva_expander" href="#" class="nav-menu-link menu-button">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                            </a>
                        </div>
                        <div class="header-btn">
                            <a href="#"><i class="ri-search-line"></i></a>
                            <a class="sc-primary-btn" href="{{ route('consulting') }}">Get Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
