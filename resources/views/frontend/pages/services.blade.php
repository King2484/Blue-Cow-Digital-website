@extends('frontend.layouts.app')
@section('title', 'Our Services')
@section('meta_description', "Blue Cow Digital's complete web design and digital marketing package — everything you need to grow your business online.")
@section('meta_keywords', 'web design services UK, SEO agency Southport, digital marketing services, website design and SEO')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <!-- Page Banner Start -->
    <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
        <div class="container bordered-x py-200 rpt-100 rpb-120">
            <div class="banner-inner px-xl-4 pt-90">
                <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Our Package
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                        data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Our Package</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="page-banner-shapes">
            <div class="shape">
                <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
            </div>
            <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop"
                    alt="Banner">
            </div>
            <span class="marquee-wrap">
                <span class="marquee-inner left">
                    <span class="marquee-item">Web Design Agency</span>
                </span>
                <span class="marquee-inner left">
                    <span class="marquee-item">Web Design Agency</span>
                </span>
            </span>
        </div>

    </section>
    <!-- Page Banner End -->


    <!-- What We Provide Area start -->
    <section class="what-we-provide rel z-1">
        <div class="container bordered-x px-sm-0 pt-130 rpt-100 pb-100 rpb-70">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="what-provide-image rmb-55">
                        <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=700"
                            alt="Blue Cow Digital Services">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-25">
                        <span class="subtitle mt-10 mb-15">What You Get</span>
                        <h2>One Complete Package to Grow Your Business Online</h2>
                    </div>
                    <p>You don't need to piece together multiple services or juggle different agencies. Our single,
                        integrated package includes everything you need to build a professional website, improve your search
                        visibility, and generate more customer enquiries through strategic marketing.</p>
                    <ul class="list-style-one mt-25">
                        <li>Complete Website Design &amp; Development</li>
                        <li>Technical, On-Page &amp; Local SEO</li>
                        <li>Social Media Content (2x per week)</li>
                        <li>Blog Posts &amp; Content Marketing</li>
                        <li>Monthly Marketing Reporting &amp; Strategy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Provide Area end -->


    <!-- Work Process Area start -->
    <section class="work-process-area rel z-1 bgc-lighter">
        <div class="container bordered-x px-sm-0 py-130 rpy-100">
            <div class="row justify-content-center pb-50">
                <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-15">
                        <span class="subtitle mt-10 mb-15">The Journey</span>
                        <h2>How We Build Your Success</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-center rel">
                <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="work-process-item-two">
                        <span class="number">01</span>
                        <h6>Discovery</h6>
                        <p>We learn about your business, goals, audience and what drives your customers to buy.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50"
                    data-aos-delay="50">
                    <div class="work-process-item-two">
                        <span class="number">02</span>
                        <h6>Planning</h6>
                        <p>We create a clear digital strategy including site structure, content plan and marketing roadmap.
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50"
                    data-aos-delay="100">
                    <div class="work-process-item-two">
                        <span class="number">03</span>
                        <h6>Design</h6>
                        <p>We design a beautiful, conversion-focused website that represents your brand perfectly.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50"
                    data-aos-delay="150">
                    <div class="work-process-item-two">
                        <span class="number">04</span>
                        <h6>Development</h6>
                        <p>We build your website with SEO built in, fast loading speeds and full mobile optimisation.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50"
                    data-aos-delay="200">
                    <div class="work-process-item-two">
                        <span class="number">05</span>
                        <h6>Launch &amp; Market</h6>
                        <p>We launch your site and immediately begin SEO optimisation and marketing campaigns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Process Area end -->


    <!-- Services Timeline Area start -->
    <section class="services-timeline rel z-1">
        <div class="container bordered-x px-sm-0 py-130 rpy-100">
            <div class="row justify-content-center pb-50">
                <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-15">
                        <span class="subtitle mt-10 mb-15">What's Included</span>
                        <h2>Everything You Need in One Package</h2>
                    </div>
                </div>
            </div>
            <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <div class="number">01</div>
                <div class="image">
                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=500"
                        alt="Web Design">
                </div>
                <div class="content">
                    <h4><a href="{{ route('serviceDetails') }}">Complete Website Overhaul</a></h4>
                    <p>A fully custom, mobile-responsive website designed and built specifically for your business. Fast
                        loading, easy to navigate, and built with user experience and conversions in mind.</p>
                    <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <div class="number">02</div>
                <div class="image">
                    <img src="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=500"
                        alt="SEO">
                </div>
                <div class="content">
                    <h4><a href="{{ route('serviceDetails') }}">Complete SEO Strategy</a></h4>
                    <p>Technical SEO, on-page optimisation, local SEO and ongoing optimisation to get you found on Google by
                        customers searching for what you offer.</p>
                    <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <div class="number">03</div>
                <div class="image">
                    <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=500"
                        alt="Content">
                </div>
                <div class="content">
                    <h4><a href="{{ route('serviceDetails') }}">Content &amp; Social Media Management</a></h4>
                    <p>Professional blog posts, engaging social media content twice per week across your channels, and a
                        content strategy that keeps your audience engaged and coming back.</p>
                    <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <div class="number">04</div>
                <div class="image">
                    <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=500"
                        alt="Reporting">
                </div>
                <div class="content">
                    <h4><a href="{{ route('serviceDetails') }}">Monthly Reporting &amp; Strategy</a></h4>
                    <p>Clear monthly reports showing what's working, what's driving customers to your site, and what we're
                        doing next. Strategy reviews keep your marketing aligned with your business goals.</p>
                    <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Timeline Area end -->


    <!-- FAQ Area start -->
    <section class="faq-area rel z-1 bgc-lighter">
        <div class="container bordered-x px-sm-0 py-130 rpy-100">
            <div class="row justify-content-center pb-50">
                <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-15">
                        <span class="subtitle mt-10 mb-15">FAQs</span>
                        <h2>Questions About Our Package?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="accordion" id="serviceFaq">
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    How long does the website build take?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#serviceFaq">
                                <div class="accordion-body">Most projects take 4-8 weeks from briefing to launch. We'll give
                                    you a clear timeline upfront and keep you informed throughout the process.</div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    What's included in the monthly package?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                <div class="accordion-body">Website design and development, full SEO (technical, on-page and
                                    local), twice-weekly social media content, blog posts, monthly reporting, and ongoing
                                    optimisation. Everything you need in one package.</div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Will I be able to update my own website?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                <div class="accordion-body">Yes. We build your site with an easy-to-use content management
                                    system (CMS) so you can update content, images, and pages yourself without any technical
                                    knowledge. We provide training too.</div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    How much does it cost?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                <div class="accordion-body">Our complete package is £979 per month, with 50% off the first 3
                                    months as a special offer. That covers everything — website, SEO, content, social media
                                    and reporting. No hidden fees.</div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    How do I get started?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                <div class="accordion-body">Simply get in touch via our contact page or call 01704 331 786.
                                    We'll discuss your goals, answer your questions, and you can claim the special offer.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Area end -->

    <!-- CTA Area start -->
    <section class="cta-area-two rel z-1">
        <div class="container px-sm-0 bordered-x bordered-top py-130 rpy-100"
            style="background-image: url('/assets/images/background/cta-bg-dots.png');">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mx-xl-3 mb-30">
                        <h2>Ready to Claim Your Offer?</h2>
                        <p>Get the complete website and marketing package at £979/month (50% off the first 3 months).</p>
                    </div>
                    <a href="{{ route('contact') }}" class="theme-btn hover-primary" data-hover="Get Started">
                        <span>Get Started</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection