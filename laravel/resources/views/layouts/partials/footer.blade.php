<section class="sc-footer-section sc-footer-style2 sc-pt-120 footer-bg-image2 sc-md-pt-170">
    <div class="container">
        <!--=========== cta Section Start =========-->
        <div class="sc-cta-section-area">
            <div class="sc-footer-cta sc-cta-content-box d-flex align-items-center">
                <div class="sc-cta-image">
                    <img src="{{ asset('assets/images/about/cta.jpg') }}" alt="Business"/>
                </div>
                <div class="sc-cta-content rounded-0 d-flex align-items-center justify-content-between">
                    <div
                        class="sc-cta-text m-0"
                        data-sal="slide-up"
                        data-sal-duration="800"
                        data-sal-delay="300"
                    >
                        <h2 class="title white-color">Grow Fast Your Business</h2>
                        <p class="des white-color">Have any project in your mind feel free contact with us</p>
                    </div>
                    <div class="sc-cta-btn" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <a class="sc-secondary-btn" href="{{ route('contact') }}">Get Estimate</a>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== cta Section End =========-->
        <div class="row sc-pt-80 sc-pb-80 sc-md-pb-70">
            <div
                class="col-xl-3 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="300"
            >
                <div class="footer-about">
                    <div class="footer-logo sc-mb-30">
                        <a href="#"><img src="{{ asset('assets/images/logo.png') }}" style="background-color: #b8cdde"
                                         alt="Foote Logo"/></a>
                    </div>
                    <p class="footer-des">
                        We’ve always aimed to do things a little differently at TRIAJA. We’ve had a focus on building
                        one of the most unique and fulfilling workplaces by rethinking a lot of traditional practices.
                    </p>
                    <div class="sc-contact-number d-flex align-items-center sc-mb-35">
                        <div class="phone-icon">
                            <i class="icon-phone white-bg-color"></i>
                        </div>
                        <div class="contact-number">
                            Free Support:
                            <a href="tel:{{ config('app.phone') }}" class="number">{{ config('app.phone') }}</a>
                        </div>
                    </div>
                    <ul class="about-icon">
                        <li>
                            <a href="#"><i class="icon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-twiter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-youtube"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/triaja-it-services-pvt-ltd/" target="_blank">
                                <i class="icon-facebook-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="col-xl-2 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="500"
            >
                <div class="footer-menu-area sc-footer-user sc-pl-75 sc-md-pl-0 sc-md-mb-40 sc-lg-pl-0">
                    <h4 class="footer-title white-color sc-md-mb-15">Useful Links</h4>
                    <div class="row">
                        <div class="col-12">
                            <ul class="footer-menu-list">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('products.index') }}">Products</a></li>
                                <li><a href="{{ route('services.index') }}">Services</a></li>
                                <li><a href="{{ route('approach') }}">Our Approach</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                                <li><a href="{{ route('contact') }}">Get Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-xl-4 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="700"
            >
                <div
                    class="footer-menu-area sc-footer-service sc-pl-40 sc-blg-pl-30 sc-lg-pl-0 sc-md-mt-20 sc-sm-pt-10"
                >
                    <h4 class="footer-title white-color sc-md-mb-15">Background Verifications</h4>
                    <div class="row">
                        <div class="col-6">
                            <ul class="footer-menu-list">
                                <li><a href="{{ route('services.index') }}">Aadhaar Verification</a></li>
                                <li><a href="{{ route('services.index') }}">Address Verification</a></li>
                                <li><a href="{{ route('services.index') }}">Cibil Score Verification</a></li>
                                <li><a href="{{ route('services.index') }}">Drug Abuse Verification</a></li>
                                <li><a href="{{ route('services.index') }}">eCourt Database Check</a></li>
                                <li><a href="{{ route('services.index') }}">Qualification Check</a></li>
                                <li><a href="{{ route('services.index') }}">Experience Verification</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="footer-menu-list">
                                <li><a href="{{ route('services.index') }}">Global Database Check</a></li>
                                <li><a href="{{ route('services.index') }}">PAN Verification</a></li>
                                <li><a href="{{ route('services.index') }}">Criminal Record Check</a></li>
                                <li><a href="{{ route('services.index') }}">Reference Verification</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div
                class="col-xl-3 col-md-6 col-sm-12"
                data-sal="slide-up"
                data-sal-duration="500"
                data-sal-delay="900"
            >
                <div class="footer-menu-area sc-footer-user sc-pl-75 sc-md-pl-0 sc-md-mb-40 sc-lg-pl-0">
                    <h4 class="footer-title white-color sc-md-mb-15">Our Products</h4>
                    <div class="row">
                        <div class="col-12">
                            <ul class="footer-menu-list">
                                <li><a href="{{ route('services.index') }}">Digital Address Verification</a></li>
                                <li><a href="{{ route('services.index') }}">Fastag Application</a></li>
                                <li><a href="{{ route('services.index') }}">Digital KYC Application</a></li>
                                <li><a href="{{ route('services.index') }}">AI & ChatGPT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area border-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="copyright-text text-center"
                        data-sal="slide-up"
                        data-sal-duration="800"
                        data-sal-delay="400"
                    >
                        <p>© {{ date('Y') }} <a href="{{ route('index') }}" target="_blank"> TRIAJA IT Services Private Limited </a>.
                            All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
