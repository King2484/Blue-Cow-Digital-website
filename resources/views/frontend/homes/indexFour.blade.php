@extends('frontend.layouts.app')
@section('title', 'Web Design & SEO Agency')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style-pink.css') }}">
@endsection
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerFour')
    <!-- header area end -->

    <!-- Hero Area Start -->
        <section class="hero-area-three bgc-lighter-green rel z-2 pt-95 rpt-70 pb-130 rpb-100">
            <div class="container container-1290">
                <div class="row align-items-center">
                    <div class="col-xl-10">
                        <div class="hero-content style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h1>Transform Your Brand with Powerful Video Marketing</h1>
                            <p>Engage, Inspire, and Convert with Sayan's Expert Video Solutions</p>
                            <a href="{{ route('projectGrid') }}" class="theme-btn hover-secondary color-white mt-35 rmt-20" data-hover="Get Started Now">
                                <span>Get Started Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Video Area Start -->
        <div class="video-area bgc-lighter-green bgp-bottom rel z-1" style="background-image: url(assets/images/background/video-bg-dots.png);">
            <div class="container container-1290">
                <div class="video-wrap rel" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Video">
                    <a href="https://www.youtube.com/watch?v=TfU0qjuZkJ4" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <span class="marquee-wrap style-two py-20 rpy-10 bgc-secondary">
                <span class="marquee-inner left">
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Video Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SEO Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SMM Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Digital Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Influencer Marketing</span>
               </span>
                <span class="marquee-inner left">
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Video Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SEO Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SMM Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Digital Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Influencer Marketing</span>
               </span>
                <span class="marquee-inner left">
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Video Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SEO Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SMM Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Digital Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Influencer Marketing</span>
               </span>
            </span>
        </div>
        <!-- Video Area End -->
        
        
        <!-- Client Logo Area start -->
        <div class="client-logo-area bgc-lighter-green pt-95 pb-85" style="background-image: url(assets/images/background/video-bg-dots.png);">
            <div class="container container-1290">
                <div class="client-logo-wrap">
                    <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Sectors We Work With</h6>
                    </div>
                    <div class="client-logo-active" style="display:flex;flex-wrap:wrap;justify-content:center;gap:20px 40px;align-items:center;">
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Retail</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Hospitality</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Professional Services</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Health &amp; Wellness</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Construction</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">eCommerce</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Logo Area end -->
        
        
        <!-- About Us Area start -->
        <section class="about-us-area py-100 rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-three-content rmb-55">
                            <div class="section-title mb-30">
                                <span class="subtitle color-primary mt-10 mb-15">About Agency</span>
                                <h2>Welcome Blue Cow Digital Video Marketing Agency to grow your business</h2>
                            </div>
                            <p>Understanding your marketing videos' performance can be like looking for  a needle in a haystack. Vidyard's online video marketing platform is a  magnet for your needle.</p>
                            <a href="{{ route('about') }}" class="theme-btn hover-secondary color-white mt-20" data-hover="Learn More Us">
                                <span>Learn More Us</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-three-image-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=600" alt="About">
                            </div>
                            <div class="image mt-30">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=400" alt="About">
                            </div>
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/logo-two-white.png') }}" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area end -->
        
        
        <!-- Our Service Area start -->
        <section class="our-service-area bordered-top pt-100 pb-70 rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-center pb-30">
                    <div class="col-xl-6 col-lg-7" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title text-center mb-25">
                            <span class="subtitle mt-10 mb-15">Our Services</span>
                            <h2>Explore Popular Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-item style-four">
                            <div class="icon"><i class="flaticon-film-camera"></i></div>
                            <div class="content">
                                <h4><a href="{{ route('serviceDetails') }}">Video Production</a></h4>
                                <p>Video production is the process of creating visually engaging and impactful video content communicates brand's message</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="service-item style-four">
                            <div class="icon"><i class="flaticon-video-marketing"></i></div>
                            <div class="content">
                                <h4><a href="{{ route('serviceDetails') }}">Video Marketing Strategy</a></h4>
                                <p>A Video Marketing Strategy is a carefully crafted plan leverages video content to achieve specific business goals, such</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <div class="service-item style-four">
                            <div class="icon"><i class="flaticon-animate"></i></div>
                            <div class="content">
                                <h4><a href="{{ route('serviceDetails') }}">Animation and Motion Graphics</a></h4>
                                <p>Animation and motion graphics are dynamic visual elements that bring static designs to life, making them more engaging</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                        <div class="service-item style-four">
                            <div class="icon"><i class="flaticon-live-streaming"></i></div>
                            <div class="content">
                                <h4><a href="{{ route('serviceDetails') }}">Live Streaming Services</a></h4>
                                <p>Live streaming services enable businesses individuals broadcast events, webinars, product launches, or other content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Service Area end -->
        
        
        <!-- Case Studies Area Start -->
        <section class="case-studies-area bgc-lighter-green py-100">
            <div class="container container-1290">
                <div class="row justify-content-between align-items-end pb-25">
                    <div class="col-lg-8" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-25">
                            <h2>Popular Case Studies</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <a href="{{ route('services') }}" class="theme-btn style-two mb-25" data-hover="View All Cases">
                            <span>View All Cases</span>
                        </a>
                    </div>
                </div>
                <div class="case-studies-wrap">
                    <div class="case-study-item active" style="background-image: url(assets/images/case-studies/case-study1.jpg);">
                       <a href="https://www.youtube.com/watch?v=TfU0qjuZkJ4" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                        <div class="content">
                            <h4>Generate Demand with Video</h4>
                            <p>This approach taps into the growing preference visual content by creating engaging, informative, and often entertaining</p>
                        </div>
                    </div>
                    <div class="case-study-item" style="background-image: url(assets/images/case-studies/case-study2.jpg);">
                       <a href="https://www.youtube.com/watch?v=TfU0qjuZkJ4" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                        <div class="content">
                            <h4>Generate Demand with Video</h4>
                            <p>This approach taps into the growing preference visual content by creating engaging, informative, and often entertaining</p>
                        </div>
                    </div>
                    <div class="case-study-item" style="background-image: url(assets/images/case-studies/case-study3.jpg);">
                       <a href="https://www.youtube.com/watch?v=TfU0qjuZkJ4" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                        <div class="content">
                            <h4>Generate Demand with Video</h4>
                            <p>This approach taps into the growing preference visual content by creating engaging, informative, and often entertaining</p>
                        </div>
                    </div>
                    <div class="case-study-item" style="background-image: url(assets/images/case-studies/case-study4.jpg);">
                       <a href="https://www.youtube.com/watch?v=TfU0qjuZkJ4" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                        <div class="content">
                            <h4>Generate Demand with Video</h4>
                            <p>This approach taps into the growing preference visual content by creating engaging, informative, and often entertaining</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Case Studies Area End -->
        
        
        <!-- Testimonials Area Start -->
        <section class="testimonials-three-area text-center py-100 rel z-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 order-xl-1">
                        <div class="testimonials-three-wrap rmb-35" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-50">
                                <span class="subtitle color-primary mt-10 mb-15">Testimonials</span>
                                <h2>What Our Clients Say</h2>
                            </div>
                            <div class="testimonials-three-active">
                                <div class="testimonial-item style-four">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have help reach heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-four">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have help reach heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-four">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have help reach heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-four">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have help reach heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 order-xl-0">
                        <div class="testi-small-images mt-20" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                            <div class="image">
                                <img src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 order-xl-2">
                        <div class="testi-small-images mt-20" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                            <div class="image">
                                <img src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Testimonials">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area End -->
        
        
        <!-- Headline Area Start -->
        <div class="headline-area rel z-1">
            <span class="marquee-wrap style-two py-20 rpy-10 bgc-secondary">
                <span class="marquee-inner left">
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Video Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SEO Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SMM Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Digital Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Influencer Marketing</span>
               </span>
                <span class="marquee-inner left">
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Video Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SEO Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SMM Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Digital Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Influencer Marketing</span>
               </span>
                <span class="marquee-inner left">
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Video Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SEO Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>SMM Marketing</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Digital Marketing Agency</span>
                    <span class="marquee-item"><i class="flaticon-asterisk"></i>Influencer Marketing</span>
               </span>
            </span>
        </div>
        <!-- Headline Area End -->
        
        
        <!-- Working Process Area Start -->
        <section class="working-process-area py-100">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle color-primary mt-10 mb-15">Our Working Process</span>
                            <h2>Step-by-Step The Video Marketing Journey</h2>
                        </div>
                    </div>
                </div>
                <div class="working-step-wrap">
                    <div class="work-step-item hover-item">
                        <span class="number">01</span>
                        <h6>Consultation</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">02</span>
                        <h6>Planning</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">03</span>
                        <h6>Production</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">04</span>
                        <h6>Distribution</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">05</span>
                        <h6>Optimization</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Working Process Area End -->
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-us-area bgc-black rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 text-white">
                        <div class="why-choose-left py-100 d-flex flex-column h-100 align-items-start">
                            <div class="section-title mb-45">
                                <span class="subtitle mt-10 mb-15">Why Choose Us?</span>
                                <h2>Why People Choose Our Blue Cow Digital Service</h2>
                            </div>
                            <div class="text mt-auto">
                                Video marketing has become a powerful tool for businesses to connect with their audience to more engaging and memorable way the visual and auditory elements of video, companies
                            </div>
                            <a href="{{ route('about') }}" class="theme-btn bgc-secondary mt-40" data-hover="Learn More Us">
                                <span>Learn More Us</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="why-choose-right py-100">
                            <div class="service-item style-five">
                                <h5><i class="far fa-tools"></i> <a href="{{ route('serviceDetails') }}">Expertise and Experience</a></h5>
                                <p>Expertise and Experience critical components distinguish professional agency specialized knowledge.</p>
                            </div>
                            <div class="service-item style-five">
                                <h5><i class="far fa-cog"></i> <a href="{{ route('serviceDetails') }}">Customized Solutions</a></h5>
                                <p>Expertise and Experience critical components distinguish professional agency specialized knowledge.</p>
                            </div>
                            <div class="service-item style-five">
                                <h5><i class="far fa-gift"></i> <a href="{{ route('serviceDetails') }}">Support & Proven Results</a></h5>
                                <p>Expertise and Experience critical components distinguish professional agency specialized knowledge.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- Blog Area start -->
        <section class="blog-area pt-100 pb-70 rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle color-primary mt-10 mb-15">Blog & News</span>
                            <h2>Explore Latest Insights</h2>
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
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
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
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
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
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
        
        
        <!-- Contact area start -->
        <section class="contact-area pb-100">
            <div class="container container-1290">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-info-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-30">
                                <h2>Ready To Take Your SEO to the Next Level?</h2>
                                <p>Contact us today to schedule a consultation or learn more about our services</p>
                            </div>
                            
                            <div class="contact-info-two-item">
                                <div class="icon"><i class="flaticon-world-map"></i></div>
                                <div class="text">
                                    Main Location
                                    <span class="h6">57 Main Street, Melbourne, Australia</span>
                                </div>
                            </div>
                            <div class="contact-info-two-item">
                                <div class="icon"><i class="flaticon-email"></i></div>
                                <div class="text">
                                    Email Address
                                    <span class="h6"><a href="mailto:support@gmail.com">support@gmail.com</a></span>
                                </div>
                            </div>
                            <div class="contact-info-two-item">
                                <div class="icon"><i class="flaticon-call"></i></div>
                                <div class="text">
                                    Need Helps
                                    <span class="h6"><a href="callto:+000(123)45688">+000 (123) 456 88</a></span>
                                </div>
                            </div>
                            
                            <hr class="my-35">
                            
                            <div class="social-style-two mt-15">
                                <h6>Follow Us</h6>
                                <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-youtube"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="contact-form style-two z-1 rel" name="contactForm" action="#" method="post" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <h3>Get In Touch</h3>
                            <p>Contact us today to schedule consultation to expert team</p>
                            <div class="row mt-30">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" value="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone No" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0">
                                        <ul class="radio-filter mb-25">
                                            <li>
                                                <input class="form-check-input" type="radio" checked="" name="ByActivities" id="activity1">
                                                <label for="activity1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="theme-btn bgc-secondary" data-hover="Send Us  Message">
                                            <span>Send Us  Message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerFour')
    <!-- footer area end -->
@endsection
