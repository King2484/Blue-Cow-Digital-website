@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with Blue Cow Digital. Call us on +44 (0)1704 331 786 or email hello@bluecowdigital.co.uk. Based in Southport, serving clients nationwide.')
@section('meta_keywords', 'contact Blue Cow Digital, web design Southport, digital marketing enquiry, SEO consultation')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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


        <!-- Why Choose Us Area start -->
        <section class="why-choose-contact-page rel z-1">
            <div class="container bordered-x pt-130 rpt-100 pb-70 px-sm-0">
                <div class="row justify-content-center pb-35">
                    <div class="col-xl-5 col-lg-7 col-md-10 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-10 mb-30">
                            <span class="subtitle mb-15">Get In Touch</span>
                            <h2>Let's Talk About Growing Your Business Online</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two">
                            <div class="icon"><i class="flaticon-curve"></i></div>
                            <h5><a href="{{ route('serviceDetails') }}">Custom Website Design</a></h5>
                            <p>A professional website designed and built specifically for your business. Fast, mobile-responsive and designed to convert visitors into customers.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two">
                            <div class="icon"><i class="flaticon-leadership"></i></div>
                            <h5><a href="{{ route('serviceDetails') }}">Complete SEO &amp; Marketing</a></h5>
                            <p>Get found on Google, engage your audience on social media, and attract more customer enquiries through strategic digital marketing.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two">
                            <div class="icon"><i class="flaticon-satisfaction"></i></div>
                            <h5><a href="{{ route('serviceDetails') }}">One Clear Price, Real Results</a></h5>
                            <p>£979/month (50% off first 3 months) covers everything. No hidden fees. One team. One point of contact. Clear monthly reporting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->


        <!-- Contact Form Area start -->
        <section class="contact-form-area">
            <div class="container bordered-x px-sm-0 pb-120 rpb-90">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-info-part style-two rmb-55" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-50">
                                <h2>Ready to Claim Your Offer? Tell Us About Your Project</h2>
                            </div>
                            <div class="contact-info-wrap bordered br-10 overflow-hidden">
                                <div class="row no-gap">
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                                            <div class="text">11A Hoghton Street, Southport,<br>Merseyside PR9 0NS, UK</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-envelope"></i></div>
                                            <div class="text">
                                                <a href="mailto:hello@bluecowdigital.co.uk">hello@bluecowdigital.co.uk</a><br>
                                                <a href="https://bluecowdigital.co.uk" target="_blank">bluecowdigital.co.uk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-phone-volume"></i></div>
                                            <div class="text">
                                                <a href="tel:+441704331786">+44 (0)1704 331 786</a><br>
                                                <a href="mailto:hello@bluecowdigital.co.uk">hello@bluecowdigital.co.uk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-clock"></i></div>
                                            <div class="text">Monday - Friday <br>08:00am - 05:00pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="contact-form style-three bgc-lighter z-1 rel">
                            <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php" method="post" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <h3>Let's Get Started</h3>
                                <p>Fill in your details below and we'll get back to you within 24 hours to discuss your project.</p>
                                <div class="row gap-20 mt-20">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" value="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone</label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Your Phone Number" value="" required data-error="Please enter your Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" value="" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-25">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Website Enquiry" required data-error="Please enter your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Tell Us About Your Project</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="What are your goals? What does your business do?" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn" data-hover="Send Message">
                                                <span>Send Message</span>
                                            </button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                       </div>
                    </div>
                </div>

                <div class="our-location mt-100" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2368.1234567890!2d-2.9833!3d53.6478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b0e9bfbc12345%3A0xabcdef123456!2s11A+Hoghton+St%2C+Southport+PR9+0NS%2C+UK!5e0!3m2!1sen!2suk!4v1706508986625!5m2!1sen!2suk" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- Contact Form Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
