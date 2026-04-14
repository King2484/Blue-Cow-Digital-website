@extends('frontend.layouts.app')
@section('title', 'Our Services — Blue Cow Digital')
@section('meta_description', 'Blue Cow Digital offers bespoke web design, SEO, social media management, branding, and digital marketing services for businesses across the UK.')
@section('meta_keywords', 'web design services UK, SEO agency Southport, social media management, branding services, digital marketing agency')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Our Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="assets/images/shapes/hero-shape.png" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
                </div>
                <span class="marquee-wrap">
                    <span class="marquee-inner left">
                        <span class="marquee-item">Web Design Agency</span>
                   </span>
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
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-area rel z-1">
            <div class="container px-sm-0 bordered-x py-130 rpy-100">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 mt-50 rmt-0 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <span class="subtitle mt-10 mb-15">Why Choose Us</span>
                            <h2>Discover the advantages of our services</h2>
                        </div>
                        <p>Whether you need a brand new website, an SEO overhaul, or a fresh social media strategy, Blue Cow Digital delivers results. We assess your current digital presence, identify growth opportunities, and build a solution that works.</p>
                        <br>
                        <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blue Cow Digital team at work">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="why-choose-services">
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-curve"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Bespoke, Mobile-Ready Websites</a></h5>
                                    <p>Every website we build is fully responsive and optimised for all devices — desktop, tablet and mobile — so your visitors always get the best experience.</p>
                                </div>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-leadership"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Dedicated Account Management</a></h5>
                                    <p>You'll have a dedicated point of contact who knows your project inside out and keeps you informed throughout the entire process.</p>
                                </div>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-satisfaction"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Results You Can Measure</a></h5>
                                    <p>We track, report and continuously optimise your digital campaigns so you can see real ROI — more traffic, more leads, more conversions.</p>
                                </div>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-networking"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Multi-Channel Digital Expertise</a></h5>
                                    <p>From SEO and social media to branding and PPC, we have the expertise to manage your entire digital presence under one roof.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- Working Process Area Start -->
        <section class="working-process-area bgc-lighter rel z-1">
            <div class="container px-sm-0 bordered-x pt-130 rpt-100 pb-100 rpb-70">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Our Working Process</span>
                            <h2>How We Optimize Inside Our Workflow</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center rel">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">01</span>
                            <h6>Discovery & Analysis</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>We start by understanding your business target audience conducting comprehensive</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">02</span>
                            <h6>Website Optimization</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>Optimize the website for both on-page and technical SEO ensuring responsiveness,</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">03</span>
                            <h6>Content Strategy</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>Develop and implement the content strategy that focuses keyword-optimized content.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">04</span>
                            <h6>Discovery & Analysis</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>We start by understanding your business target audience conducting comprehensive</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Working Process Area End -->
        
        
        <!-- Services Area start -->
        <section class="services-area color-two rel z-1">
            <div class="container bordered-x pt-130 rpt-100 px-sm-0">
                <div class="row justify-content-center pb-35">
                    <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <span class="subtitle mt-10 mb-15">Our Services</span>
                            <h2>Explore Popular Services</h2>
                        </div>
                        <p>From local businesses to national brands, we've helped countless organisations achieve success online through tailored digital strategies that deliver real results.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-seo"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Technical SEO Audits</a></h4>
                            <p>Our comprehensive technical SEO audits identify and address underlying issues that may hinder your website's performance in search results, ensuring optimal crawlability, indexability, and user experience successful SEO strategy is data-driven</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-keywords"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Keyword Research</a></h4>
                            <p>We conduct in-depth keyword research uncover valuable opportunities optimize your website's relevant keywords</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-search-engine"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">On-Page Optimization</a></h4>
                            <p>Our on-page optimization strategies focus on optimizing key elements of your website, including meta tags, headings</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-link-building"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Link Building & Outreach</a></h4>
                            <p>Through strategic link building and outreach, we enhance your website's authority and credibility, earning high-quality backlinks that boost your rankings.</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-www"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Local SEO Solutions</a></h4>
                            <p>For businesses targeting local customers, our local SEO solutions optimise your online presence for location-based searches, putting you on the map.</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area end -->
        
        
        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x pt-100 rpt-70 pb-130 rpb-100" style="background-image: url(assets/images/background/cta-bg-dots.png);">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mx-xl-3 mb-30">
                            <h2>Get In Touch and start growing your startup today</h2>
                            <p>Have any questions? Don't hesitate to contact us!</p>
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