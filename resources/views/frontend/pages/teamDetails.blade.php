@extends('frontend.layouts.app')
@section('title', 'Meet Our Team')
@section('meta_description', 'Meet the Blue Cow Digital team — passionate designers, developers, and SEO specialists based in Southport helping businesses grow online.')
@section('meta_keywords', 'Blue Cow Digital team, Joseph McArdle, Matt Barooah, web design team Southport')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Team Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('team') }}">Our Team</a></li>
                            <li class="breadcrumb-item active">Team Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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


        <!-- Team Profile Area start -->
        <section class="team-profile-area rel z-1">
            <div class="container px-sm-0 bordered-x pt-130 rpt-100 pb-100 rpb-70">
                <div class="row align-items-center">
                    <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-profile-image rmb-55">
                            <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Joseph McArdle — Co-Founder & Creative Director, Blue Cow Digital">
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-profile-content ms-xl-5">
                            <div class="section-title mb-30">
                                <h2>Joseph McArdle</h2>
                                <span class="designation">Co-Founder & Creative Director</span>
                            </div>
                            <p>Joseph is one of the co-founders of Blue Cow Digital and leads the creative vision of the agency. With a background in graphic design and brand strategy, Joseph has spent over a decade helping businesses across the UK build compelling digital identities. Based in Southport, he is passionate about delivering websites and campaigns that are not only visually impressive, but results-driven.</p>
                            <p class="mt-20">Joseph oversees all web design projects, ensuring every site we deliver is beautifully crafted, fully responsive, and aligned with each client's unique brand voice and business objectives.</p>
                            <div class="social-style-one mt-30">
                                <a href="https://www.facebook.com/BlueCowDigital/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://uk.linkedin.com/company/blue-cow-digital" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Profile Area end -->


        <!-- Team Experience Area start -->
        <section class="team-experience-area rel z-1 pb-130 rpb-100">
            <div class="container bordered-x px-sm-0">
                <div class="row gap-80">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-experience-content">
                            <div class="section-title mb-25">
                                <h3>Expertise & Skills</h3>
                            </div>
                            <p>Joseph brings a wealth of experience across web design, brand identity, UX/UI, and digital strategy. His creative instinct combined with a deep understanding of what drives online performance makes him an invaluable part of the Blue Cow Digital team.</p>
                            <div class="circle-counter-wrap pt-30">
                                <div class="circle-counter-item">
                                    <div class="circle-progress" data-percentage="96" data-color="#FFDD55"></div>
                                    <div class="content">
                                        <h5>Web Design & UX</h5>
                                    </div>
                                </div>
                                <div class="circle-counter-item">
                                    <div class="circle-progress" data-percentage="88" data-color="#FFDD55"></div>
                                    <div class="content">
                                        <h5>Brand Strategy</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-experience-form rmt-55">
                            <div class="section-title mb-25">
                                <h3>Get In Touch</h3>
                            </div>
                            <p>Have a project in mind or want to learn more about how Blue Cow Digital can help your business? Drop us a message and we'll get back to you within 24 hours.</p>
                            <form action="{{ route('contact') }}" method="get" class="contact-form style-two mt-35">
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <input type="text" name="name" placeholder="Full Name" required="">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <textarea name="message" rows="3" placeholder="Tell us about your project..." required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="theme-btn hover-primary" data-hover="Send Message">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Experience Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
