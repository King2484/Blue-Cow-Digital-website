@extends('frontend.layouts.app')
@section('title', 'Web Design Service')
@section('meta_description', 'Blue Cow Digital creates custom websites with SEO and marketing included. Complete solution for growing your business online.')
@section('meta_keywords', 'web design Southport, bespoke website design, website and SEO package, complete digital solution')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Complete Package</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Complete Package</li>
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
                    <h2>Everything You Need to Succeed Online — One Complete Package</h2>
                </div>
                <p>Growing a business online takes more than just a website. You need professional design, search visibility, engaging content and ongoing marketing strategy. That's why we created one complete package that covers everything. For £979 per month (50% off the first 3 months), you get a custom website, full SEO optimisation, social media content, blog posts and monthly reporting — all from one team that knows your business inside out.</p>
                <div class="image my-55">
                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Blue Cow Digital — Complete Website and Marketing Package">
                </div>
                <h3>What You Get in the Package</h3>
                <p>This is everything you need to build a professional online presence and generate more customer enquiries. Nothing is left out, and there are no surprise additional costs.</p>
                <ul class="list-style-one mt-25 mb-35">
                    <li>Fully custom, bespoke website design and development</li>
                    <li>Mobile-responsive and optimised for all devices</li>
                    <li>Fast page speeds and Core Web Vitals compliance</li>
                    <li>Complete SEO: technical, on-page, and local search optimisation</li>
                    <li>Professional social media content twice per week</li>
                    <li>Regular blog posts optimised for search</li>
                    <li>Monthly reporting and marketing strategy reviews</li>
                    <li>Google Analytics and Search Console setup and monitoring</li>
                    <li>Content management system (CMS) with training</li>
                </ul>
                <p>Every element is designed to work together: your website attracts visitors, SEO gets you found on Google, content keeps your audience engaged, and monthly reporting shows you what's working. One team, one strategy, real results.</p>
                <br>
                <h3>The Website Build</h3>
                <p>Your website is the foundation of your online success. It's often the first impression a potential customer gets of your business, and first impressions count. We take the time to understand your brand, your goals and your audience before we start building.</p>
                <ul class="list-style-one mt-25 mb-35">
                    <li>Fully custom design created specifically for your business</li>
                    <li>No templates — every site is built from scratch</li>
                    <li>Fully responsive and optimised for mobile, tablet and desktop</li>
                    <li>Fast-loading with excellent performance across all metrics</li>
                    <li>Easy-to-use content management system (CMS) included</li>
                    <li>SEO-friendly architecture and code</li>
                    <li>Conversion-focused design and user experience</li>
                    <li>Clear calls-to-action and intuitive navigation</li>
                </ul>
                <br>
                <h3>The SEO Component</h3>
                <p>A beautiful website won't help if nobody can find it. Our complete SEO service ensures your business gets found on Google by customers actively searching for what you offer.</p>
                <ul class="list-style-one mt-25 mb-35">
                    <li>Technical SEO audit and optimisation</li>
                    <li>On-page SEO and keyword optimisation</li>
                    <li>Local SEO (critical for local businesses)</li>
                    <li>Ongoing monitoring and optimisation</li>
                    <li>Link building and authority development</li>
                    <li>Google My Business setup and optimisation</li>
                    <li>Monthly reporting on rankings and progress</li>
                </ul>
                <br>
                <h3>Content &amp; Social Media</h3>
                <p>Staying visible online means consistently sharing valuable content. We create and manage professional content across your channels to keep your audience engaged.</p>
                <ul class="list-style-one mt-25 mb-35">
                    <li>Professional blog posts written for your audience and Google</li>
                    <li>Social media content posted twice per week</li>
                    <li>Engagement and community management</li>
                    <li>Strategic content calendar aligned with your goals</li>
                    <li>All content optimised for search and engagement</li>
                </ul>
                <br>
                <h3>Monthly Reporting &amp; Strategy</h3>
                <p>You need to know what's working and what's not. Every month we provide clear reporting and strategy recommendations.</p>
                <ul class="list-style-one mt-25 mb-35">
                    <li>Website traffic and visitor behaviour</li>
                    <li>Search rankings and visibility progress</li>
                    <li>Enquiries and lead generation metrics</li>
                    <li>Social media performance and engagement</li>
                    <li>What we did, what worked, and what's next</li>
                    <li>Strategic recommendations for continued growth</li>
                </ul>
                <br>
                <h3>The Process</h3>
                <p>We follow a clear, structured approach that keeps you informed and involved at every stage.</p>
                <div class="row text-center justify-content-center pt-25 pb-15 rel">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">01</span>
                            <h6>Discovery</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">02</span>
                            <h6>Planning</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">03</span>
                            <h6>Design &amp; Development</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">04</span>
                            <h6>Launch &amp; Grow</h6>
                        </div>
                    </div>
                </div>
                <p>Once your site is live, our relationship doesn't end. We provide ongoing support, maintenance, optimisation and new content to ensure your website continues to grow with your business.</p>
                <br>
                <h3>Why Choose This Package?</h3>
                <p>You get everything you need to succeed online, without juggling multiple agencies or services. One clear price, one team, one point of contact.</p>
                <ul class="list-style-one mt-25">
                    <li>Complete solution — website, SEO, content and marketing all included</li>
                    <li>Transparent pricing at £979 per month (50% off first 3 months)</li>
                    <li>Dedicated account manager who knows your business</li>
                    <li>No hidden fees or surprise costs</li>
                    <li>Built for results from day one</li>
                    <li>Proven track record with clients across multiple sectors</li>
                    <li>UK-based team based in Southport, Merseyside</li>
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
                            <h2>Ready to Get Started?</h2>
                            <p>Claim your offer and start growing your business online today.</p>
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
