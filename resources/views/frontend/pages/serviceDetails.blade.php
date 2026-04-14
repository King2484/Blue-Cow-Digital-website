@extends('frontend.layouts.app')
@section('title', 'Web Design Service')
@section('meta_description', 'Blue Cow Digital creates bespoke, mobile-friendly websites that look stunning and perform brilliantly. Discover our web design approach and process.')
@section('meta_keywords', 'web design Southport, bespoke website design, responsive web design UK, mobile-friendly websites')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Web Design</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Web Design</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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
        
        
        <!-- Services Area start -->
        <section class="service-details-area rel z-1">
            <div class="container bordered-x py-130 rpy-100 px-sm-0">
                <div class="section-title mb-50">
                    <h2>Bespoke Web Design That Works as Hard as You Do</h2>
                </div>
                <p>At Blue Cow Digital, we believe your website is your most powerful marketing asset. It's often the first impression a potential customer gets of your business — and first impressions count. That's why we take the time to understand your brand, your goals, and your audience before a single pixel is placed. Every website we create is fully bespoke, built from scratch to your exact requirements, and optimised for performance from day one.</p>
                <div class="image my-55">
                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Blue Cow Digital — Bespoke Web Design Service">
                </div>
                <h3>What We Include in Every Website</h3>
                <p>We don't cut corners. Whether you're a start-up needing your first website or an established business ready for a full rebrand, every site we build comes with a thorough discovery process, a clear strategy, and a professional finish that stands out from your competitors.</p>
                <ul class="list-style-one mt-25 mb-35">
                    <li>Fully bespoke, custom design — no templates</li>
                    <li>Mobile-responsive and optimised for all devices</li>
                    <li>Fast page load speeds and Core Web Vitals compliance</li>
                    <li>On-page SEO setup as standard</li>
                    <li>Google Analytics and Search Console integration</li>
                    <li>Content management system (CMS) for easy updates</li>
                </ul>
                <p>We combine clean, modern design with smart user experience principles to ensure your visitors not only find you, but stay, engage, and take action. From clear calls-to-action to intuitive navigation and compelling copy, every element is purposefully designed to convert browsers into buyers.</p>
                <br>
                <h3>Our Web Design Process</h3>
                <p>We follow a clear, structured process that keeps you informed and involved at every stage — from initial concept through to launch and beyond.</p>
                <div class="row text-center justify-content-center pt-25 pb-15 rel">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">01</span>
                            <h6>Discovery & Briefing</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">02</span>
                            <h6>Design & Wireframing</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">03</span>
                            <h6>Build & Development</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">04</span>
                            <h6>Launch & Optimise</h6>
                        </div>
                    </div>
                </div>
                <p>Once your site is live, our relationship doesn't end there. We offer ongoing support, maintenance, and digital marketing services to ensure your website continues to grow with your business. Our team is always on hand to answer questions, make updates, and identify new opportunities to improve your online performance.</p>
                <br>
                <h3>Why Choose Blue Cow Digital for Web Design?</h3>
                <p>We're not a faceless agency — we're a dedicated team based in Southport with a genuine passion for helping local and national businesses succeed online. When you work with us, you get a dedicated point of contact, transparent communication, and a final product you're truly proud of.</p>
                <ul class="list-style-one mt-25">
                    <li>Dedicated account manager throughout the project</li>
                    <li>Fixed-price quotes — no hidden fees</li>
                    <li>Built for SEO from the ground up</li>
                    <li>Fast turnaround without compromising quality</li>
                    <li>Ongoing support and maintenance packages available</li>
                    <li>Proven track record with clients across multiple sectors</li>
                </ul>
            </div>
        </section>
        <!-- Services Area end -->
        
        
        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x bordered-top py-130 rpy-100" style="background-image: url('/assets/images/background/cta-bg-dots.png');">
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