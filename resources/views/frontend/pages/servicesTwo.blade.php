@extends('frontend.layouts.app')
@section('title', 'Our Services — Blue Cow Digital')
@section('meta_description', 'Blue Cow Digital offers a complete website design and digital marketing package for businesses across the UK.')
@section('meta_keywords', 'web design services UK, SEO agency Southport, digital marketing package, complete website service')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Our Package</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Our Package</li>
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
                            <span class="subtitle mt-10 mb-15">Why Work With Us</span>
                            <h2>One Package. Complete Solution. Real Results.</h2>
                        </div>
                        <p>Stop juggling different agencies and incomplete services. Get everything you need in one complete package: a professional website, SEO optimisation, content creation and ongoing marketing strategy. You get one team, one point of contact, and clear monthly reporting on your progress.</p>
                        <br>
                        <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blue Cow Digital team at work">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="why-choose-services">
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-curve"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Custom, Modern Websites</a></h5>
                                    <p>Every website we build is fully responsive and optimised for all devices. Fast loading, easy to navigate, and designed to convert visitors into customers.</p>
                                </div>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-leadership"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Your Dedicated Point of Contact</a></h5>
                                    <p>You'll have one team member who knows your project inside out, keeps you informed and is always available to answer questions or make updates.</p>
                                </div>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-satisfaction"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Measurable Results You Can Track</a></h5>
                                    <p>Monthly reports show you what's working: more traffic, more enquiries, better search rankings. We track everything and continuously optimise your results.</p>
                                </div>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon"><i class="flaticon-networking"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('serviceDetails') }}">Complete Digital Management</a></h5>
                                    <p>Website, SEO, social media content, blog posts and marketing strategy — all handled in one place by one team that knows your business inside out.</p>
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
                            <span class="subtitle mt-10 mb-15">The Process</span>
                            <h2>How We Build Your Online Success</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center rel">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">01</span>
                            <h6>Discovery</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>We understand your business, goals, target audience, and what makes you different from your competitors.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">02</span>
                            <h6>Planning</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>We develop a clear site structure, content strategy and SEO roadmap to ensure your website attracts the right customers.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">03</span>
                            <h6>Design &amp; Build</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>Our designers and developers create a beautiful, fast website with SEO optimisation built in from the start.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two">
                            <span class="number">04</span>
                            <h6>Launch &amp; Optimise</h6>
                            <div class="arrow">
                                <img src="assets/images/shapes/arrow2.png" alt="Arrow">
                            </div>
                            <p>We launch your site and immediately begin content marketing, social media and ongoing SEO optimisation.</p>
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
                            <span class="subtitle mt-10 mb-15">What's Included</span>
                            <h2>Your Complete Package</h2>
                        </div>
                        <p>For £979 per month (50% off the first 3 months), you get everything you need to grow your business online. No hidden costs. One clear price. One complete solution.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-seo"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Complete Website Design</a></h4>
                            <p>A fully custom, bespoke website built from scratch for your business. Mobile-responsive, fast-loading, easy to update, and designed to convert visitors into customers. Includes content management system training.</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-keywords"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Technical &amp; Local SEO</a></h4>
                            <p>Complete SEO optimisation to help your business get found on Google. Includes technical fixes, on-page optimisation, local search setup and ongoing improvement.</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-search-engine"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Social Media Content</a></h4>
                            <p>Professional social media content posted twice per week across your platforms. Engaging, on-brand posts that build your following and keep customers interested in your business.</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-link-building"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Blog Posts &amp; Content</a></h4>
                            <p>Regular blog posts that attract customers through search and establish you as an authority in your industry. SEO-optimised content that drives real results.</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
                            <div class="bg"><img src="assets/images/shapes/service-circle.png" alt="Circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item">
                            <div class="icon"><i class="flaticon-www"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Monthly Reporting</a></h4>
                            <p>Clear monthly reports showing your progress: website traffic, enquiries, search rankings and what we're doing next. You'll always know exactly how your investment is performing.</p>
                            <a href="{{ route('serviceDetails') }}" class="read-more">Learn More <i class="far fa-arrow-right"></i></a>
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
                            <h2>Ready to Grow Your Business Online?</h2>
                            <p>Get started with our complete website and marketing package today. Claim the 50% discount on your first 3 months.</p>
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
