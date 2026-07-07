@extends('frontend.layouts.app')
@section('title', 'Pricing Plans')
@section('meta_description', "Blue Cow Digital's transparent pricing: £979/month for complete website design, SEO and marketing. 50% off first 3 months.")
@section('meta_keywords', 'web design pricing Southport, SEO packages UK, digital marketing pricing, website and marketing package')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Pricing</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pricing Plans</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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

        <!-- Pricing Area start -->
        <section class="pricing-area rel z-1 overflow-hidden">
            <div class="container bordered-x px-sm-0 pt-130 rpt-100 pb-100 rpb-70">
                <div class="row justify-content-center pb-35">
                    <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-15">
                            <span class="subtitle mt-10 mb-15">Transparent Packages</span>
                            <h2>Clear Pricing Tiers Built for Growth</h2>
                        </div>
                        <p>We believe in honest, value-driven pricing. You are not just paying for a website — you are investing in bespoke design, development, technical SEO, regular content, conversion tracking, ongoing updates, and continuous marketing support to keep your business growing.</p>
                    </div>
                </div>
                <div class="row align-items-stretch justify-content-center mt-30 gap-y-4">
                    <!-- Package 1: Website Starter -->
                    <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="pricing-item style-two d-flex flex-column justify-content-between w-100">
                           <div class="pricing-header">
                                <h5 class="title">Website Starter</h5>
                                <div style="margin: 20px 0;">
                                    <span style="font-size: 16px; color:#666; display:block;">From</span>
                                    <span class="price" style="font-size: 40px; font-weight: 700; color: var(--ridda-primary-color);">£2,999</span>
                                </div>
                                <p>For businesses that need a high-quality, professional website built properly from scratch.</p>
                           </div>
                            <ul class="list-style-one my-4">
                                <li>Bespoke Website Design & Build</li>
                                <li>Mobile Responsive Layout</li>
                                <li>Fast Loading Pages</li>
                                <li>Contact Forms & Enquiry Setup</li>
                                <li>Basic SEO Foundation Setup</li>
                                <li>Google Analytics Setup</li>
                                <li>Google Search Console Setup</li>
                                <li>Content Management System (CMS)</li>
                                <li>Launch Support & Handover</li>
                            </ul>
                            <div class="mt-auto">
                                <p style="font-size:12px; color:#999; margin-bottom:15px; font-style:italic; line-height:1.4;">*Ongoing hosting, maintenance and support required after launch.</p>
                                <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100" data-hover="Enquire Now">
                                    <span>Enquire Now</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Package 2: Growth Package (Featured) -->
                    <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="pricing-item style-two active d-flex flex-column justify-content-between w-100">
                           <div class="pricing-header">
                                <span class="badge bg-primary text-black mb-10" style="background:#28F67A !important; font-weight:700; border-radius:3px; padding:4px 8px;">GREAT VALUE</span>
                                <h5 class="title" style="margin-top:5px;">Growth Package</h5>
                                <div style="margin: 20px 0;">
                                    <span class="price" style="font-size: 44px; font-weight: 700;">£1,000</span>
                                    <span style="display: block; font-size: 16px; margin-top: 5px; color: #666;">per month</span>
                                </div>
                                <p>Our most popular ongoing package to keep your website supported, healthy, and pushed forward.</p>
                           </div>
                            <ul class="list-style-one my-4">
                                <li>Bespoke Website Build Included</li>
                                <li>Premium Hosting & Maintenance</li>
                                <li>Ongoing Website Updates</li>
                                <li>Regular SEO Audits & Fixes</li>
                                <li>Meta Titles & Descriptions Optimization</li>
                                <li>Targeted Keyword Research</li>
                                <li>Monthly Blog Content Writing</li>
                                <li>Search Console & Analytics Tracking</li>
                                <li>Online Business Directory Listings</li>
                                <li>Facebook & Instagram Posting (2/mo)</li>
                                <li>Performance Reports & Advice</li>
                            </ul>
                            <div class="mt-auto">
                                <p style="font-size:12px; color:rgba(255,255,255,0.65); margin-bottom:15px; font-style:italic;">*24-month agreement.</p>
                                <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100" data-hover="Get Started">
                                    <span>Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Package 3: Marketing Plus -->
                    <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <div class="pricing-item style-two d-flex flex-column justify-content-between w-100">
                           <div class="pricing-header">
                                <h5 class="title">Marketing Plus</h5>
                                <div style="margin: 20px 0;">
                                    <span class="price" style="font-size: 40px; font-weight: 700; color: var(--ridda-primary-color);">£2,500</span>
                                    <span style="display: block; font-size: 16px; margin-top: 5px; color: #666;">per month</span>
                                </div>
                                <p>For businesses looking for more frequent campaigns, stronger content strategy, and active lead growth.</p>
                           </div>
                            <ul class="list-style-one my-4">
                                <li><strong>Everything in Growth Package</strong></li>
                                <li>More Frequent SEO Improvements</li>
                                <li>Stronger Content Strategy</li>
                                <li>Digital Campaign Planning</li>
                                <li>Conversion Rate Optimization (CRO)</li>
                                <li>Landing Page Layout Adjustments</li>
                                <li>Detailed Monthly Audits & Reports</li>
                                <li>Optional LinkedIn Content Support</li>
                                <li>Add-on PPC Campaign Setup</li>
                            </ul>
                            <div class="mt-auto">
                                <p style="font-size:12px; color:#999; margin-bottom:15px; font-style:italic;">*24-month agreement.</p>
                                <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100" data-hover="Get Started">
                                    <span>Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Package 4: Full Digital Partner -->
                    <div class="col-xl-3 col-md-6 col-sm-10 d-flex" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                        <div class="pricing-item style-two d-flex flex-column justify-content-between w-100">
                           <div class="pricing-header">
                                <h5 class="title">Full Digital Partner</h5>
                                <div style="margin: 20px 0;">
                                    <span class="price" style="font-size: 40px; font-weight: 700; color: var(--ridda-primary-color);">£5,000</span>
                                    <span style="display: block; font-size: 16px; margin-top: 5px; color: #666;">per month</span>
                                </div>
                                <p>For businesses seeking a full outsourced digital marketing, dev, and strategy partner.</p>
                           </div>
                            <ul class="list-style-one my-4">
                                <li><strong>Everything in Marketing Plus</strong></li>
                                <li>Advanced Multi-Channel Strategy</li>
                                <li>Paid Ads (PPC) Management Available</li>
                                <li>Advanced Conversion Tracking</li>
                                <li>Frequent Web Improvements</li>
                                <li>Higher Volume Blog & Social Content</li>
                                <li>Priority Support & Development</li>
                                <li>Deep Monthly Reporting & Strategy Reviews</li>
                            </ul>
                            <div class="mt-auto">
                                <p style="font-size:12px; color:#999; margin-bottom:15px; font-style:italic;">*24-month agreement.</p>
                                <a href="{{ route('contact') }}" class="theme-btn hover-primary w-100" data-hover="Partner With Us">
                                    <span>Partner With Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Explanation Block: Why there are ongoing fees -->
                <div class="row justify-content-center mt-60">
                    <div class="col-xl-8 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h4 style="margin-bottom: 20px;">Why there are ongoing fees</h4>
                        <p style="margin-bottom: 30px;">A website is not a one-time job once it goes live. It requires continuous care, updates, backups, security, SEO optimization, and content creation to keep ranking and drawing enquiries. Our monthly packages ensure your site remains healthy, secure, fast, and competitive on search engines.</p>
                        
                        <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; text-align:left;">
                            <h5 style="margin-bottom: 15px; font-weight:700; text-align:center;">Outcomes & Value Included</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul style="list-style: none; padding: 0; font-size:14px; line-height:1.8;">
                                        <li><strong><i class="fas fa-check text-primary me-2"></i> Custom Dev & Design:</strong> Tailored completely to your goals.</li>
                                        <li><strong><i class="fas fa-check text-primary me-2"></i> Active SEO & Content:</strong> We search-optimize and publish articles for you.</li>
                                        <li><strong><i class="fas fa-check text-primary me-2"></i> Social Management:</strong> Meta Suite social postings support.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul style="list-style: none; padding: 0; font-size:14px; line-height:1.8;">
                                        <li><strong><i class="fas fa-check text-primary me-2"></i> Tracking & CRO:</strong> Continuous tweaks to improve enquiries.</li>
                                        <li><strong><i class="fas fa-check text-primary me-2"></i> Updates & Hosting:</strong> Keeping everything live, healthy and fast.</li>
                                        <li><strong><i class="fas fa-check text-primary me-2"></i> Marketing Guidance:</strong> Straightforward outcomes advice.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Area end -->

        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x bordered-top py-130 rpy-100" style="background-image: url('/assets/images/background/cta-bg-dots.png');">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mx-xl-3 mb-30">
                            <h2>Ready to build a website that works harder for your business?</h2>
                            <p>Book a free consultation call to discuss your goals, review your current site, and pick the perfect package tier for your growth.</p>
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
