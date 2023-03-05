<div class="sc-contact-section sc-pt-100 sc-md-pt-70 sc-pb-80 sc-md-pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sc-heading-area sc-pr-30 sc-pt-5">
                    <span class="sub-title"><i class="icon-line"></i> Direct Contact</span>
                    <h2 class="title">
                        Have Any Projcet <span class="primary-color italic">in Your</span> Mind
                    </h2>
                </div>
                <div class="sc-contact-info sc-mt-35 sc-mb-20">
                    <ul class="list-gap white-color">
                        <li><i class="icon-phone-2"></i><a href="tel:{{ config('app.phone') }}"> {{ config('app.phone') }}</a></li>
                        <li>
                            <i class="icon-mail2"></i>
                            <a href="mailto:{{ config('app.email') }}"> {{ config('app.email') }}</a>
                        </li>
                        <li>
                            <i class="icon-gap_2"></i>
                            <a href="mailto:{{ config('app.email') }}">{{ config('app.address') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-box sc-md-mb-10 sc-md-mt-45">
                    <h4 class="contact-title sc-pb-15">Get in Touch</h4>
                    <div class="form-box">
                        <textarea id="message" name="message" placeholder="Write short subject"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <input
                                    class="from-control"
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Full name *"
                                    required=""
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input
                                class="from-control"
                                type="email"
                                id="address"
                                name="email"
                                placeholder="Your email *"
                                required=""
                            />
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <input
                                    class="from-control"
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    placeholder="Your phone"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input
                                class="from-control"
                                type="text"
                                id="subject"
                                name="subject"
                                placeholder="Subject"
                            />
                        </div>
                    </div>
                    <div class="form-box">
                        <input type="checkbox" /> Save my name, email, and website in this browser for the next
                        time I comment.
                    </div>
                    <div class="submit-button sc-primary-btn">
                        <input type="submit" value="Send Message" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
