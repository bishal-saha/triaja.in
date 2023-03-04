<div id="sc-overlay-bg2" class="sc-overlay-bg2"></div>
<div class="sc-product-offcanvas-area">
    <div class="sc-offcanvas-header d-flex align-items-center justify-content-between">
        <div class="sticky-logo logo-area text-center">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"/>
            </a>
        </div>
        <div class="offcanvas-icon">
            <a id="canva_close" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
                    <path
                        d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"
                    />
                </svg>
            </a>
        </div>
    </div>

    <!-- Canvas Mobile Menu start -->
    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
        <ul class="nav-menu sc-mb-45 sc-pl-0">
            @include('layouts.partials.menu')
        </ul>
    </nav>
    <!-- Canvas Menu end -->
    <div class="sc-offcanvas-list-info">
        <p class="des sc-mb-20">
            TRIAJA IT Services Private Limited is a company founded by industry professionals. Our staff comprises of
            professionals from the industry who have in-depth knowledge about IT Solutions, Hiring, Employee Background Verifications, Human
            Resources & Public Records Research.
        </p>
        <h4 class="product-title">Contact Info</h4>
        <ul class="list-gap">
            <li>
                <i class="icon-map"></i>
                {{ config('app.address') }}
            </li>
            <li><i class="icon-phone"></i><a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></li>
            <li><i class="icon-mail"></i><a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></li>
        </ul>
    </div>
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.053586933549!2d73.0112628284301!3d19.01736021757786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c32cf68871e7%3A0xb042712e57fcfb58!2sTRIAJA%20IT%20Services%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1677680861085!5m2!1sen!2sin"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="sc-canva-button">
        <a class="sc-primary-btn" href="{{ route('consulting') }}">Get Consulting</a>
    </div>
    <div class="sc-offcanvas-icon-list">
        <ul>
            <li>
                <a href="#" target="_blank">
                   <i class="icon-linkedin-2"></i>
                </a>
            </li>
            <li>
                <a href="#"><i class="icon-twiter"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/triaja-it-services-pvt-ltd/" target="_blank"><i class="icon-facebook-2"></i></a>
            </li>
        </ul>
    </div>
</div>
