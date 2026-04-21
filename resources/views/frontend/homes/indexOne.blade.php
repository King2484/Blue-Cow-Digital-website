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
                <div class="col-xl-10">
                    <div class="hero-content-four" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h1 style="font-size:5rem;line-height:1.15;">Professional websites built around your business, backed by SEO and marketing.</h1>
                        <p>Blue Cow Digital delivers a complete done-for-you digital package — a brand-new professional website, full SEO setup, and ongoing marketing. One monthly investment. Real, measurable results.</p>
                        <a href="{{ route('contact') }}" class="theme-btn mt-30 rmt-15 mb-65 rmb-30"
                            data-hover="See What's Included">
                            <span>See What's Included</span>
                        </a>
                        <h5>500+ Trusted Clients</h5>
                        <div class="trusted-clients pt-15">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Client">
                            <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Client">
                            <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Client">
                            <img src="https://images.pexels.com/photos/1587009/pexels-photo-1587009.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Client">
                            <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Client">
                            <img src="https://images.pexels.com/photos/3785079/pexels-photo-3785079.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-shapes">
            <img src="{{ asset('/assets/images/shapes/hero-shape1.png') }}" alt="Shape" class="hero-vortex-shape">
            <div class="bg-glow"></div>
            <div class="hero-image" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=1200"
                    alt="Blue Cow Digital Team Collaborating">
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
            <img src="https://images.pexels.com/photos/3182811/pexels-photo-3182811.jpeg?auto=compress&cs=tinysrgb&w=1600"
                alt="About Blue Cow Digital Team">
        </div>
    </section>
    <!-- About Area end -->


    <!-- Working Process Area Start -->
    <section class="working-process-area bgc-black text-white rel z-1">
        <div class="container bordered-x pt-130 rpt-100 pb-80 rpb-50">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle mt-10 mb-15">How It Works</span>
                        <h2>Your Website Roadmap</h2>
                    </div>
                </div>
            </div>
            <div class="row gap-50 justify-content-center rel">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="https://images.pexels.com/photos/3183158/pexels-photo-3183158.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Discovery and Strategy">
                        </div>
                        <div class="circle"></div>
                        <div class="content">
                            <h5>Discovery &<br> Planning</h5>
                            <p>We get to know your business, goals and target audience — then build a clear project plan with scope and timelines.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process-item" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content">
                            <h5>Design &<br> Prototyping</h5>
                            <p>We create a visually appealing, brand-led design and present mock-ups for your review and approval before a single line of code is written.</p>
                        </div>
                        <div class="circle"></div>
                        <div class="image">
                            <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Design and Prototyping">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Development and Testing">
                        </div>
                        <div class="circle"></div>
                        <div class="content">
                            <h5>Development<br> & Testing</h5>
                            <p>Our team builds the full website and rigorously tests every link, phone number and function to make sure everything works perfectly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process-item" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content">
                            <h5>Launch &<br> Ongoing Growth</h5>
                            <p>After final approval we go live — then we keep working, running your SEO, content and marketing every month to grow your results.</p>
                        </div>
                        <div class="circle"></div>
                        <div class="image">
                            <img src="https://images.pexels.com/photos/3183153/pexels-photo-3183153.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Launch and Support">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="work-process-line">
                        <img src="{{ asset('/assets/images/work-process/work-step-line.png') }}" alt="Line">
                    </div>
                </div>
            </div>
        </div>
        <div class="work-process-shapes"></div>
    </section>
    <!-- Working Process Area End -->


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
                        src="https://images.pexels.com/photos/3183183/pexels-photo-3183183.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Complete Website Build">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">02</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Search Engine Optimisation</a></span>
                <div class="image"><img
                        src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="SEO">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">03</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Local & Technical SEO</a></span>
                <div class="image"><img
                        src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Local SEO">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">04</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Content & Social Media</a></span>
                <div class="image"><img
                        src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Content & Social Media">
                </div>
                <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
            </div>
            <div class="service-limeline-item">
                <span class="number">05</span>
                <span class="h1"><a href="{{ route('serviceDetails') }}">Marketing Strategy & Reporting</a></span>
                <div class="image"><img
                        src="https://images.pexels.com/photos/3183151/pexels-photo-3183151.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                        <a href="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=800"
                            class="image">
                            <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                        <a href="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=800"
                            class="image">
                            <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                        <a href="https://images.pexels.com/photos/1181352/pexels-photo-1181352.jpeg?auto=compress&cs=tinysrgb&w=800"
                            class="image">
                            <img src="https://images.pexels.com/photos/1181352/pexels-photo-1181352.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                        <a href="https://images.pexels.com/photos/1181298/pexels-photo-1181298.jpeg?auto=compress&cs=tinysrgb&w=800"
                            class="image">
                            <img src="https://images.pexels.com/photos/1181298/pexels-photo-1181298.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                        <a href="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&w=800"
                            class="image">
                            <img src="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                        <a href="https://images.pexels.com/photos/1181703/pexels-photo-1181703.jpeg?auto=compress&cs=tinysrgb&w=800"
                            class="image">
                            <img src="https://images.pexels.com/photos/1181703/pexels-photo-1181703.jpeg?auto=compress&cs=tinysrgb&w=800"
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


    <!-- Counter Area start -->
    <div class="counter-area bgc-black pt-120 rpt-100 rel z-1">
        <div class="row gap-80 align-items-center">
            <div class="col-xxl-5" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="counter-left-image">
                    <img src="https://images.pexels.com/photos/3183151/pexels-photo-3183151.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Digital Marketing Strategy Team">
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="counter-wrap br-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"
                    style="background-image: url(assets/images/background/counter-bg-with-dots.png);">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="25">0</span>
                                <span class="counter-title">Projects Delivered</span>
                                <div class="text">Websites, apps & digital campaigns launched for clients worldwide.</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="10">0</span>
                                <span class="counter-title">Happy Clients</span>
                                <div class="text">Businesses that trust Blue Cow Digital to grow their online presence.</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text plus" data-speed="3000" data-stop="8">0</span>
                                <span class="counter-title">Years Of Experience</span>
                                <div class="text">A decade of crafting digital solutions that drive real results.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-white blank-container bordered-x"></div>
        <div class="counter-shapes">
            <div class="shape">
                <img src="{{ asset('/assets/images/shapes/counter.png') }}" alt="Shape">
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
    </div>
    <!-- Counter Area end -->


    <!-- Testimonials Area Start -->
    <section class="testimonials-two-area bgc-lighter rel z-1">
        <div class="container px-0 bordered-x pt-130 rpt-100 pb-170 rpb-140">
            <div class="testimonials-and-clients bg-white br-10 bordered">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="testimonials-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="section-title mb-30">
                                <span class="subtitle mt-10 mb-15">Our Testimonials</span>
                                <h2>What Our Clients Say</h2>
                            </div>
                            <p>Don't just take our word for it — here's what businesses we've worked with have to say about the results we've delivered.</p>
                            <div class="testimonial-dots mt-45"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonials-two-active" data-aos="fade-right" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="testimonial-item style-two">
                                <div class="author-logo">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <div class="logo"><img
                                            src="https://images.pexels.com/photos/1010488/pexels-photo-1010488.jpeg?auto=compress&cs=tinysrgb&w=150"
                                            alt="Logo"></div>
                                </div>
                                <div class="text">"Working with Blue Cow Digital has been a game-changer for our social
                                    media presence. Their strategic approach and attention to detail have helped us reach
                                    new heights."</div>
                                <div class="quote-title">
                                    <div class="author"><img
                                            src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100"
                                            alt="Author"></div>
                                    <h6>Randall J. Ferguson</h6>
                                    <span class="designation">/CEO & Founder</span>
                                </div>
                            </div>
                            <div class="testimonial-item style-two">
                                <div class="author-logo">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <div class="logo"><img
                                            src="https://images.pexels.com/photos/430205/pexels-photo-430205.jpeg?auto=compress&cs=tinysrgb&w=150"
                                            alt="Logo"></div>
                                </div>
                                <div class="text">"Partnering with Blue Cow Digital transformed our digital strategy. Their
                                    team's expertise in web solutions is unparalleled, delivering results that exceeded our
                                    expectations."
                                </div>
                                <div class="quote-title">
                                    <div class="author"><img
                                            src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=100"
                                            alt="Author"></div>
                                    <h6>Michael R. Adams</h6>
                                    <span class="designation">/Founder at TechFlow</span>
                                </div>
                            </div>
                            <div class="testimonial-item style-two">
                                <div class="author-logo">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <div class="logo"><img
                                            src="https://images.pexels.com/photos/1010488/pexels-photo-1010488.jpeg?auto=compress&cs=tinysrgb&w=150"
                                            alt="Logo"></div>
                                </div>
                                <div class="text">"The level of professionalism and creativity at Blue Cow Digital is
                                    outstanding. They took our vision and brought it to life with a modern, high-converting
                                    website."
                                </div>
                                <div class="quote-title">
                                    <div class="author"><img
                                            src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100"
                                            alt="Author"></div>
                                    <h6>Alex J. Thornton</h6>
                                    <span class="designation">/Operations Director</span>
                                </div>
                            </div>
                            <div class="testimonial-item style-two">
                                <div class="author-logo">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <div class="logo"><img
                                            src="https://images.pexels.com/photos/430205/pexels-photo-430205.jpeg?auto=compress&cs=tinysrgb&w=150"
                                            alt="Logo"></div>
                                </div>
                                <div class="text">"Choosing Blue Cow Digital was the best decision for our rebranding. They
                                    are responsive, innovative, and truly care about their clients' success."
                                </div>
                                <div class="quote-title">
                                    <div class="author"><img
                                            src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=100"
                                            alt="Author"></div>
                                    <h6>Jessica L. Chen</h6>
                                    <span class="designation">/Growth Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-45 mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <h6>Sectors We Work With</h6>
                </div>
                <div class="client-logo-active" style="display:flex;flex-wrap:wrap;justify-content:center;gap:20px 40px;align-items:center;">
                    <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                        <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Retail</span>
                    </div>
                    <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                        <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Hospitality</span>
                    </div>
                    <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                        <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Professional Services</span>
                    </div>
                    <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                        <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Health &amp; Wellness</span>
                    </div>
                    <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                        <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">Construction</span>
                    </div>
                    <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(255,255,255,0.15);border-radius:6px;">
                        <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:inherit;">eCommerce</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->


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
                            <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                            <img src="https://images.pexels.com/photos/3182811/pexels-photo-3182811.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                            <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800"
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
                <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mx-xl-3 mb-30">
                        <h2>One Package. One Price. Everything You Need.</h2>
                        <p>Website build, SEO, content and marketing — all delivered by Blue Cow Digital for <strong>£979/month</strong>. Currently offering <strong>50% off your first 3 months</strong>. Speak to us today for a free, no-obligation consultation.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="theme-btn hover-primary" data-hover="Claim Your Offer">
                        <span>Claim Your Offer</span>
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
