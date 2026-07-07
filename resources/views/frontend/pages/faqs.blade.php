@extends('frontend.layouts.app')
@section('title', 'FAQs')
@section('meta_description', "Got questions about Blue Cow Digital's website and marketing package? Find answers to our most frequently asked questions here.")
@section('meta_keywords', 'Blue Cow Digital FAQ, website design questions, SEO questions UK, digital agency FAQ')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">FAQs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">FAQs</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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


        <!-- FAQ Area start -->
        <section class="faq-page rel z-1">
            <div class="container bordered-x px-sm-0 pt-130 rpt-100 pb-100 rpb-70">

                <div class="row justify-content-center pb-50">
                    <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-15">
                            <span class="subtitle mt-10 mb-15">Got Questions?</span>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <p>Have questions about our website packages, ongoing support, or marketing? Read our answers below, or <a href="{{ route('contact') }}">contact us directly</a>.</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="accordion" id="faqAccordion">
                            <!-- Question 1 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Why is there an ongoing monthly fee?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        A website is not a static project. To keep generating business, it needs ongoing hosting, regular security updates, software maintenance, technical SEO checks, fresh blog content, and marketing optimization. Our monthly packages ensure your site remains fast, secure, and competitive on search engines.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Can I just buy a website as a one-off?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes! If you prefer not to commit to monthly marketing, our **Website Starter** package is available from £2,999. This covers the bespoke design and build of your professional website. Note that standard hosting, support, and maintenance plans are required after launch.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        What is included in the £1,000 package?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Our **Growth Package** is an all-inclusive tier covering your custom website build, premium hosting, backups, ongoing text and layout updates, technical SEO audits, meta tags optimization, monthly blog content creation, business directory listings, social media management (2 posts per month on Meta Suite), and regular performance reports.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Why is the contract 24 months?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Building authority on Google and creating stable lead-generation channels takes consistent, long-term work. A 24-month agreement allows us to absorb the significant upfront design and development costs of your bespoke website, while guaranteeing the dedicated monthly resources needed to grow your traffic and rankings.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 5 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                        Do you handle SEO?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, absolutely. SEO is built into the core of everything we do. We manage Technical SEO (speed, site architecture), On-Page SEO (keywords, header tags, meta content), and Local SEO (Google Business Profile optimization and directory listings) to get your business in front of the right searchers.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 6 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                        Do you post on social media?
                                    </button>
                                </h2>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. In the Growth Package, we write, design, and schedule 2 custom posts per month. Our higher-tier plans include more frequent postings to keep your social channels active and engaged.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 7 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                        Can you run paid ads?
                                    </button>
                                </h2>
                                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. Paid ads (Google PPC and Meta Ads campaigns) require direct ad spend budget and are managed as an optional add-on service or as part of our Full Digital Partner tier.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 8 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                        How do I know if the website is working?
                                    </button>
                                </h2>
                                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We track everything that matters. We set up analytics to track key conversion actions, such as contact form submissions and clicks to call. Every month, you will receive a transparent report showing traffic trends, rankings, and lead numbers.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 9 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                                        Can you make changes after launch?
                                    </button>
                                </h2>
                                <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. All monthly packages include support allocations. Whether you need to update a phone number, upload team photos, post a new project, or add a team member, we can handle it for you.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 10 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                                        What platforms do you post on?
                                    </h2>
                                </h2>
                                <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        By default, we focus on Meta Suite (Facebook and Instagram) as they offer the highest engagement for local business and consumer audiences. B2B LinkedIn support is available as a customized extra.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- FAQ Area end -->

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
