@extends('frontend.layouts.app')
@section('title', 'Web Design & SEO Agency')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style-red.css') }}">
@endsection
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerFive')
    <!-- header area end -->

    <!-- Hero Area Start -->
        <section class="hero-area-five bgp-bottom pt-220 rpt-145 pb-250 rpb-150 rel z-1" style="background-image: url(assets/images/background/hero-five-bg.png);">
            <div class="container container-1290">
                <div class="hero-content-five text-white mb-135 rmb-80" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h1>Professional<br> Web Development</h1>
                    <div class="content mb-50">
                        <span class="h1">Agency</span>
                        <p>Web design is a critical aspect of creating in effective online presence for any business the individual well-designed websit</p>
                        <a href="{{ route('projectList') }}" class="theme-btn color-white" data-hover="Explore Our Projects">
                            <span>Explore Our Projects</span>
                        </a>
                    </div>

                </div>
                
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-five-clients text-white rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <h5>100k+ Trusted Clients</h5>
                            <div class="trusted-clients mt-25 mb-35">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="50" src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200" src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250" src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300" src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                            </div>
                            <div class="client-logos" style="display:flex;gap:16px;align-items:center;flex-wrap:wrap;">
                                <span data-aos="fade-right" data-aos-duration="1500" data-aos-delay="50" style="padding:8px 18px;border:1px solid rgba(0,0,0,0.15);border-radius:4px;font-weight:600;font-size:12px;letter-spacing:1px;text-transform:uppercase;">Retail</span>
                                <span data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" style="padding:8px 18px;border:1px solid rgba(0,0,0,0.15);border-radius:4px;font-weight:600;font-size:12px;letter-spacing:1px;text-transform:uppercase;">Hospitality</span>
                                <span data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250" style="padding:8px 18px;border:1px solid rgba(0,0,0,0.15);border-radius:4px;font-weight:600;font-size:12px;letter-spacing:1px;text-transform:uppercase;">eCommerce</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-wrap rel" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Video">
                            <a href="https://www.youtube.com/watch?v=TfU0qjuZkJ4" class="mfp-iframe color-primary video-play"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Services Area start -->
        <section class="services-area-five radius-shape-top bg-white pt-130 rpt-100 pb-70 rel z-2">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-xl-10 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-50">
                            <span class="subtitle color-primary mb-15">Wht We Doing</span>
                            <h2>Responsive Websites for Seamless User Experience, Fast and Secure Web Hosting Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="service-two-item style-three" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon"><i class="flaticon-timing"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Fast Loading Speeds</a></h4>
                        </div>
                        <div class="service-two-item style-three" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon"><i class="flaticon-responsive"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Responsive & Fast Design</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-two-item style-three height-100" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon"><i class="flaticon-setting"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Custom Web Design and Development</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-up">
                        <div class="service-two-item style-three" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon"><i class="flaticon-online-shopping"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">E-commerce Solutions</a></h4>
                        </div>
                        <div class="service-two-item style-three" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon"><i class="flaticon-tool"></i></div>
                            <h4><a href="{{ route('serviceDetails') }}">Maintenance & Support</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area end -->
        
        
        <!-- About Area start -->
        <section class="about-area-five rel z-1 pb-230 rpb-150">
            <div class="container container-1290">
                <div class="row justify-content-between">
                    <div class="col-lg-3" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <span class="subtitle color-primary mb-25">Learn More Us</span>
                    </div>
                    <div class="col-xl-7 col-lg-9" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-content-five">
                            <div class="section-title mb-40 rmb-25">
                                <h2>Building Digital Experiences That Elevate Your Brand Empowering Your Online Presence with Cutting-Edge Development solutions</h2>
                            </div>
                            <p>We specialize in creating dynamic, responsive, and user-friendly websites the not only look great but also perform seamlessly across all devices our team of experienced developers</p>
                            <a href="{{ route('contact') }}" class="theme-btn color-white hover-secondary mt-25 rmt-15" data-hover="Get Started Us">
                                <span>Get Started Us</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-65">
                    <div class="col-xl-4 col-lg-6 col-md-8 mt-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-five-logo-part bgs-cover py-30 text-white p-50 br-10" style="background-image: url(assets/images/about/about-five-bg.jpg);">
                            <div class="logo pb-25 rpb-55">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/logo-footer.png') }}" alt="Logo"></a>
                            </div>
                            <h4>Next-Generation AI Tools for Smarter Business</h4>
                        </div>
                    </div>
                    <div class="col-xl-8 mt-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <div class="image">
                            <img class="br-10" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=700" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        
        
        <!-- Latest Works Area start -->
        <section class="latest-work-area radius-shape-top bgc-lighter py-130 rpy-100 rel z-2">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-xl-9 co-lg-11 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-70">
                            <span class="subtitle color-primary mt-10 mb-15">Latest Works</span>
                            <h2>We Have Work 3850+ Global Projects created by our team let's Explore our works</h2>
                        </div>
                    </div>
                </div>
                <div class="latest-work-wrap">
                    <div class="latest-work-item active" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content-wrap">
                            <div class="normal-area">
                                <span class="category-wrap">
                                    <span class="category">WordPress</span>
                                </span>
                                <span class="title h1">WordPress</span>
                            </div>
                            <div class="active-area">
                                <div class="image">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Letest Work">
                                </div>
                                <div class="content">
                                    <span class="title h2">WordPress</span>
                                    <p>Transform your static HTML website into a dynamic, feature-rich WordPress theme with our expert conversion services. Our team specializes in converting HTML templates functional</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('projectDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <div class="latest-work-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content-wrap">
                            <div class="normal-area">
                                <span class="category-wrap">
                                    <span class="category">HTML</span>
                                </span>
                                <span class="title h1">HTML</span>
                            </div>
                            <div class="active-area">
                                <div class="image">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Letest Work">
                                </div>
                                <div class="content">
                                    <span class="title h2">HTML</span>
                                    <p>Transform your static HTML website into a dynamic, feature-rich WordPress theme with our expert conversion services. Our team specializes in converting HTML templates functional</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('projectDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <div class="latest-work-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content-wrap">
                            <div class="normal-area">
                                <span class="category-wrap">
                                    <span class="category">React</span>
                                </span>
                                <span class="title h1">React</span>
                            </div>
                            <div class="active-area">
                                <div class="image">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Letest Work">
                                </div>
                                <div class="content">
                                    <span class="title h2">React</span>
                                    <p>Transform your static HTML website into a dynamic, feature-rich WordPress theme with our expert conversion services. Our team specializes in converting HTML templates functional</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('projectDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <div class="latest-work-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content-wrap">
                            <div class="normal-area">
                                <span class="category-wrap">
                                    <span class="category">Angular</span>
                                </span>
                                <span class="title h1">Angular</span>
                            </div>
                            <div class="active-area">
                                <div class="image">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Letest Work">
                                </div>
                                <div class="content">
                                    <span class="title h2">Angular</span>
                                    <p>Transform your static HTML website into a dynamic, feature-rich WordPress theme with our expert conversion services. Our team specializes in converting HTML templates functional</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('projectDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <div class="latest-work-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content-wrap">
                            <div class="normal-area">
                                <span class="category-wrap">
                                    <span class="category">Sass</span>
                                </span>
                                <span class="title h1">Sass</span>
                            </div>
                            <div class="active-area">
                                <div class="image">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Letest Work">
                                </div>
                                <div class="content">
                                    <span class="title h2">Sass</span>
                                    <p>Transform your static HTML website into a dynamic, feature-rich WordPress theme with our expert conversion services. Our team specializes in converting HTML templates functional</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('projectDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Works Area end -->
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-us-five-area rel z-1 pt-130 rpt-100 pb-80">
            <div class="container container-1290">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4 col-lg-5" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                       <div class="why-choose-us-content-five rmb-55">
                            <div class="section-title mb-50 rmb-30">
                                <span class="subtitle color-primary mt-10 mb-15">Why Choose Us</span>
                                <h2>People Why Choose Our team and work together</h2>
                            </div>
                            <hr class="mb-50 rmb-30">
                            <p>We meticulously code each theme to ensure it is responsive, SEO-friendly, and optimized for speed, providing a seamless user experience across</p>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img class="br-10" src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Why Choose Us">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
         <!-- Services Area start -->
        <section class="services-two-area rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two hover-two">
                            <div class="icon"><i class="flaticon-leadership"></i></div>
                            <h6><a href="{{ route('serviceDetails') }}">Experience Teams</a></h6>
                            <p>Web development agencies typically have a team skilled developers designers</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two hover-two">
                            <div class="icon"><i class="flaticon-solution"></i></div>
                            <h6><a href="{{ route('serviceDetails') }}">Customized Solutions</a></h6>
                            <p>Agencies can provide tailore solutions the align with client specific needs and goals.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two hover-two">
                            <div class="icon"><i class="flaticon-solution"></i></div>
                            <h6><a href="{{ route('serviceDetails') }}">Scalability & Flexibility</a></h6>
                            <p>Web development agencies according provide flexibility to add new functionalities</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two hover-two">
                            <div class="icon"><i class="flaticon-customer-support"></i></div>
                            <h6><a href="{{ route('serviceDetails') }}">Support Maintenance</a></h6>
                            <p>Good web develop agency offers ongoing maintenance services ensuring optimally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area end -->
        
        
        <!-- Integrations Area start -->
        <section class="integrations-area pt-100 rpt-70 pb-210 rpb-130 rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center mb-35" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <span class="subtitle color-primary mt-10 mb-15">Integrations</span>
                            <h2>Integrating Cutting-edge Web technologies</h2>
                        </div>
                        <p>Integrating different systems, technologies, or tools is a crucial process enables seamless communication and functionality.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="integration-wrap">
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration1.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration2.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration3.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration4.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration5.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration6.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration7.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration8.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration9.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration10.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration11.png') }}" alt="Integration">
                            </div>
                            <div class="integration-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                                <img src="{{ asset('/assets/images/client-logos/integration12.png') }}" alt="Integration">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Integrations Area end -->
        
        
        <!-- Pricing Area start -->
        <section class="latest-work-area radius-shape-top pt-130 rpt-100 pb-100 rpb-70 rel z-2" style="background-image: url(assets/images/background/hero-five-bg.png);">
            <div class="container container-1290">
                <div class="row justify-content-center text-white">
                    <div class="col-xl-6 co-lg-8 col-md-10 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-50">
                            <span class="subtitle mt-10 mb-15">Pricing Package</span>
                            <h2>Premium Web Design Services Without the Premium Price</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <ul class="nav pricing-tab mb-65" role="tablist">
                            <li>
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#monthly">Monthly</button>
                            </li>
                            <li>
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#yearly">Yearly</button>
                            </li>
                        </ul>
                        <span class="save-percent">Save 25%</span>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="monthly">
                       <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item">
                                    <h6 class="title">Regular</h6>
                                    <div class="text">Basic plan need service without added complexity expense</div>
                                    <span class="price">$15<span class="after-text">/monthly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li class="hide">Standard theme customization</li>
                                        <li class="hide">Social media integration</li>
                                        <li class="hide">Basic SEO setup</li>
                                        <li class="hide">1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                <div class="pricing-item">
                                    <h6 class="title">Standard</h6>
                                    <div class="text">Standard plan to need services without complexity expense</div>
                                    <span class="price">$29<span class="after-text">/monthly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li class="hide">Social media integration</li>
                                        <li class="hide">Basic SEO setup</li>
                                        <li class="hide">1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                                <div class="pricing-item">
                                    <span class="badge">popular</span>
                                    <h6 class="title">Premium</h6>
                                    <div class="text">Premium plan to need services added complexity expense</div>
                                    <span class="price">$93<span class="after-text">/monthly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li class="hide">1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                                <div class="pricing-item">
                                    <h6 class="title">Diamond</h6>
                                    <div class="text">Basic plan need service without added complexity expense</div>
                                    <span class="price">$107<span class="after-text">/monthly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yearly">
                       <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item">
                                    <h6 class="title">Regular</h6>
                                    <div class="text">Basic plan need service without added complexity expense</div>
                                    <span class="price">$15<span class="after-text">/yearly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li class="hide">Standard theme customization</li>
                                        <li class="hide">Social media integration</li>
                                        <li class="hide">Basic SEO setup</li>
                                        <li class="hide">1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                <div class="pricing-item">
                                    <h6 class="title">Standard</h6>
                                    <div class="text">Standard plan to need services without complexity expense</div>
                                    <span class="price">$29<span class="after-text">/yearly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li class="hide">Social media integration</li>
                                        <li class="hide">Basic SEO setup</li>
                                        <li class="hide">1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                                <div class="pricing-item">
                                    <span class="badge">popular</span>
                                    <h6 class="title">Premium</h6>
                                    <div class="text">Premium plan to need services added complexity expense</div>
                                    <span class="price">$93<span class="after-text">/yearly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li class="hide">1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                                <div class="pricing-item">
                                    <h6 class="title">Diamond</h6>
                                    <div class="text">Basic plan need service without added complexity expense</div>
                                    <span class="price">$107<span class="after-text">/yearly</span></span>
                                    <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <ul class="list-style-two small">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Area end -->
        
        
        <!-- Testimonials Area Start -->
        <section class="testimonials-area-five pt-130 rpt-100 pb-75 rpb-45">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle color-primary mt-10 mb-15">Our Testimonials</span>
                            <h2>We Have More Then 1580+ Customer Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                        <div class="testimonials-content-five mb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="testimonials-two-active">
                                <div class="testimonial-item style-four">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    </div>
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence heir strategic to approach and attention too detail have help heights"</div>
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
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence heir strategic to approach and attention too detail have help heights"</div>
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
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence heir strategic to approach and attention too detail have help heights"</div>
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
                                    <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence heir strategic to approach and attention too detail have help heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-dots pt-20 mb-10"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonials-image-and-customers mb-55" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Testimonials">
                            <div class="trusted-client-part text-center text-white">
                                <h4>Trusted By 25,880+ Worldwide Brand & Customers</h4>
                                <hr class="mt-30 mb-40">
                                <div class="trusted-clients">
                                    <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="50" src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                    <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                    <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                    <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200" src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=60" alt="Author">
                                    <i data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250" class="far fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area End -->
       
       
        <!-- Blog Area start -->
        <section class="blog-area pb-130 rpb-100 rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mb-15">Latest News & Blog</span>
                            <h2>Essential Features Every Business Website Needs in 2024</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gap justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="blog-item style-four" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="{{ route('blog') }}" class="category">Admin</a></li>
                                    <li>Sep 20, 2024</li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Web Development Agency Can Improve Your SEO Experience Best for Your Business</a></h5>
                                <p>Basic plan typically refers to a foundational service or product offering that includes essential features or functionalities.</p>
                                <a href="{{ route('blogDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="blog-item style-four image-left" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="{{ route('blog') }}" class="category">Admin</a></li>
                                    <li>Sep 20, 2024</li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">How to Craft they Winning Socials Media Strategy from Scratch</a></h5>
                                <a href="{{ route('blogDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-item style-four image-left" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="{{ route('blog') }}" class="category">Admin</a></li>
                                    <li>Sep 20, 2024</li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">The Importance of Responsive Design in Today's Digital Landscape</a></h5>
                                <a href="{{ route('blogDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-item style-four image-left" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="{{ route('blog') }}" class="category">Admin</a></li>
                                    <li>Sep 20, 2024</li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Custom vs. Template Websites Which Is Best for Your Business?</a></h5>
                                <a href="{{ route('blogDetails') }}" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
        
        
        <!-- Contact Us area start -->
        <section class="contact-us-area rel z-2">
            <div class="container container-1290">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="contact-image-five rel rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/background/contact-bg.jpg') }}" alt="Contact">
                            </div>
                            
                            <div class="abs-headings" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                                <h6 class="bgc-primary text-white">10m+ Satisfied Clients</h6>
                                <h6 class="bgc-secondary">CEO & Founder</h6>
                                <h6 class="bgc-yellow">25+ Years Of Experience</h6>
                            </div>
                            
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/logo-two-white.png') }}" alt="Logo" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" class="aos-init aos-animate"></a></div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-white">
                        <form class="contact-form style-two bgc-primary z-1 rel" name="contactForm" action="#" method="post" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <h3>Get In Touch</h3>
                            <p>Contact us today to schedule consultation to expert team</p>
                            <div class="row mt-35">
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
                                        <ul class="radio-filter mb-30">
                                            <li>
                                                <input class="form-check-input" type="radio" checked="" name="ByActivities" id="activity1">
                                                <label for="activity1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="theme-btn style-two hover-secondary" data-hover="Send Us  Message">
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
        <!-- Contact Us area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerFive')
    <!-- footer area end -->
@endsection
