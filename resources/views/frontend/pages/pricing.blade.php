@extends('frontend.layouts.app')
@section('title', 'Pricing Plans')
@section('meta_description', "Explore Blue Cow Digital's transparent pricing plans for web design, SEO, and digital marketing services. Choose the package that fits your business.")
@section('meta_keywords', 'web design pricing Southport, SEO packages UK, digital marketing pricing, Blue Cow Digital plans')
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
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
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
                    <img src="https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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
                            <span class="subtitle mt-10 mb-15">Transparent Pricing</span>
                            <h2>Simple Plans. Real Results.</h2>
                        </div>
                        <p>Every business is different — that's why we offer flexible packages to suit your goals and budget. Not sure which plan is right for you? <a href="{{ route('contact') }}">Get in touch</a> and we'll recommend the best fit.</p>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center mt-30">
                    <div class="col-xl-4 col-md-6 col-sm-10" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="pricing-item style-two">
                           <div class="pricing-header">
                                <h5 class="title">Starter Plan</h5>
                                <span class="price">POA</span>
                                <p>Perfect for small businesses and start-ups looking to establish a professional online presence.</p>
                           </div>
                            <ul class="list-style-one">
                                <li>Bespoke Website Design (up to 5 pages)</li>
                                <li>Mobile-Responsive Build</li>
                                <li>Basic On-Page SEO Setup</li>
                                <li>Google Analytics Integration</li>
                                <li class="unavailable">Social Media Strategy</li>
                                <li class="unavailable">Monthly SEO Reporting</li>
                                <li class="unavailable">Dedicated Account Manager</li>
                            </ul>
                            <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100" data-hover="Get a Quote">
                                <span>Get a Quote</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-10" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="pricing-item style-two active">
                           <div class="pricing-header">
                                <h5 class="title">Growth Plan</h5>
                                <span class="price">POA</span>
                                <p>Ideal for growing businesses that want to build visibility and generate more leads online.</p>
                           </div>
                            <ul class="list-style-one">
                                <li>Bespoke Website Design (up to 10 pages)</li>
                                <li>Mobile-Responsive Build</li>
                                <li>Full On-Page &amp; Technical SEO</li>
                                <li>Google Analytics &amp; Search Console</li>
                                <li>Social Media Strategy &amp; Setup</li>
                                <li>Monthly SEO Reporting</li>
                                <li class="unavailable">Dedicated Account Manager</li>
                            </ul>
                            <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100" data-hover="Get a Quote">
                                <span>Get a Quote</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-10" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="pricing-item style-two">
                           <div class="pricing-header">
                                <h5 class="title">Premium Plan</h5>
                                <span class="price">POA</span>
                                <p>A fully managed digital solution for established businesses ready to dominate their market.</p>
                           </div>
                            <ul class="list-style-one">
                                <li>Fully Bespoke Website (unlimited pages)</li>
                                <li>Mobile-Responsive Build</li>
                                <li>Full SEO Strategy &amp; Ongoing Optimisation</li>
                                <li>Google Analytics, Search Console &amp; PPC</li>
                                <li>Full Social Media Management</li>
                                <li>Monthly Performance Reporting</li>
                                <li>Dedicated Account Manager</li>
                            </ul>
                            <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100" data-hover="Get a Quote">
                                <span>Get a Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-50">
                    <div class="col-xl-8 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <p><strong>All prices are bespoke and provided on application (POA).</strong> Every project is unique — we will put together a tailored proposal based on your specific requirements and goals. Contact our team today for a free, no-obligation consultation.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Area end -->

        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x bordered-top py-130 rpy-100" style="background-image: url('/assets/images/background/cta-bg-dots.png');">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mx-xl-3 mb-30">
                            <h2>Ready to Grow Your Business Online?</h2>
                            <p>Talk to the Blue Cow Digital team today for a free, no-obligation consultation.</p>
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
