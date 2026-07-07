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
                        <p>We've answered the questions we get asked most often. If you can't find what you're looking for, feel free to <a href="{{ route('contact') }}">get in touch</a> — we're always happy to help.</p>
                    </div>
                </div>

                <!-- Section 1: The Package -->
                <div class="row justify-content-center mb-60">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">About The Package</h3>
                        <div class="accordion" id="faqPackage">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pkg1">
                                        What exactly is included in the £979/month package?
                                    </button>
                                </h2>
                                <div id="pkg1" class="accordion-collapse collapse show" data-bs-parent="#faqPackage">
                                    <div class="accordion-body">Everything you need to succeed online: custom website design and development, complete SEO (technical, on-page and local), professional blog posts, social media content twice per week, Google Analytics setup, a content management system (CMS), monthly reporting and a dedicated account manager. One price, all-inclusive.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pkg2">
                                        Is there a setup or upfront cost?
                                    </button>
                                </h2>
                                <div id="pkg2" class="accordion-collapse collapse" data-bs-parent="#faqPackage">
                                    <div class="accordion-body">No setup fees or hidden costs. You pay £979 per month (50% off for the first 3 months, so £489.50/month). The monthly fee covers everything including the website build during those first months, then all services ongoing. Simple, transparent pricing.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pkg3">
                                        Can I cancel after the first 3 months?
                                    </button>
                                </h2>
                                <div id="pkg3" class="accordion-collapse collapse" data-bs-parent="#faqPackage">
                                    <div class="accordion-body">Yes. You can cancel anytime after the initial 3-month period without penalty. That said, most clients stay because they see real results. By month 4, your website will be live and generating enquiries, so the value is clear.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pkg4">
                                        Is there anything else I need to pay for?
                                    </button>
                                </h2>
                                <div id="pkg4" class="accordion-collapse collapse" data-bs-parent="#faqPackage">
                                    <div class="accordion-body">Just the monthly fee — nothing else. We handle hosting, domain registration, all software, tools and platform costs. You get a complete service. If you want additional services beyond the package (like extra social media channels or advanced PPC), we'll discuss that separately.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: The Website & Build -->
                <div class="row justify-content-center mb-60">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Website Build &amp; Development</h3>
                        <div class="accordion" id="faqWebsite">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#web1">
                                        How long does the website build take?
                                    </button>
                                </h2>
                                <div id="web1" class="accordion-collapse collapse show" data-bs-parent="#faqWebsite">
                                    <div class="accordion-body">Most projects take 4–8 weeks from initial briefing to launch. The exact timeline depends on the complexity of your site and how quickly you provide feedback. We'll give you a clear project timeline at the start so you always know what to expect.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#web2">
                                        Will the site be mobile-friendly?
                                    </button>
                                </h2>
                                <div id="web2" class="accordion-collapse collapse" data-bs-parent="#faqWebsite">
                                    <div class="accordion-body">Absolutely. Every website we build is fully responsive and optimised for mobile, tablet and desktop. We design mobile-first because that's how most of your customers will find you.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#web3">
                                        Can I update the website myself?
                                    </button>
                                </h2>
                                <div id="web3" class="accordion-collapse collapse" data-bs-parent="#faqWebsite">
                                    <div class="accordion-body">Yes. We build your site with an easy-to-use content management system (CMS) so you can update text, images and pages without any technical knowledge. We provide training to make sure you're confident using it.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#web4">
                                        Will the site be fast and perform well?
                                    </button>
                                </h2>
                                <div id="web4" class="accordion-collapse collapse" data-bs-parent="#faqWebsite">
                                    <div class="accordion-body">Yes. We build all sites with performance and speed as a priority. Fast-loading websites rank better in Google and convert more visitors into customers. We optimise everything from the start.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: SEO & Results -->
                <div class="row justify-content-center mb-60">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">SEO &amp; Results</h3>
                        <div class="accordion" id="faqSEO">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#seo1">
                                        What's included in the SEO?
                                    </button>
                                </h2>
                                <div id="seo1" class="accordion-collapse collapse show" data-bs-parent="#faqSEO">
                                    <div class="accordion-body">Complete SEO including technical optimisation, on-page SEO, local search setup, keyword research, content optimisation, ongoing monitoring and reporting. We make sure your website is built to rank well on Google and that we're actively improving your visibility.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seo2">
                                        How long before I see SEO results?
                                    </button>
                                </h2>
                                <div id="seo2" class="accordion-collapse collapse" data-bs-parent="#faqSEO">
                                    <div class="accordion-body">SEO is a long-term investment. You typically start seeing changes in 6–12 weeks, with meaningful results in 3–6 months. We focus on sustainable, lasting improvements rather than quick fixes. Monthly reporting shows your progress.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seo3">
                                        How will I know if the marketing is working?
                                    </button>
                                </h2>
                                <div id="seo3" class="accordion-collapse collapse" data-bs-parent="#faqSEO">
                                    <div class="accordion-body">Every month we provide clear reporting showing website traffic, search rankings, social media engagement, enquiries and leads. We track everything and show you exactly what's driving results for your business.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seo4">
                                        What if my competitors rank higher than me?
                                    </button>
                                </h2>
                                <div id="seo4" class="accordion-collapse collapse" data-bs-parent="#faqSEO">
                                    <div class="accordion-body">We audit competitive rankings and develop a strategy to outrank them. It takes time, but our ongoing SEO and content work is designed specifically to improve your visibility relative to your competitors.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Support & Service -->
                <div class="row justify-content-center mb-60">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Support &amp; Service</h3>
                        <div class="accordion" id="faqSupport">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sup1">
                                        What support do I get after launch?
                                    </button>
                                </h2>
                                <div id="sup1" class="accordion-collapse collapse show" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Full ongoing support is included. We handle website maintenance, security updates, performance monitoring and optimisation. You have a dedicated account manager to contact with questions or when you need changes.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sup2">
                                        Can you help me update content on my site?
                                    </button>
                                </h2>
                                <div id="sup2" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Yes. You can update content yourself using the CMS, but if you prefer we can handle updates for you. Many clients do a mix — managing simple updates themselves and having us handle more complex changes.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sup3">
                                        How do we communicate?
                                    </button>
                                </h2>
                                <div id="sup3" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Your dedicated account manager is your main point of contact. We typically communicate via email, phone and regular check-ins. You'll have direct access to the person managing your account.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sup4">
                                        Do you provide hosting and domains?
                                    </button>
                                </h2>
                                <div id="sup4" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Yes. We arrange fast, reliable UK-based hosting and domain registration. Both are included in your monthly package. We handle all technical setup so you don't have to worry about it.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Getting Started -->
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Getting Started</h3>
                        <div class="accordion" id="faqStart">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#start1">
                                        How do I get started?
                                    </button>
                                </h2>
                                <div id="start1" class="accordion-collapse collapse show" data-bs-parent="#faqStart">
                                    <div class="accordion-body">Contact us via our <a href="{{ route('contact') }}">contact page</a>, call 01704 331 786, or email hello@bluecowdigital.co.uk. We'll arrange a free consultation to understand your business, answer your questions, and discuss your goals.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#start2">
                                        What do I need to provide?
                                    </button>
                                </h2>
                                <div id="start2" class="accordion-collapse collapse" data-bs-parent="#faqStart">
                                    <div class="accordion-body">Your business information, goals, target audience, any existing content or branding guidelines, and your vision for the website. Don't worry if you're not sure — we'll guide you through the discovery process.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#start3">
                                        Can I claim the 50% discount offer now?
                                    </button>
                                </h2>
                                <div id="start3" class="accordion-collapse collapse" data-bs-parent="#faqStart">
                                    <div class="accordion-body">Yes. Get in touch today and lock in the special offer — 50% off your first 3 months (£489.50/month instead of £979). This is a limited-time offer for new clients.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#start4">
                                        Are you a good fit for my business?
                                    </button>
                                </h2>
                                <div id="start4" class="accordion-collapse collapse" data-bs-parent="#faqStart">
                                    <div class="accordion-body">We work with businesses of all sizes across many sectors. If you're serious about growing online and willing to invest in a complete, integrated solution, we're probably a great fit. Let's have a chat and find out.</div>
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
                    <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mx-xl-3 mb-30">
                            <h2>Still Have Questions? We're Here to Help.</h2>
                            <p>Contact the Blue Cow Digital team and we'll get back to you within 24 hours.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="theme-btn hover-primary" data-hover="Contact Us">
                            <span>Contact Us</span>
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
