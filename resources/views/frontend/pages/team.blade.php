@extends('frontend.layouts.app')
@section('title', 'Our Team')
@section('meta_description', 'Meet the talented team at Blue Cow Digital — passionate designers, developers, and marketers dedicated to helping your business grow online.')
@section('meta_keywords', 'Blue Cow Digital team, web design team Southport, digital marketing professionals')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Our Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Our Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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
        
        
        <!-- About Area start -->
        <section class="team-page-about-area rel z-1">
            <div class="container px-sm-0 bordered-x pt-130 rpt-100">
                <div class="row gap-50 align-items-center">
                    <div class="col-lg-6 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-page-about-content me-xl-5">
                            <div class="section-title mb-35">
                                <h2>The Creative Minds Behind Blue Cow Digital</h2>
                            </div>
                            <p>At Blue Cow Digital, our team is our greatest asset. We're a passionate group of designers, developers, SEO specialists and marketers based in Southport, united by a shared goal: helping businesses thrive online.</p>
                            <ul class="list-style-two mt-30">
                                <li>Web Design & Development</li>
                                <li>SEO & Digital Marketing</li>
                                <li>Social Media Strategy</li>
                                <li>Branding & Visual Identity</li>
                            </ul>
                            <a href="#team" class="theme-btn hover-primary mt-35" data-hover="Meet Our Team">
                                <span>Meet Our Team</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img class="br-5" src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blue Cow Digital team collaboration">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        

        <!-- Team Area start -->
        <section id="team" class="team-area-two">
            <div class="container bordered-x px-sm-0 pt-130 rpt-100">
               <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Meet Our Team</span>
                            <h2>The People Who Make It Happen</h2>
                        </div>
                    </div>
                </div>
               
                <div class="row justify-content-center">
                    <!-- James Brayshaw - CEO -->
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('assets/images/bcd-team/james-brayshaw-ceo.png') }}" alt="James Brayshaw - CEO">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">James Brayshaw</a></h5>
                                <span class="designation">CEO</span>
                            </div>
                        </div>
                    </div>
                    <!-- Joe McArdle - Key Account Manager -->
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('assets/images/bcd-team/joe-mcardle-key-account-manager.png') }}" alt="Joe McArdle - Key Account Manager">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Joe McArdle</a></h5>
                                <span class="designation">Key Account Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- Katie Murray - Operations Director -->
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('assets/images/bcd-team/katie-murray-operations-director.png') }}" alt="Katie Murray - Operations Director">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Katie Murray</a></h5>
                                <span class="designation">Operations Director</span>
                            </div>
                        </div>
                    </div>
                    <!-- Matthew Connelly - Marketing Manager -->
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('assets/images/bcd-team/matthew-connelly-marketing-manager.png') }}" alt="Matthew Connelly - Marketing Manager">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Matthew Connelly</a></h5>
                                <span class="designation">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- Amy Holland - Customer Experience & Operations Manager -->
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="200">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('assets/images/bcd-team/amy-holland-customer-experience-and-operations-manager.png') }}" alt="Amy Holland">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Amy Holland</a></h5>
                                <span class="designation">Customer Experience & Operations Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- Daniel Ushie - Web Developer -->
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="250">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('assets/images/bcd-team/daniel-ushie-web-developer.png') }}" alt="Daniel Ushie - Web Developer">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Daniel Ushie</a></h5>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <!-- Kate Brayshaw - Marketing Assistant -->
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="300">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('assets/images/bcd-team/kate-brayshaw-marketing-assistant.png') }}" alt="Kate Brayshaw - Marketing Assistant">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Kate Brayshaw</a></h5>
                                <span class="designation">Marketing Assistant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area end -->
        
        
        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x py-130 rpy-100 ">
                <div class="py-100 rpy-70 bgc-lighter" style="background-image: url('/assets/images/background/cta-bg-dots.png');">
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
            </div>
        </section>
        <!-- CTA Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
