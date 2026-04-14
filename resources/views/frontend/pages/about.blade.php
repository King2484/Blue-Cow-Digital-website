@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('meta_description', 'Learn about Blue Cow Digital — a full-service digital agency based in Southport, Merseyside. Web design, SEO, branding and social media since 2018.')
@section('meta_keywords', 'about Blue Cow Digital, Southport digital agency, web design team, digital marketing agency UK')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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
        
        
        <!-- About Area start -->
        <section class="about-area rel z-1">
            <div class="container bordered-x pt-130 rpt-100 pb-80">
                <div class="row px-xl-5 justify-content-between align-items-center">
                    <div class="col-xl-4 col-lg-5">
                        <div class="about-circles rmb-55">
                            <div class="circle" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">Web Design</div>
                            <div class="circle mx-auto bgc-black text-white" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">SEO</div>
                            <div class="circle ms-auto bgc-primary" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">Branding</div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-content-four">
                            <div class="section-title mb-40">
                                <span class="subtitle mt-10 mb-15">About Agency</span>
                                <h2>Southport's Digital Agency — Helping Brands Grow Online with <span>Blue Cow Digital</span></h2>
                            </div>
                            <p>Founded in 2018, Blue Cow Digital is a full-service digital marketing agency based in Southport, Merseyside. We specialise in bespoke web design, search engine optimisation (SEO), social media marketing, and branding — helping businesses of all sizes build a powerful online presence.</p>
                            <ul class="list-style-one mt-30">
                                <li>Bespoke Web Design & Development</li>
                                <li>SEO & Digital Marketing</li>
                                <li>Social Media Campaigns</li>
                                <li>Branding & Visual Identity</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container about-counter rel bordered-x px-0">
                <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Blue Cow Digital team meeting">
                <div class="counter-wrap m-0 br-10" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50" style="background-image: url(assets/images/background/counter-bg-with-dots.png);">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="25">0</span>
                                <span class="counter-title">Projects Delivered</span>
                                <div class="text">Websites, brands & campaigns launched for clients across the UK.</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="10">0</span>
                                <span class="counter-title">Happy Clients</span>
                                <div class="text">Businesses that trust Blue Cow Digital to grow their online presence.</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text plus" data-speed="3000" data-stop="7">0</span>
                                <span class="counter-title">Years Of Experience</span>
                                <div class="text">Delivering award-winning digital solutions since 2018.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-us-area rel z-1">
            <div class="container bordered-x py-130 rpy-100">
                <div class="row mx-xl-1 justify-content-between">
                    <div class="col-lg-6 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-45">
                            <span class="subtitle mt-10 mb-15">Why Choose Us?</span>
                            <h2>Digital Solutions Tailored to Your Business Goals</h2>
                        </div>
                        <img class="br-5" src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blue Cow Digital team collaborating on digital strategy">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-tools"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Experienced & Passionate Team</a></h6>
                                <p>Our team brings years of expertise in web design, SEO, and digital marketing — staying ahead of every trend so you don't have to.</p>
                            </div>
                        </div>
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-anchor"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Tailored to Your Business</a></h6>
                                <p>We don't do one-size-fits-all. Every strategy, design, and campaign is built specifically around your goals, audience, and budget.</p>
                            </div>
                        </div>
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-comments"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Honest & Open Communication</a></h6>
                                <p>We keep you informed at every stage. No jargon, no hidden surprises — just clear, transparent progress and real results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- Team Area start -->
        <section class="team-area-two bgc-lighter">
            <div class="container bordered-x pt-130 rpt-100 pb-100 rpb-70 px-sm-0">
               <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Meet Our Team</span>
                            <h2>The People Behind Blue Cow Digital</h2>
                        </div>
                    </div>
                </div>
               
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Joseph McArdle</a></h5>
                                <span class="designation">Co-Founder & Creative Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Matt Barooah</a></h5>
                                <span class="designation">Co-Founder & SEO Strategist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Sarah Thompson</a></h5>
                                <span class="designation">Lead Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Emily Clarke</a></h5>
                                <span class="designation">Brand & Social Media Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area end -->
        
        
        <!-- Testimonials Area Start -->
        <section class="testimonials-two-area rel z-1">
            <div class="container px-0 bordered-x pt-130 rpt-100 pb-170 rpb-140">
                <div class="testimonials-and-clients bg-white br-10 bordered">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="testimonials-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <div class="section-title mb-30">
                                    <span class="subtitle mt-10 mb-15">Our Testimonials</span>
                                    <h2>What Our Clients Say About Blue Cow Digital</h2>
                                </div>
                                <p>We're proud of the results we deliver and even prouder of the relationships we build along the way.</p>
                                <div class="testimonial-dots mt-45"></div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testimonials-two-active" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><span style="color:#f5a623;font-size:18px;letter-spacing:2px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    </div>
                                    <div class="text">"Blue Cow Digital delivered a first class service. They didn't impose their ideas but made valid suggestions, resulting in a website that has really helped improve our brand awareness."</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Client"></div>
                                        <h6>James Whitfield</h6>
                                        <span class="designation">/Managing Director</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><span style="color:#f5a623;font-size:18px;letter-spacing:2px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    </div>
                                    <div class="text">"The team at Blue Cow Digital delivered our project on time and exactly what I wanted. Our website now has much needed structure and credibility."</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Client"></div>
                                        <h6>Claire Houghton</h6>
                                        <span class="designation">/Business Owner</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><span style="color:#f5a623;font-size:18px;letter-spacing:2px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    </div>
                                    <div class="text">"Working with Blue Cow Digital was a great experience. They understood our vision from the start and delivered a stunning, high-performing website well within budget."</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Client"></div>
                                        <h6>David Roscoe</h6>
                                        <span class="designation">/CEO, Tech Startup</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><span style="color:#f5a623;font-size:18px;letter-spacing:2px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    </div>
                                    <div class="text">"The SEO work Blue Cow Digital did for our local business completely transformed our search rankings. We're now getting more leads online than ever before."</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Client"></div>
                                        <h6>Rachel Simmons</h6>
                                        <span class="designation">/Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-45 mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Sectors We Work With</h6>
                    </div>
                    <div class="client-logo-active" style="display:flex;flex-wrap:wrap;justify-content:center;gap:20px 40px;align-items:center;">
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Retail</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Hospitality</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Professional Services</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Health &amp; Wellness</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Construction</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">eCommerce</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area End -->
         
         
        <!-- Blog Area start -->
        <section class="blog-area rel z-1">
            <div class="container bordered-x pb-100 rpb-70 px-sm-0">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Blog & News</span>
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
                                    <li><a href="#">Video Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">How to Craft a Winning Social Media Strategy from Scratch</a></h5>
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
                                    <li><a href="#">Research & Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Unlocking the Power of Paid Ads: A Social Media Marketing Guide</a></h5>
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
                                    <li><a href="#">SEO Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Boosting Local Visibility in a Competitive Market with SEO</a></h5>
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

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
