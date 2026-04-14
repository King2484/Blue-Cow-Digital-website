@extends('frontend.layouts.app')
@section('title', 'Project Case Study')
@section('meta_description', 'Explore a Blue Cow Digital project case study — see how we deliver bespoke web design, SEO, and digital marketing solutions that drive real results for clients.')
@section('meta_keywords', 'Blue Cow Digital case study, web design project Southport, SEO results, digital marketing portfolio')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner text-center px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Project Case Study</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('projectGrid') }}">Our Projects</a></li>
                            <li class="breadcrumb-item active">Case Study</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-banner-shapes">
                <div class="shape position-two">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
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


        <!-- Project Details Area start -->
        <section class="project-list pt-130 rpt-100 pb-75 rpb-45">
            <div class="container container-1290">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-tags mb-20">
                            <a href="#">Web Design</a>
                            <a href="#">SEO</a>
                            <a href="#">Branding</a>
                        </div>
                        <div class="section-title mb-50">
                            <h2>Bespoke Website Redesign & SEO Strategy</h2>
                        </div>
                        <p>A local Southport business approached Blue Cow Digital needing a complete digital overhaul — an outdated website, near-zero organic visibility, and no coherent brand identity online. We delivered a fully bespoke, mobile-responsive website alongside a targeted SEO strategy that transformed their online presence and significantly grew their customer enquiries within the first three months.</p>
                    </div>
                    <div class="col-xl-10 mt-15" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <hr>
                        <div class="project-details-info mt-45">
                            <div class="pd-info-item">
                                <h5>Client:</h5>
                                <p>Confidential (Retail Sector)</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Services:</h5>
                                <p>Web Design, SEO, Branding</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Duration:</h5>
                                <p>8 Weeks</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Category:</h5>
                                <p>Retail / eCommerce</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Location:</h5>
                                <p>Southport, UK</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image mb-70" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Blue Cow Digital — Website Design Project">
                </div>
                <div class="row justify-content-between pb-30">
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-5 mb-25">
                            <h2>The Challenge</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-25" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <p>The client had an ageing website built over a decade ago that was not mobile-friendly, had no clear calls-to-action, and was invisible in local search results. Their competitors were outranking them on every relevant keyword, and they were losing potential customers daily.</p>
                        <ul class="list-style-one my-35">
                            <li>No mobile-responsive design</li>
                            <li>Poor page load speeds and technical SEO issues</li>
                            <li>Zero organic keyword rankings in local search</li>
                        </ul>
                        <p>Blue Cow Digital conducted a comprehensive discovery session and digital audit before designing and building a solution tailored specifically to the client's goals, audience, and budget.</p>
                    </div>
                </div>
                <div class="image mb-70" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Blue Cow Digital — SEO & Digital Strategy">
                </div>
                <div class="row pb-10">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-5 mb-25">
                            <h2>Our Approach</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 me-auto mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <p>We began with an in-depth discovery phase — understanding the client's business, customers, and competitors. From this, we developed a clear brand direction and website architecture before moving into design and development.</p>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <p>Simultaneously, our SEO team conducted full keyword research and competitor analysis to build a strategy designed to win organic search rankings in the client's target local area and surrounding regions.</p>
                    </div>
                </div>
                <hr>
                <div class="row gap-70 justify-content-between pt-50 pb-30">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-5 mb-25">
                            <h2>The Results</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <p>Within three months of launch, the client saw a 200% increase in organic search traffic, with key target keywords ranking on page one of Google. Enquiry form submissions increased by 140% compared to the previous year, and bounce rate dropped significantly thanks to the improved user experience.</p>
                        <br>
                        <p>The new website received overwhelmingly positive feedback from the client's customers, and the business has since expanded its service offering on the back of the increased online enquiries generated by the Blue Cow Digital campaign.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blue Cow Digital project results">
                    </div>
                </div>
                <hr>

                <div class="next-prev-projects pt-50 pb-20">
                    <div class="np-project-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Previous Project">
                        </div>
                        <div class="content">
                            <div class="project-tags">
                                <a href="#">eCommerce</a>
                                <a href="#">Web Design</a>
                            </div>
                            <h6><a href="{{ route('projectDetails') }}">Retail eCommerce Store Launch</a></h6>
                            <a href="{{ route('projectDetails') }}" class="read-more">View Project <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="np-project-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="image">
                            <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Next Project">
                        </div>
                        <div class="content">
                            <div class="project-tags">
                                <a href="#">Social Media</a>
                                <a href="#">Branding</a>
                            </div>
                            <h6><a href="{{ route('projectDetails') }}">Social Media Brand Strategy Campaign</a></h6>
                            <a href="{{ route('projectDetails') }}" class="read-more">View Project <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row justify-content-center pt-115 rpt-85">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <h2>Related Projects</h2>
                        </div>
                    </div>
                   <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-grid-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=800" alt="eCommerce Development Project">
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
                                <img src="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Branding & Identity Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Branding</a>
                                    <a href="#">Identity</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Corporate Website Rebrand & Identity</a></h4>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- Project Details Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
