@extends('frontend.layouts.app')
@section('title', 'FAQs')
@section('meta_description', "Got questions about Blue Cow Digital's web design and SEO services? Find answers to our most frequently asked questions here.")
@section('meta_keywords', 'Blue Cow Digital FAQ, web design questions, SEO questions UK, digital agency FAQ')
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
                        <p>We have put together answers to the questions we get asked most often. If you cannot find what you are looking for, feel free to <a href="{{ route('contact') }}">get in touch</a> — we are always happy to help.</p>
                    </div>
                </div>

                <!-- Section 1: General -->
                <div class="row justify-content-center mb-60">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">General Questions</h3>
                        <div class="accordion" id="faqGeneral">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#g1">
                                        What services does Blue Cow Digital provide?
                                    </button>
                                </h2>
                                <div id="g1" class="accordion-collapse collapse show" data-bs-parent="#faqGeneral">
                                    <div class="accordion-body">We offer a full range of digital services including bespoke web design and development, search engine optimisation (SEO), social media management, branding and visual identity, and eCommerce development. We work with businesses of all sizes across the UK.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g2">
                                        Where is Blue Cow Digital based?
                                    </button>
                                </h2>
                                <div id="g2" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                    <div class="accordion-body">We are based at 11A Hoghton Street, Southport, Merseyside PR9 0NS. While we are a Southport-based agency, we work with clients across the UK and beyond, delivering projects remotely as well as face-to-face.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g3">
                                        How long has Blue Cow Digital been operating?
                                    </button>
                                </h2>
                                <div id="g3" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                    <div class="accordion-body">Blue Cow Digital was founded in 2018 by Joseph McArdle and Matt Barooah. Since then, we have grown to become a trusted digital partner for businesses across Merseyside and beyond, delivering over 100 successful projects.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g4">
                                        What types of businesses do you work with?
                                    </button>
                                </h2>
                                <div id="g4" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                    <div class="accordion-body">We work with businesses of all sizes and sectors — from local start-ups and sole traders to established SMEs and national brands. Whether you are in retail, hospitality, professional services, or any other industry, we have the experience to help you grow online.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g5">
                                        How do I get started with a project?
                                    </button>
                                </h2>
                                <div id="g5" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                    <div class="accordion-body">Simply contact us via our <a href="{{ route('contact') }}">contact page</a>, email us at hello@bluecowdigital.co.uk, or call us on +44 (0)1704 331786. We will arrange a free, no-obligation consultation to discuss your goals and how we can help.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Support & Services -->
                <div class="row justify-content-center mb-60">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Support &amp; Services</h3>
                        <div class="accordion" id="faqSupport">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#s1">
                                        Do you offer ongoing support after a website launch?
                                    </button>
                                </h2>
                                <div id="s1" class="accordion-collapse collapse show" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Yes — we offer ongoing website maintenance, hosting support, and content update packages. We are always on hand to ensure your website continues to perform at its best after launch.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s2">
                                        How long does a website project typically take?
                                    </button>
                                </h2>
                                <div id="s2" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Most bespoke websites take between 4 and 8 weeks from initial briefing to launch, depending on the size and complexity of the project. We will provide a clear project timeline at the start so you always know what to expect.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s3">
                                        Will I be able to update my own website after launch?
                                    </button>
                                </h2>
                                <div id="s3" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Absolutely. All websites we build include a user-friendly content management system (CMS) so you can update text, images, and pages without any technical knowledge. We also provide training to get you up and running confidently.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s4">
                                        Do you provide hosting and domain registration?
                                    </button>
                                </h2>
                                <div id="s4" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Yes. We can arrange fast, reliable UK-based hosting and domain registration as part of your project, or work with your existing hosting provider if you already have one in place.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s5">
                                        Can you work with my existing website rather than rebuilding it?
                                    </button>
                                </h2>
                                <div id="s5" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                                    <div class="accordion-body">Yes. We regularly improve, optimise, and redesign existing websites without a full rebuild when that is the most cost-effective approach. We will audit your current site and recommend the best route forward.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Pricing -->
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <h3 class="mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Pricing &amp; Budgets</h3>
                        <div class="accordion" id="faqPricing">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#p1">
                                        How much does a website cost?
                                    </button>
                                </h2>
                                <div id="p1" class="accordion-collapse collapse show" data-bs-parent="#faqPricing">
                                    <div class="accordion-body">Every project is different, so we provide bespoke quotes based on your specific requirements. We are transparent about costs and there are no hidden fees. Get in touch for a free consultation and quote.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#p2">
                                        Do you offer payment plans?
                                    </button>
                                </h2>
                                <div id="p2" class="accordion-collapse collapse" data-bs-parent="#faqPricing">
                                    <div class="accordion-body">Yes. We understand that every business has different cash flow requirements. We typically work with a deposit at the start of the project and staged payments at key milestones, and we are happy to discuss flexible arrangements.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#p3">
                                        Are there any ongoing monthly costs?
                                    </button>
                                </h2>
                                <div id="p3" class="accordion-collapse collapse" data-bs-parent="#faqPricing">
                                    <div class="accordion-body">This depends on the services you require. Hosting and domain renewal are annual costs, and our SEO and social media services are available on monthly retainers. We will always be upfront about what ongoing costs to expect.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#p4">
                                        Do you work with small budgets?
                                    </button>
                                </h2>
                                <div id="p4" class="accordion-collapse collapse" data-bs-parent="#faqPricing">
                                    <div class="accordion-body">We work with businesses of all sizes and always aim to deliver maximum value regardless of budget. If you are a start-up or small business, we will work with you to find a solution that fits your current budget and can grow with you over time.</div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#p5">
                                        What is included in an SEO retainer?
                                    </button>
                                </h2>
                                <div id="p5" class="accordion-collapse collapse" data-bs-parent="#faqPricing">
                                    <div class="accordion-body">Our SEO retainers typically include keyword tracking, monthly reporting, on-page optimisation, technical SEO maintenance, content creation, and link building activity. The exact scope is tailored to your goals and budget.</div>
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
                            <h2>Still Have Questions? We Are Here to Help.</h2>
                            <p>Contact the Blue Cow Digital team and we will get back to you within 24 hours.</p>
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
