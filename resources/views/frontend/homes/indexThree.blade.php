@extends('frontend.layouts.app')
@section('title', 'Web Design & SEO Agency')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style-sky-blue.css') }}">
@endsection
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerThree')
    <!-- header area end -->

    <!-- Hero Area Start -->
        <section class="hero-area-two bgc-black text-white rel z-2">
            <div class="container bordered-x bordered-bottom bgp-bottom pt-195 rpt-150 pb-100" style="background-image: url(assets/images/background/hero-bg-dots.png);">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-content style-two text-white rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <h1>Unlock Website's Potential with Expert SEO Solutions</h1>
                            <p>An SEO agency specializes in optimizing websites to improve their visibility on search engines, driving organic traffic, and enhancing online presence.</p>
                            <div class="hero-btns pt-10">
                                <a href="{{ route('services') }}" class="theme-btn bgc-secondary me-3 mt-15" data-hover="Get Your SEO Audit">
                                    <span>Get Your SEO Audit</span>
                                </a>
                                <a href="{{ route('services') }}" class="theme-btn color-white mt-15" data-hover="Explore Services">
                                    <span>Explore Services</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-two-image-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Hero">
                            <div class="shape one">
                                <img src="{{ asset('/assets/images/shapes/hero-shape1.png') }}" alt="Shape">
                            </div>
                            <div class="shape two">
                                <img src="{{ asset('/assets/images/shapes/hero-shape2.png') }}" alt="Shape">
                            </div>
                            <div class="shape three">
                                <img src="{{ asset('/assets/images/shapes/hero-shape3.png') }}" alt="Shape">
                            </div>
                            <div class="shape four">
                                <img src="{{ asset('/assets/images/shapes/hero-shape4.png') }}" alt="Shape">
                            </div>
                            <div class="shape five">
                                <img src="{{ asset('/assets/images/shapes/hero-shape5.png') }}" alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Client Logo Area start -->
        <div class="client-logo-area bgc-black">
            <div class="container text-white bordered-x">
                <div class="client-logo-wrap pt-95 pb-85">
                    <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Trusted by industry leaders</h6>
                    </div>
                    <div class="client-logo-active">
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white1.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white2.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white3.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white4.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white5.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white6.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white1.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white2.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white3.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white4.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white5.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo-white6.png') }}" alt="Client Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Logo Area end -->
        
        
        <!-- About Area start -->
        <section class="about-area-two rel z-1">
            <div class="container bordered-x py-100">
                <div class="row gap-100 justify-content-between align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-four-image-part rmb-55">
                            <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=700" alt="About">
                            <div class="shape one">
                                <img src="{{ asset('/assets/images/shapes/about-two1.jpg') }}" alt="Shape">
                            </div>
                            <div class="shape two">
                                <img src="{{ asset('/assets/images/shapes/about-two2.jpg') }}" alt="Shape">
                            </div>
                            <div class="shape three">
                                <img src="{{ asset('/assets/images/shapes/about-two3.jpg') }}" alt="Shape">
                            </div>
                            <div class="abs-headings">
                                <h6 class="shape four bgc-primary text-white">10m+ Satisfied Clients</h6>
                                <h6 class="shape five bgc-green">CEO & Founder</h6>
                                <h6 class="shape six bgc-yellow">25+ Years Of Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-content-four ps-xl-5 ms-xl-1">
                            <div class="section-title mb-40">
                                <span class="subtitle mt-10 mb-15">About Agency</span>
                                <h2>Boost Your Rankings Expert SEO Solutions for Maximum Visibility</h2>
                            </div>
                            <p>Our team of dedicated SEO experts combines extensive industry knowledge with strategies to deliver tangible results for clients innovative our.</p>
                            <a href="{{ route('about') }}" class="theme-btn color-white hover-secondary mt-25" data-hover="Learn More Us">
                                <span>Learn More Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        
        
        <!-- Services Area start -->
        <section class="services-area rel z-1">
            <div class="container bordered-x pb-70 px-sm-0">
                <div class="row justify-content-center pb-35">
                    <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <span class="subtitle mb-15">Our Services</span>
                            <h2>Explore Popular Services</h2>
                        </div>
                        <p>From local businesses to global enterprises, we've helped countless brands achieve success online through customized SEO solutions tailored to their unique needs and goals</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-seo"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Technical SEO Audits</a></h4>
                            <p>Our comprehensive technical SEO audits identify and address underlying issues that may hinder your website's performance in search results, ensuring optimal crawlability, indexability, and user experience successful SEO strategy is data-driven</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="{{ asset('/assets/images/shapes/service-circle.png') }}" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-keywords"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Keyword Research</a></h4>
                            <p>We conduct in-depth keyword research uncover valuable opportunities optimize your website's relevant keywords</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="{{ asset('/assets/images/shapes/service-circle.png') }}" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-search-engine"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">On-Page Optimization</a></h4>
                            <p>Our on-page optimization strategies focus on optimizing key elements of your website, including meta tags, headings</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="{{ asset('/assets/images/shapes/service-circle.png') }}" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-link-building"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Link Building & Outreach</a></h4>
                            <p>Through strategic link building a outreach efforts, we enhance to website's authority and credibility, earning high-quality</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="{{ asset('/assets/images/shapes/service-circle.png') }}" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-www"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Local SEO Solutions</a></h4>
                            <p>For businesses targeting local audiences, our local SEO solutions optimize your they online presence for location-based</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="{{ asset('/assets/images/shapes/service-circle.png') }}" alt="Circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area end -->
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-us-area bgc-lighter rel z-1">
            <div class="container bordered-x py-100">
                <div class="row mx-xl-1 justify-content-between">
                    <div class="col-lg-6 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-45">
                            <span class="subtitle mt-10 mb-15">Why Choose Us?</span>
                            <h2>SEO Strategies Tailored to Your Business Needs</h2>
                        </div>
                        <img class="br-5" src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Why Choose Us">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-tools"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Expertise and Experience</a></h6>
                                <p>With over 10+ years of experience in the industry team seasoned SEO professionals brings knowledge</p>
                            </div>
                        </div>
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-anchor"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Customized Solutions</a></h6>
                                <p>We understand that every business is unique. That's why we take a tailored approach to SEO</p>
                            </div>
                        </div>
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-comments"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Transparency & Communication</a></h6>
                                <p>We believe in open and transparent communication with our clients every step of the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- Case Studies Area start -->
        <section class="case-studies-area bgc-lighter rel z-1">
            <div class="container bordered-x bordered-top pt-110 pb-70 px-sm-0">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mb-15">Case Studies</span>
                            <h2>Explore Success Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Case Study">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-tags"></i> <a href="#">SEO Strategy</a></li>
                                </ul>
                                <h5><a href="{{ route('serviceDetails') }}">How to Improve Your Website's Loading Speed Performance</a></h5>
                                <a href="{{ route('serviceDetails') }}" class="read-more">Case Details <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Case Study">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-tags"></i> <a href="#">Keyword</a></li>
                                </ul>
                                <h5><a href="{{ route('serviceDetails') }}">Unlocking the Power of Paid Ads A Social Media Marketing</a></h5>
                                <a href="{{ route('serviceDetails') }}" class="read-more">Case Details <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Case Study">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-tags"></i> <a href="#">Link Building</a></li>
                                </ul>
                                <h5><a href="{{ route('serviceDetails') }}">Boosting Local Visibility a Client Dominated Market with SEO</a></h5>
                                <a href="{{ route('serviceDetails') }}" class="read-more">Case Details <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Case Studies Area end -->
        
        
        <!-- Testimonials Area Start -->
        <section class="testimonials-two-area rel z-1">
            <div class="container px-xl-5 bordered-x py-100" style="background-image: url(assets/images/background/cta-bg-dots.png);">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="testimonials-content-two rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-50">
                                <span class="subtitle mt-10 mb-15">Out Testimonials</span>
                                <h2>What Our Clients Say Us</h2>
                            </div>
                            <div class="testimonials-two-active">
                                <div class="testimonial-item style-three">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our see social media presence. Their strategic to approach and the attention too detail have help reach heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-three">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-three">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-three">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-dots pt-25"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-xl-end">
                        <div class="testimonials-four-image-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Testimonisls">
                            <div class="shape icon">
                                <i class="flaticon-quotation-mark"></i>
                            </div>
                            <div class="shape one">
                                <img src="{{ asset('/assets/images/shapes/testi-four1.jpg') }}" alt="Shape">
                            </div>
                            <div class="shape two">
                                <img src="{{ asset('/assets/images/shapes/testi-four2.jpg') }}" alt="Shape">
                            </div>
                            <div class="shape three">
                                <img src="{{ asset('/assets/images/shapes/testi-four3.jpg') }}" alt="Shape">
                            </div>
                            <div class="shape four">
                                <img src="{{ asset('/assets/images/shapes/testi-four4.jpg') }}" alt="Shape">
                            </div>
                            <div class="abs-headings">
                                <h6 class="shape five bgc-primary text-white">10m+ Satisfied Clients</h6>
                                <h6 class="shape six bgc-green">99% Positive Reviews</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area End -->
        
        
        <!-- Working Process Area Start -->
        <section class="working-process-area bgc-black text-white rel z-1">
            <div class="container px-sm-0 bordered-x pt-100 pb-70">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Our Working Process</span>
                            <h2>How We Optimize Inside Our SEO Workflow</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center rel">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">01</span>
                            <h6>Discovery & Analysis</h6>
                            <div class="arrow">
                                <img src="{{ asset('/assets/images/shapes/arrow.png') }}" alt="Arrow">
                            </div>
                            <p>We start by understanding your business target audience conducting comprehensive</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">02</span>
                            <h6>Website Optimization</h6>
                            <div class="arrow">
                                <img src="{{ asset('/assets/images/shapes/arrow.png') }}" alt="Arrow">
                            </div>
                            <p>Optimize the website for both on-page and technical SEO ensuring responsiveness,</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">03</span>
                            <h6>Content Strategy</h6>
                            <div class="arrow">
                                <img src="{{ asset('/assets/images/shapes/arrow.png') }}" alt="Arrow">
                            </div>
                            <p>Develop and implement the content strategy that focuses keyword-optimized content.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">04</span>
                            <h6>Discovery & Analysis</h6>
                            <div class="arrow">
                                <img src="{{ asset('/assets/images/shapes/arrow.png') }}" alt="Arrow">
                            </div>
                            <p>We start by understanding your business target audience conducting comprehensive</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Working Process Area End -->
        
        
        <!-- FAQ Area Start -->
        <section class="faq-area bgc-black text-white rel z-1">
            <div class="container bordered-x pb-90">
                <div class="row mx-xl-4 justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">FAQs</span>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        
                        <div class="accordion-one" id="faq-accordion">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                       1. What is SEO, and why is it important?
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        2. How long does it take to see results from SEO?
                                    </button>
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>SEO is a long-term strategy, and results can typically take 3 to 6 months to become noticeable. The timeline can vary depending on factors such as the competitiveness of the industry, the current state of your website, and the effectiveness of the SEO strategy implemented.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        3. What services does your SEO agency offer?
                                    </button>
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        4. How do you measure the success of an SEO campaign?
                                    </button>
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        5. Can you guarantee top rankings on Google?
                                    </button>
                                </h6>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/faq1.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/faq2.png') }}" alt="Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/faq3.png') }}" alt="Shape">
                </div>
                <div class="shape four">
                    <img src="{{ asset('/assets/images/shapes/faq4.png') }}" alt="Shape">
                </div>
                <div class="shape five">
                    <img src="{{ asset('/assets/images/shapes/faq5.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- FAQ Area End -->
        
        
        <!-- Blog Area start -->
        <section class="blog-area rel z-1">
            <div class="container bordered-x pt-110 pb-70 px-sm-0">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mb-15">Blog & News</span>
                            <h2>Ultimate Guide to Boosting Engagement on Social Media</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="#">SEO Services</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">How to Craft they Winning Socials Media Strategy from Scratch</a></h5>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two hover-secondary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="#">Social Media Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Unlocking the Power of Paid Ads A Social Media Marketing</a></h5>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two hover-secondary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">How to Improve Your Website's Loading Speed Performance</a></h5>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two hover-secondary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
        
        
        <!-- CTA Area Start -->
        <section class="cta-two-area rel z-1">
            <div class="container px-sm-0 bordered-x pb-100">
                <div class="cta-two-wrap bgc-primary br-10" style="background-image: url(assets/images/background/hero-bg-dots.png);">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cta-content-two rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <div class="section-title text-white mb-25">
                                    <span class="subtitle mt-10 mb-15">Let's Boost Website</span>
                                    <h2>We Are Ready to Boost Your Website & Grow Sales</h2>
                                    <p>Join Us to get more updates and tips</p>
                                </div>
                                <form class="newsletter-form" action="#">
                                    <label for="news-email"><i class="fas fa-envelope"></i></label>
                                    <input id="news-email" type="email" placeholder="Email Address" required>
                                    <button type="submit" class="theme-btn bgc-secondary hover-secondary" data-hover="Subscribe">
                                        <span>Subscribe</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 text-xl-end">
                            <div class="cta-two-image-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=600" alt="CTA">
                                <div class="shape logo">
                                    <img src="{{ asset('/assets/images/logos/logo-two-white.png') }}" alt="Logo">
                                </div>
                                <div class="shape one">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="shape two">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="shape three">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <div class="shape four">
                                    <i class="fas fa-rocket-launch"></i>
                                </div>
                                <div class="abs-headings">
                                    <h6 class="shape five bgc-primary text-white">10m+ Satisfied Clients</h6>
                                    <h6 class="shape six bgc-green">99% Positive Reviews</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area End -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerThree')
    <!-- footer area end -->
@endsection
