@extends('frontend.layouts.app')
@section('title', 'Our Projects')
@section('meta_description', "Browse Blue Cow Digital's portfolio of web design, SEO, branding and eCommerce projects. See how we help businesses grow their digital presence.")
@section('meta_keywords', 'web design portfolio, digital agency projects, SEO case studies, website examples UK')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Our Projects</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Our Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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


        <!-- Project Grid Area start -->
        <section class="project-grid-page rel z-1 py-130 rpy-100">
            <div class="container container-1290">
                <div class="row justify-content-center pb-30">
                    <div class="col-xl-7 col-lg-9 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-15">
                            <span class="subtitle mt-10 mb-15">Our Work</span>
                            <h2>Projects That Deliver Real Results</h2>
                        </div>
                        <p>From bespoke website builds to full SEO campaigns and brand identity projects, here is a selection of our work for clients across the UK.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Bespoke Business Website Design">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Web Design</a>
                                    <a href="#">Branding</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Bespoke Business Website Design</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Local SEO Campaign">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">SEO</a>
                                    <a href="#">Digital Marketing</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Local SEO Campaign — 200% Traffic Increase</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=800" alt="eCommerce Store Development">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">eCommerce</a>
                                    <a href="#">Web Design</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">eCommerce Store Development</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Corporate Website Rebrand">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Branding</a>
                                    <a href="#">Web Design</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Corporate Website Rebrand</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Social Media Brand Strategy">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Social Media</a>
                                    <a href="#">Branding</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Social Media Brand Strategy</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Retail eCommerce Launch">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">eCommerce</a>
                                    <a href="#">Retail</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Retail eCommerce Launch</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Social Media Management Campaign">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Social Media</a>
                                    <a href="#">Content</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Social Media Management Campaign</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Hospitality Sector Website Design">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Web Design</a>
                                    <a href="#">Hospitality</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Hospitality Sector Website Design</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-50">
                    <a href="{{ route('contact') }}" class="theme-btn hover-primary" data-hover="Start Your Project">
                        <span>Start Your Project</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Project Grid Area end -->


    <!-- Working Process Area Start -->
    <section class="working-process-area bgc-black text-white rel z-1">
        <div class="container bordered-x pt-130 rpt-100 pb-80 rpb-50">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle mt-10 mb-15">How It Works</span>
                        <h2>Our Step-by-Step Process</h2>
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


    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
