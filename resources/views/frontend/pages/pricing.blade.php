@extends('frontend.layouts.app')
@section('title', 'Pricing Plans')
@section('meta_description', "Blue Cow Digital's transparent pricing: £979/month for complete website design, SEO and marketing. 50% off first 3 months.")
@section('meta_keywords', 'web design pricing Southport, SEO packages UK, digital marketing pricing, website and marketing package')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <!-- Page Banner Start -->
    <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
        <div class="container bordered-x py-200 rpt-100 rpb-120">
            <div class="banner-inner px-xl-4 pt-90">
                <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Pricing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                        data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pricing Plans</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="page-banner-shapes">
            <div class="shape">
                <img src="{{ asset('assets/images/shapes/hero-shape.png') }}" alt="Shape">
            </div>
            <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <img src="https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop"
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


    <!-- Pricing Area start -->
    <section class="pricing-area rel z-1 overflow-hidden">
        <div class="container bordered-x px-sm-0 pt-130 rpt-100 pb-100 rpb-70">
            <div class="row justify-content-center pb-35">
                <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-15">
                        <span class="subtitle mt-10 mb-15">One Clear Price</span>
                        <h2>Everything You Need. One Package.</h2>
                    </div>
                    <p>We believe in simple, transparent pricing. No tier confusion. No upsells. Just one complete package
                        with everything you need to grow your business online.</p>
                </div>
            </div>
            <div class="row align-items-stretch justify-content-center mt-30 gap-y-4">
                <!-- Package 1: Web Design Only -->
                <div class="col-lg-4 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="pricing-item style-two d-flex flex-column justify-content-between w-100">
                        <div class="pricing-header">
                            <h5 class="title">Web Design Only</h5>
                            <div style="margin: 20px 0;">
                                <span class="price"
                                    style="font-size: 40px; font-weight: 700; color: var(--ridda-primary-color);">TBC</span>
                                <span style="display: block; font-size: 16px; margin-top: 5px; color: #666;">Price to be
                                    confirmed</span>
                            </div>
                            <p>A bespoke, professional website built to represent your brand and convert visitors into
                                customers.</p>
                        </div>
                        <ul class="list-style-one my-4">
                            <li>Custom Website Design &amp; Build</li>
                            <li>Mobile-Responsive &amp; Fast-Loading</li>
                            <li>Content Management System (CMS)</li>
                            <li>Contact Form &amp; Lead Capture</li>
                            <li>Basic SEO Foundation Setup</li>
                            <li>Domain &amp; UK Hosting Setup</li>
                            <li>Standard Ongoing Maintenance</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100 mt-auto"
                            data-hover="Enquire Now">
                            <span>Enquire Now</span>
                        </a>
                    </div>
                </div>

                <!-- Package 2: Complete Package (Featured) -->
                <div class="col-lg-4 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50" data-aos-delay="50">
                    <div class="pricing-item style-two active d-flex flex-column justify-content-between w-100">
                        <div class="pricing-header">
                            <h5 class="title">Complete Package</h5>
                            <div style="margin: 20px 0;">
                                <span class="price" style="font-size: 48px; font-weight: 700;">£979</span>
                                <span style="display: block; font-size: 16px; margin-top: 5px; color: #666;">per
                                    month</span>
                            </div>
                            <div
                                style="background: #f0f0f0; padding: 15px; border-radius: 6px; margin: 20px 0; font-weight: 600; color: #2ecc71;">
                                50% OFF FIRST 3 MONTHS
                            </div>
                            <p>Our most popular all-in-one plan: premium web design, technical SEO, social media, and
                                monthly growth marketing.</p>
                        </div>
                        <ul class="list-style-one my-4">
                            <li>Custom Web Design &amp; Development</li>
                            <li>Technical, On-Page &amp; Local SEO</li>
                            <li>Social Media Content (2x per week)</li>
                            <li>Professional Blog Posts &amp; Articles</li>
                            <li>Google Analytics &amp; Search Console</li>
                            <li>Dedicated Account Manager</li>
                            <li>Monthly Reporting &amp; Strategy</li>
                            <li>Ongoing Support &amp; Optimisation</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100 mt-auto"
                            data-hover="Claim Your Offer">
                            <span>Claim Your Offer</span>
                        </a>
                    </div>
                </div>

                <!-- Package 3: SEO & Content Growth -->
                <div class="col-lg-4 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50" data-aos-delay="100">
                    <div class="pricing-item style-two d-flex flex-column justify-content-between w-100">
                        <div class="pricing-header">
                            <h5 class="title">SEO &amp; Content Growth</h5>
                            <div style="margin: 20px 0;">
                                <span class="price"
                                    style="font-size: 40px; font-weight: 700; color: var(--ridda-primary-color);">TBC</span>
                                <span style="display: block; font-size: 16px; margin-top: 5px; color: #666;">Price to be
                                    confirmed</span>
                            </div>
                            <p>Ongoing search engine optimization and regular content creation to scale your organic search
                                visibility.</p>
                        </div>
                        <ul class="list-style-one my-4">
                            <li>In-Depth Competitor &amp; Keyword Research</li>
                            <li>Regular Blog Writing &amp; Publishing</li>
                            <li>High-Quality Backlink Campaigns</li>
                            <li>Google Business Profile &amp; Maps SEO</li>
                            <li>Technical SEO Audit &amp; Error Fixing</li>
                            <li>Conversion Optimization (CRO)</li>
                            <li>Monthly Rank &amp; Traffic Tracking</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100 mt-auto"
                            data-hover="Enquire Now">
                            <span>Enquire Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-60">
                <div class="col-xl-8 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h4 style="margin-bottom: 20px;">What This Includes</h4>
                    <p style="margin-bottom: 20px;">Your one-time investment starts with a custom website build (typically
                        4-8 weeks). Then the monthly fee covers ongoing SEO, content creation, social media management,
                        reporting and support. Everything grows with your business.</p>
                    <div style="background: #f9f9f9; padding: 30px; border-radius: 10px;">
                        <h5 style="margin-bottom: 15px;">How It Works</h5>
                        <ul style="list-style: none; padding: 0; text-align: left; max-width: 500px; margin: 0 auto;">
                            <li style="padding: 8px 0;"><strong>Month 1-3:</strong> £489.50/month (50% discount) — Website
                                design, build and initial launch</li>
                            <li style="padding: 8px 0;"><strong>Month 4+:</strong> £979/month — Full package with all
                                services ongoing</li>
                            <li style="padding: 8px 0;"><strong>No setup fees.</strong> No hidden charges. No lock-in
                                contract.</li>
                            <li style="padding: 8px 0;"><strong>Cancel anytime</strong> after the initial 3-month period,
                                though most clients stay because they see results.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Area end -->

    <!-- CTA Area start -->
    <section class="cta-area-two rel z-1">
        <div class="container px-sm-0 bordered-x bordered-top py-130 rpy-100"
            style="background-image: url('/assets/images/background/cta-bg-dots.png');">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mx-xl-3 mb-30">
                        <h2>Ready to Claim Your Offer?</h2>
                        <p>Get started with our complete website and marketing package today. Get in touch to discuss your
                            goals and lock in your 50% discount.</p>
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