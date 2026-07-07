@extends('frontend.layouts.app')
@section('title', 'Web Design & SEO Agency — Blue Cow Digital')
@section('meta_description', 'Blue Cow Digital — award-winning web design, SEO & digital marketing agency in Southport, UK. We build beautiful websites and grow your business online.')
@section('meta_keywords', 'web design agency Southport, SEO company UK, digital marketing Merseyside, website design, Blue Cow Digital')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <!-- Hero Area Start -->
    <section class="hero-area-four bgc-black text-white rel z-2">
        <div class="container px-xxl-0 bordered-x pt-180 rpt-90">
            <div class="row pt-50">
                <div class="col-xl-12">
                    <div class="hero-content-four" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h1 class="hero-title-responsive">Websites built to bring you more enquiries</h1>
                        <p style="font-size: 20px; line-height: 1.6; max-width: 800px; margin-bottom: 30px;">We design, build and manage high-quality business websites with SEO, content, tracking and ongoing marketing support included.</p>
                        
                        <div class="hero-btns" style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 40px;">
                            <a href="{{ route('pricing') }}" class="theme-btn" data-hover="View Packages">
                                <span>View Packages</span>
                            </a>
                            <a href="{{ route('contact') }}" class="theme-btn style-two" data-hover="Book a Free Consultation">
                                <span>Book a Free Consultation</span>
                            </a>
                        </div>

                        <div class="trust-credibility" style="color: rgba(255,255,255,0.75); font-size: 15px; font-weight: 500; display: flex; align-items: center; gap: 8px;">
                            <span style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background: #28F67A;"></span> Trusted by businesses across the UK for ongoing growth.
                        </div>

                        <!-- Four Core Pillars -->
                        <div class="row pt-40 pb-20 text-white justify-content-between" style="border-top: 1px solid rgba(255,255,255,0.1); margin-top: 40px;">
                            <div class="col-lg-3 col-sm-6 mb-20" data-aos="fade-up" data-aos-delay="100">
                                <div style="border-left: 3px solid #28F67A; padding-left: 15px;">
                                    <h6 style="color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 5px;">1. We Build</h6>
                                    <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin: 0;">Bespoke, high-converting professional websites built to perform.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-20" data-aos="fade-up" data-aos-delay="200">
                                <div style="border-left: 3px solid #28F67A; padding-left: 15px;">
                                    <h6 style="color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 5px;">2. We Drive Traffic</h6>
                                    <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin: 0;">Rank higher on Google with built-in SEO and active marketing.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-20" data-aos="fade-up" data-aos-delay="300">
                                <div style="border-left: 3px solid #28F67A; padding-left: 15px;">
                                    <h6 style="color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 5px;">3. We Track Results</h6>
                                    <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin: 0;">Understand visitor behaviour and see every lead generated.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-20" data-aos="fade-up" data-aos-delay="400">
                                <div style="border-left: 3px solid #28F67A; padding-left: 15px;">
                                    <h6 style="color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 5px;">4. We Keep Improving</h6>
                                    <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin: 0;">Ongoing adjustments and support to continuously scale.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-shapes">
            <img src="{{ asset('/assets/images/shapes/hero-shape1.png') }}" alt="Shape" class="hero-vortex-shape">
            <div class="bg-glow"></div>
            <div class="hero-image" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                <img src="{{ asset('/assets/images/bcd_hero_mockup.png') }}" alt="Blue Cow Digital Traffic & Analytics Mockup">
            </div>
        </div>
    </section>
    <!-- Hero Area End -->


    <!-- About Area start -->
    <section class="about-area rel z-1">
        <div class="container bordered-x pt-130 rpt-100 pb-100">
            <div class="row px-xl-5 justify-content-between align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="about-circles rmb-55">
                        <div class="circle bgc-primary text-white" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">Website Build
                        </div>
                        <div class="circle mx-auto bgc-black text-white" data-aos="zoom-in" data-aos-duration="1500"
                            data-aos-offset="50">SEO</div>
                        <div class="circle ms-auto bgc-primary" data-aos="fade-right" data-aos-duration="1500"
                            data-aos-offset="50">Marketing</div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="about-content-four">
                        <div class="section-title mb-40">
                            <span class="subtitle mt-10 mb-15">What You Get</span>
                            <h2>A Complete Website Overhaul, Built for Your Business</h2>
                        </div>
                        <p>We deliver a full transformation of your online presence — modern, responsive and built entirely around your brand and goals. No templates. No shortcuts. Just a professional website that represents you properly.</p>
                        <ul class="list-style-one my-30">
                            <li>Modern, responsive & professional design</li>
                            <li>Mobile and desktop optimised</li>
                            <li>Straightforward, user-friendly navigation</li>
                            <li>Tailored towards your business and goals</li>
                        </ul>
                        <a href="{{ route('projectList') }}" class="theme-btn style-two" data-hover="Explore Our Projects">
                            <span>Explore Our Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bordered-x px-0 overflow-hidden">
            <img src="{{ asset('/assets/images/bcd_about_graphic.png') }}"
                alt="About Blue Cow Digital Team Overview" style="width:100%; object-fit:cover; max-height:500px;">
        </div>
    </section>

    <!-- Value Propositions Section -->
    <section class="value-propositions pt-130 pb-80 bgc-black text-white rel z-1 bordered-bottom">
        <div class="container px-xl-5">
            <div class="row pt-20">
                <!-- Our Job Is To Get People To Your Website -->
                <div class="col-lg-6 mb-50" data-aos="fade-up">
                    <div style="background: rgba(255, 255, 255, 0.03); padding: 40px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                        <div class="icon mb-25" style="font-size: 32px; color: #28F67A;"><i class="fal fa-bullseye-arrow"></i></div>
                        <h3 class="mb-15" style="color: #fff; font-size: 24px; font-weight:700;">Our job is to get people to your website</h3>
                        <p style="color: rgba(255,255,255,0.65); font-size: 15px; line-height: 1.7;">Blue Cow Digital builds the website, sets up the tracking, improves SEO, creates content, supports social media and helps push the business online. The website is the base, but marketing and tracking are what help it grow.</p>
                    </div>
                </div>

                <!-- Why There Are Ongoing Fees -->
                <div class="col-lg-6 mb-50" data-aos="fade-up" data-aos-delay="100">
                    <div style="background: rgba(255, 255, 255, 0.03); padding: 40px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                        <div class="icon mb-25" style="font-size: 32px; color: #28F67A;"><i class="fal fa-sync"></i></div>
                        <h3 class="mb-15" style="color: #fff; font-size: 24px; font-weight:700;">Why there are ongoing fees</h3>
                        <p style="color: rgba(255,255,255,0.65); font-size: 15px; line-height: 1.7;">A website is not a one-time job once it goes live. It needs hosting, updates, security, backups, SEO checks, content, tracking, improvements and support. We keep the website live, healthy, updated and moving in the right direction.</p>
                    </div>
                </div>

                <!-- Marketing You Can Actually Track -->
                <div class="col-lg-6 mb-50" data-aos="fade-up">
                    <div style="background: rgba(255, 255, 255, 0.03); padding: 40px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                        <div class="icon mb-25" style="font-size: 32px; color: #28F67A;"><i class="fal fa-chart-line"></i></div>
                        <h3 class="mb-15" style="color: #fff; font-size: 24px; font-weight:700;">Marketing you can actually track</h3>
                        <p style="color: rgba(255,255,255,0.65); font-size: 15px; line-height: 1.7; margin-bottom: 20px;">One of the greatest advantages of modern marketing is that it is traceable. We can see how many people visit the website, where they come from, what pages they land on, what actions they take, and whether they are becoming enquiries.</p>
                        
                        <div class="row pt-10">
                            <div class="col-sm-6">
                                <ul style="list-style: none; padding: 0; margin: 0; color: rgba(255,255,255,0.75); font-size: 14px;">
                                    <li class="mb-10"><i class="fas fa-check text-primary me-2"></i> Google Analytics</li>
                                    <li class="mb-10"><i class="fas fa-check text-primary me-2"></i> Google Search Console</li>
                                    <li class="mb-10"><i class="fas fa-check text-primary me-2"></i> Enquiry tracking</li>
                                    <li class="mb-10"><i class="fas fa-check text-primary me-2"></i> Traffic reports</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul style="list-style: none; padding: 0; margin: 0; color: rgba(255,255,255,0.75); font-size: 14px;">
                                    <li class="mb-10"><i class="fas fa-check text-primary me-2"></i> Search visibility</li>
                                    <li class="mb-10"><i class="fas fa-check text-primary me-2"></i> Campaign performance</li>
                                    <li class="mb-10"><i class="fas fa-check text-primary me-2"></i> Website behaviour</li>
                                </ul>
                            </div>
                        </div>

                        <p class="mt-25" style="font-style: italic; color: rgba(255,255,255,0.45); font-size: 13px;">“We cannot promise overnight results, but we can track what is happening, make informed decisions, and keep improving the website and marketing over time.”</p>
                    </div>
                </div>

                <!-- How We Improve Your Website Over Time -->
                <div class="col-lg-6 mb-50" data-aos="fade-up" data-aos-delay="100">
                    <div style="background: rgba(255, 255, 255, 0.03); padding: 40px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                        <div class="icon mb-25" style="font-size: 32px; color: #28F67A;"><i class="fal fa-sliders-h"></i></div>
                        <h3 class="mb-15" style="color: #fff; font-size: 24px; font-weight:700;">How we improve your website over time</h3>
                        <p style="color: rgba(255,255,255,0.65); font-size: 15px; line-height: 1.7;">After launch, we do not just leave the website alone. We monitor performance, check if visitors are moving in the right direction, and make adjustments to improve enquiries. If people are landing on the site but not contacting the business, we can improve calls-to-action, page layout, wording, forms and user journeys.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Value Propositions Section End -->





    <!-- Services Area Start -->
    <section class="services-area">
        <div class="container px-0 bordered-x bordered-top py-130 rpy-100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle mt-10 mb-15">What We Do For You</span>
                        <h2>Everything Included in Your Package</h2>
                    </div>
                </div>
            </div>
            <div class="service-limeline-item">
                <span class="number">01</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Complete Website Overhaul</a></span>
                <div class="image"><img
                        src="{{ asset('/assets/images/bcd_web_overhaul.png') }}"
                        alt="Complete Website Build">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">02</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Search Engine Optimisation</a></span>
                <div class="image"><img
                        src="{{ asset('/assets/images/bcd_seo_analytics.png') }}"
                        alt="SEO">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">03</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Local & Technical SEO</a></span>
                <div class="image"><img
                        src="{{ asset('/assets/images/bcd_seo_analytics.png') }}"
                        alt="Local SEO">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">04</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Content & Social Media</a></span>
                <div class="image"><img
                        src="{{ asset('/assets/images/bcd_web_overhaul.png') }}"
                        alt="Content & Social Media">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">05</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Marketing Strategy & Reporting</a></span>
                <div class="image"><img
                        src="{{ asset('/assets/images/bcd_seo_analytics.png') }}"
                        alt="Marketing Strategy">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Services Area End -->


    <!-- Projects Area start -->
    <section class="project-area rel z-1">
        <div class="container bordered-x px-sm-0 py-130 rpy-100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle mb-15">Our Work</span>
                        <h2>Explore Our Latest Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <a href="{{ asset('assets/images/projects/project-grid1.jpg') }}"
                            class="image">
                            <img src="{{ asset('assets/images/projects/project-grid1.jpg') }}"
                                alt="Dashboard Solution">
                        </a>
                        <div class="content">
                            <span class="category">Web Design</span>
                            <h4><a href="{{ route('projectDetails') }}">Website Development</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <a href="{{ asset('assets/images/projects/project-grid2.jpg') }}"
                            class="image">
                            <img src="{{ asset('assets/images/projects/project-grid2.jpg') }}"
                                alt="Mobile UI Design">
                        </a>
                        <div class="content">
                            <span class="category">Web Design</span>
                            <h6><a href="{{ route('projectDetails') }}">Website Development</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <a href="{{ asset('assets/images/projects/project-grid3.jpg') }}"
                            class="image">
                            <img src="{{ asset('assets/images/projects/project-grid3.jpg') }}"
                                alt="Corporate Website">
                        </a>
                        <div class="content">
                            <span class="category">Web Design</span>
                            <h6><a href="{{ route('projectDetails') }}">Website Development</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <a href="{{ asset('assets/images/projects/project-grid4.jpg') }}"
                            class="image">
                            <img src="{{ asset('assets/images/projects/project-grid4.jpg') }}"
                                alt="E-commerce Solution">
                        </a>
                        <div class="content">
                            <span class="category">Web Design</span>
                            <h4><a href="{{ route('projectDetails') }}">Website Development</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <a href="{{ asset('assets/images/projects/project-grid5.jpg') }}"
                            class="image">
                            <img src="{{ asset('assets/images/projects/project-grid5.jpg') }}"
                                alt="SaaS Development">
                        </a>
                        <div class="content">
                            <span class="category">Web Design</span>
                            <h4><a href="{{ route('projectDetails') }}">Website Development</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <a href="{{ asset('assets/images/projects/project-grid6.jpg') }}"
                            class="image">
                            <img src="{{ asset('assets/images/projects/project-grid6.jpg') }}"
                                alt="Tech Networking">
                        </a>
                        <div class="content">
                            <span class="category">Web Design</span>
                            <h6><a href="{{ route('projectDetails') }}">Website Development</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="{{ route('projectGrid') }}" class="theme-btn style-two mt-20" data-hover="Explore Projects">
                        <span>Explore Projects</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Area end -->


    {{-- Hide counter stats section until confirmed --}}
    {{--
    <!-- Counter Area start -->
    <div class="counter-area bgc-black pt-120 rpt-100 rel z-1">
        ...
    </div>
    <!-- Counter Area end -->
    --}}

    {{-- Hide testimonial section until verified --}}
    {{--
    <!-- Testimonials Area Start -->
    <section class="testimonials-two-area bgc-lighter rel z-1">
        ...
    </section>
    <!-- Testimonials Area End -->
    --}}


    <!-- Packages Preview Section -->
    <section class="pricing-area rel z-1 overflow-hidden bgc-lighter py-130 bordered-top bordered-bottom">
        <div class="container px-xl-5">
            <div class="row justify-content-center pb-35">
                <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-15">
                        <span class="subtitle mt-10 mb-15">Our Packages</span>
                        <h2>Choose the Right Tier for Your Growth</h2>
                    </div>
                    <p>Whether you need a rock-solid professional website built from scratch, or an active monthly digital growth partner to handle SEO, social media, and updates, we have a package built around your business goals.</p>
                </div>
            </div>
            <div class="row align-items-stretch justify-content-center mt-30 gap-y-4">
                <!-- Package 1: Website Starter -->
                <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="pricing-item style-two d-flex flex-column justify-content-between w-100" style="padding: 30px; border-radius: 8px; background: #fff; border: 1px solid #e5e5e5; height: 100%;">
                       <div class="pricing-header">
                            <h5 class="title" style="font-size: 18px; font-weight:700; color:#000;">Website Starter</h5>
                            <div style="margin: 15px 0;">
                                <span style="font-size: 14px; color:#666; display:block;">From</span>
                                <span class="price" style="font-size: 32px; font-weight: 700; color: var(--ridda-primary-color);">£2,999</span>
                            </div>
                            <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 20px;">For businesses that need a premium, professional website built properly from the ground up.</p>
                       </div>
                        <ul class="list-style-one my-4" style="font-size: 13px; padding-left: 0; list-style: none;">
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Bespoke Web Design & Build</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Mobile Responsive Design</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Fast Loading Pages</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Basic SEO Foundation</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Google Analytics Setup</li>
                        </ul>
                        <div class="mt-auto">
                            <p style="font-size:11px; color:#999; margin-bottom:15px; font-style:italic;">*Ongoing hosting and support required after launch.</p>
                            <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100 btn-small" data-hover="Enquire Now">
                                <span>Enquire Now</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 2: Growth Package -->
                <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                    <div class="pricing-item style-two active d-flex flex-column justify-content-between w-100" style="padding: 30px; border-radius: 8px; background: #111; color:#fff; border: 2px solid var(--ridda-primary-color); height: 100%;">
                       <div class="pricing-header">
                            <span class="badge bg-primary text-black mb-10" style="font-size: 11px; font-weight:700; border-radius:3px; padding:4px 8px; display:inline-block; width:fit-content; background:#28F67A !important;">GREAT VALUE</span>
                            <h5 class="title" style="font-size: 18px; font-weight:700; color:#fff; margin-top:5px;">Growth Package</h5>
                            <div style="margin: 15px 0;">
                                <span class="price" style="font-size: 32px; font-weight: 700; color: #28F67A;">£1,000</span>
                                <span style="font-size: 14px; color:rgba(255,255,255,0.7);">/ month</span>
                            </div>
                            <p style="font-size: 13px; color: rgba(255,255,255,0.7); line-height: 1.5; margin-bottom: 20px;">Bespoke website design and build, plus active monthly hosting, updates, SEO, blog content, directories and social media postings.</p>
                       </div>
                        <ul class="list-style-one my-4" style="font-size: 13px; padding-left: 0; list-style: none;">
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Website Build Included</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Hosting & Maintenance</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> SEO Checks & Blog Content</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Social Media (2 posts/mo)</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Performance Tracking</li>
                        </ul>
                        <div class="mt-auto">
                            <p style="font-size:11px; color:rgba(255,255,255,0.5); margin-bottom:15px; font-style:italic;">*24-month agreement.</p>
                            <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100 btn-small" data-hover="Get Started">
                                <span>Get Started</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 3: Marketing Plus -->
                <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                    <div class="pricing-item style-two d-flex flex-column justify-content-between w-100" style="padding: 30px; border-radius: 8px; background: #fff; border: 1px solid #e5e5e5; height: 100%;">
                       <div class="pricing-header">
                            <h5 class="title" style="font-size: 18px; font-weight:700; color:#000;">Marketing Plus</h5>
                            <div style="margin: 15px 0;">
                                <span class="price" style="font-size: 32px; font-weight: 700; color: var(--ridda-primary-color);">£2,500</span>
                                <span style="font-size: 14px; color:#666;">/ month</span>
                            </div>
                            <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 20px;">Everything in Growth Package, plus faster SEO improvements, stronger content strategy, CRO reviews, and optional LinkedIn postings.</p>
                       </div>
                        <ul class="list-style-one my-4" style="font-size: 13px; padding-left: 0; list-style: none;">
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> All Growth Inclusions</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> High-Growth Content Strategy</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Conversion (CRO) Reviews</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Optional LinkedIn Content</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> PPC Campaign Setup</li>
                        </ul>
                        <div class="mt-auto">
                            <p style="font-size:11px; color:#999; margin-bottom:15px; font-style:italic;">*24-month agreement.</p>
                            <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100 btn-small" data-hover="Get Started">
                                <span>Get Started</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 4: Full Digital Partner -->
                <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                    <div class="pricing-item style-two d-flex flex-column justify-content-between w-100" style="padding: 30px; border-radius: 8px; background: #fff; border: 1px solid #e5e5e5; height: 100%;">
                       <div class="pricing-header">
                            <h5 class="title" style="font-size: 18px; font-weight:700; color:#000;">Full Digital Partner</h5>
                            <div style="margin: 15px 0;">
                                <span class="price" style="font-size: 32px; font-weight: 700; color: var(--ridda-primary-color);">£5,000</span>
                                <span style="font-size: 14px; color:#666;">/ month</span>
                            </div>
                            <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 20px;">Your full outsourced digital team. Includes advanced strategy, paid ads management, prioritized changes, and deep monthly audits.</p>
                       </div>
                        <ul class="list-style-one my-4" style="font-size: 13px; padding-left: 0; list-style: none;">
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> All Marketing Plus Inclusions</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Paid Ads (PPC) Management</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Multi-Channel Support</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Priority Website Support</li>
                            <li class="mb-10" style="display:flex; align-items:center; gap:8px;"><i class="fas fa-check text-primary"></i> Deep Strategy Reviews</li>
                        </ul>
                        <div class="mt-auto">
                            <p style="font-size:11px; color:#999; margin-bottom:15px; font-style:italic;">*24-month agreement.</p>
                            <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100 btn-small" data-hover="Partner With Us">
                                <span>Partner With Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-50">
                <a href="{{ route('pricing') }}" class="theme-btn" data-hover="View All Package Details">
                    <span>View All Package Details</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Area start -->
    <section class="blog-two-area rel z-1">
        <div class="container px-sm-0 bordered-x pt-130 rpt-100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle mb-15">Blog & News</span>
                        <h2>Explore Latest Insights</h2>
                    </div>
                </div>
            </div>
            <div class="blog-timeline-item hover-item">
                <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                <div class="content">
                    <h4><a href="{{ route('blogDetails') }}">How to Craft a Winning Social Media Strategy from Scratch</a></h4>
                    <div class="hover-content">
                        <div class="text">
                            <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/projects/project-grid1.jpg') }}"
                                alt="Social Media Strategy">
                        </div>
                    </div>
                </div>
                <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
            </div>
            <div class="blog-timeline-item hover-item">
                <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                <div class="content">
                    <h4><a href="{{ route('blogDetails') }}">The Importance of Responsive Design in Today's Digital Landscape</a></h4>
                    <div class="hover-content">
                        <div class="text">
                            <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/projects/project-grid2.jpg') }}"
                                alt="Responsive Design">
                        </div>
                    </div>
                </div>
                <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
            </div>
            <div class="blog-timeline-item hover-item">
                <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                <div class="content">
                    <h4><a href="{{ route('blogDetails') }}">How to Improve Your Website's Loading Speed Performance</a></h4>
                    <div class="hover-content">
                        <div class="text">
                            <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/projects/project-grid3.jpg') }}"
                                alt="Loading Speed">
                        </div>
                    </div>
                </div>
                <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
            </div>
            <div class="blog-timeline-item hover-item">
                <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                <div class="content">
                    <h4><a href="{{ route('blogDetails') }}">How to Choose the Right Web Design Agency for Your Business</a></h4>
                    <div class="hover-content">
                        <div class="text">
                            <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/projects/project-grid4.jpg') }}"
                                alt="Web Agency">
                        </div>
                    </div>
                </div>
                <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Blog Area end -->


    <!-- CTA Area start -->
    <section class="cta-area-two rel z-1">
        <div class="container px-sm-0 bordered-x py-130 rpy-100"
            style="background-image: url('/assets/images/background/cta-bg-dots.png');">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center" data-aos="zoom-in" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mx-xl-3 mb-30">
                        <h2>Ready to build a website that works harder for your business?</h2>
                        <p style="font-size: 18px; margin-bottom: 30px;">Partner with Blue Cow Digital for a bespoke high-converting website and ongoing growth marketing. Start scaling your enquiries today.</p>
                    </div>
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <a href="{{ route('contact') }}" class="theme-btn" data-hover="Book a Free Consultation">
                            <span>Book a Free Consultation</span>
                        </a>
                        <a href="{{ route('pricing') }}" class="theme-btn style-two" data-hover="View Packages">
                            <span>View Packages</span>
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
