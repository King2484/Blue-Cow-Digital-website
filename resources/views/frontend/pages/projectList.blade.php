@extends('frontend.layouts.app')
@section('title', 'Our Projects')
@section('meta_description', 'Explore the Blue Cow Digital project portfolio — bespoke web design, SEO campaigns, eCommerce builds, and brand identity projects for clients across the UK.')
@section('meta_keywords', 'Blue Cow Digital portfolio, web design projects UK, SEO case studies, digital marketing results')
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
                    <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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
        
        
        <!-- Project List Area start -->
        <section class="project-list py-130 rpy-100">
            <div class="container container-1290">
               <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-65" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Popular Works</span>
                            <h2>Explore Our Latest Projects</h2>
                        </div>
                    </div>
                </div>
               
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Web Design</a>
                                <a href="#">Branding</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Bespoke Business Website Design</a></h4>
                        </div>
                        <div class="bottom">
                            <p>A fully bespoke, mobile-responsive website built for a Southport-based business, complete with on-page SEO and CMS integration.</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">SEO</a>
                                <a href="#">Digital Marketing</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Local SEO Campaign — 200% Traffic Increase</a></h4>
                        </div>
                        <div class="bottom">
                            <p>A targeted local SEO strategy that delivered page-one rankings and a 200% increase in organic traffic within three months.</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">eCommerce</a>
                                <a href="#">Web Design</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">eCommerce Store Development & Launch</a></h4>
                        </div>
                        <div class="bottom">
                            <p>A fully functional eCommerce website built for a retail client, with product management, secure checkout, and SEO-optimised category pages.</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Branding</a>
                                <a href="#">Web Design</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Corporate Website Rebrand & Identity</a></h4>
                        </div>
                        <div class="bottom">
                            <p>A complete brand and website overhaul for a professional services firm, including new visual identity, copywriting and technical SEO setup.</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Social Media</a>
                                <a href="#">Branding</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Social Media Brand Strategy & Management</a></h4>
                        </div>
                        <div class="bottom">
                            <p>A multi-platform social media strategy and content management campaign that grew a local brand's following by 340% in six months.</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Project">
                    </div>
                </div>
                
                <div class="text-center pt-20">
                    <a href="{{ route('projectGrid') }}" class="theme-btn hover-primary" data-hover="Project Details">
                        <span>View More Projects</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Project List Area end -->


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