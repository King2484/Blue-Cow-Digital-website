@extends('frontend.layouts.app')
@section('title', 'Our Services')
@section('meta_description', "Explore Blue Cow Digital's full range of services: bespoke web design, SEO, social media management, branding and eCommerce development.")
@section('meta_keywords', 'web design services UK, SEO agency Southport, digital marketing services, branding agency, eCommerce development')
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
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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
                            <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Blue Cow Digital Services">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-25">
                            <span class="subtitle mt-10 mb-15">What We Provide</span>
                            <h2>Digital Services Built Around Your Business Goals</h2>
                        </div>
                        <p>At Blue Cow Digital, we offer a full suite of digital services designed to help your business grow online. Whether you need a brand new website, a stronger search presence, or a complete digital strategy, our team in Southport has the expertise to deliver results.</p>
                        <ul class="list-style-one mt-25">
                            <li>Bespoke Web Design &amp; Development</li>
                            <li>SEO &amp; Content Marketing</li>
                            <li>Social Media Management</li>
                            <li>Branding &amp; Visual Identity</li>
                            <li>eCommerce Solutions</li>
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
                            <span class="subtitle mt-10 mb-15">Our Process</span>
                            <h2>How We Deliver Results for Your Business</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center justify-content-center rel">
                    <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">01</span>
                            <h6>Discovery</h6>
                            <p>We learn about your business, goals, target audience and competitors in depth.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="work-process-item-two">
                            <span class="number">02</span>
                            <h6>Strategy</h6>
                            <p>We create a tailored digital strategy aligned with your specific goals and KPIs.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <div class="work-process-item-two">
                            <span class="number">03</span>
                            <h6>Design &amp; Build</h6>
                            <p>Our team designs and develops your project with quality and performance in mind.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                        <div class="work-process-item-two">
                            <span class="number">04</span>
                            <h6>Launch</h6>
                            <p>We test everything thoroughly before going live to ensure a flawless launch.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="200">
                        <div class="work-process-item-two">
                            <span class="number">05</span>
                            <h6>Grow &amp; Optimise</h6>
                            <p>We monitor performance and continually optimise to improve results over time.</p>
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
                            <span class="subtitle mt-10 mb-15">Our Services</span>
                            <h2>Everything You Need to Succeed Online</h2>
                        </div>
                    </div>
                </div>
                <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="number">01</div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Web Design">
                    </div>
                    <div class="content">
                        <h4><a href="{{ route('serviceDetails') }}">Web Design &amp; Development</a></h4>
                        <p>Bespoke, mobile-responsive websites built to convert visitors into customers. Every site we create is custom designed to reflect your brand and optimised for performance from day one.</p>
                        <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="number">02</div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Branding">
                    </div>
                    <div class="content">
                        <h4><a href="{{ route('serviceDetails') }}">Branding &amp; Visual Identity</a></h4>
                        <p>Stand out with a distinctive brand identity that resonates with your target audience. From logo design to full brand guidelines, we create identities that are built to last.</p>
                        <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="number">03</div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=500" alt="SEO">
                    </div>
                    <div class="content">
                        <h4><a href="{{ route('serviceDetails') }}">SEO &amp; Digital Marketing</a></h4>
                        <p>Get found on Google by the customers who matter most. Our data-driven SEO strategies combine technical optimisation, content marketing and link building to grow your organic visibility.</p>
                        <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="number">04</div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Social Media">
                    </div>
                    <div class="content">
                        <h4><a href="{{ route('serviceDetails') }}">Social Media Management</a></h4>
                        <p>Build your brand and engage your audience across Facebook, Instagram, LinkedIn and more. We create and manage content strategies that grow followers and drive real business enquiries.</p>
                        <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="services-timeline-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="number">05</div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=500" alt="eCommerce">
                    </div>
                    <div class="content">
                        <h4><a href="{{ route('serviceDetails') }}">eCommerce Development</a></h4>
                        <p>Launch or scale your online store with a fully bespoke eCommerce solution. From product management to secure checkout and SEO-optimised category pages, we build stores that sell.</p>
                        <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
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
                            <h2>Common Questions About Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="accordion" id="serviceFaq">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        How long does it take to build a website?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#serviceFaq">
                                    <div class="accordion-body">Most bespoke websites take between 4 and 8 weeks from initial briefing to launch, depending on complexity. We will give you a clear timeline at the start of the project.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Do you offer ongoing support after launch?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                    <div class="accordion-body">Yes. We offer ongoing maintenance, hosting support, and digital marketing retainers so your website and online presence continue to perform and grow after launch.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        How does SEO help my business?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                    <div class="accordion-body">SEO improves your visibility in Google search results, putting your business in front of people who are actively searching for what you offer. This drives more qualified traffic and more enquiries over time.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Can you work with my existing website?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                    <div class="accordion-body">Absolutely. We regularly work with existing websites to improve their design, performance, and SEO. We will audit your current site and recommend the most cost-effective improvements.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                        How do I get started with Blue Cow Digital?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                    <div class="accordion-body">Simply get in touch via our contact page or call us on +44 (0)1704 331786. We will arrange a free, no-obligation consultation to discuss your goals and how we can help.</div>
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
