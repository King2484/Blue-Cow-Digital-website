@extends('frontend.layouts.app')
@section('title', 'Web Design & SEO Agency')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerTwo')
    <!-- header area end -->

    <!-- Hero Area Start -->
        <section class="hero-area text-white rel z-2">
            <div class="container bordered-x pt-180 rpt-150 pb-85 rpb-55">
                <div class="row pt-10 justify-content-center">
                    <div class="col-xl-10">
                        <div class="hero-content text-white text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mb-20">Social Media Marketing</span>
                            <h1>Unlock the Power of Social Media</h1>
                            <p>Elevate Your Brand's Presence, Engagement, and Growth Online</p>
                            <a href="{{ route('projectList') }}" class="theme-btn style-two hover-secondary mt-35 rmt-15" data-hover="Get Started">
                                <span>Get Started</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-bottom" style="background-image: url(assets/images/hero/hero-bg-dots.png);">
                <div class="container bordered-x">
                    <div class="hero-socials text-center">
                        <img src="{{ asset('/assets/images/hero/hero-social-shape.png') }}" alt="Line">
                        <div class="logo"><a href="{{ route('home') }}" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50"><img src="{{ asset('/assets/images/logos/logo-two.png') }}" alt="Logo"></a></div>
                        <div class="icon one p-15"><a href="#"><img src="{{ asset('/assets/images/hero/instagram.png') }}" alt="Instagram"></a></div>
                        <div class="icon two p-20"><a href="#"><img src="{{ asset('/assets/images/hero/fb.png') }}" alt="Instagram"></a></div>
                        <div class="icon three p-10"><a href="#"><img src="{{ asset('/assets/images/hero/tiktok.png') }}" alt="Instagram"></a></div>
                        <div class="icon four p-15"><a href="#"><img src="{{ asset('/assets/images/hero/linkedin.png') }}" alt="Instagram"></a></div>
                        <div class="icon five p-15"><a href="#"><img src="{{ asset('/assets/images/hero/youtube.png') }}" alt="Instagram"></a></div>
                        <div class="icon six p-10"><a href="#"><img src="{{ asset('/assets/images/hero/shopify.png') }}" alt="Instagram"></a></div>
                        <div class="icon seven p-20"><a href="#"><img src="{{ asset('/assets/images/hero/x.png') }}" alt="Instagram"></a></div>
                        <div class="icon eight p-15"><a href="#"><img src="{{ asset('/assets/images/hero/pinterest.png') }}" alt="Instagram"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Client Logo Area start -->
        <div class="client-logo-area">
            <div class="container bordered br-bottom">
                <div class="client-logo-wrap pt-80 pb-65">
                    <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Sectors We Work With</h6>
                    </div>
                    <div class="client-logo-active" style="display:flex;flex-wrap:wrap;justify-content:center;gap:20px 40px;align-items:center;">
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Retail</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Hospitality</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Professional Services</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Health &amp; Wellness</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Construction</span>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50" style="padding:12px 24px;border:1px solid rgba(0,0,0,0.12);border-radius:6px;">
                            <span style="font-weight:600;font-size:14px;letter-spacing:1px;text-transform:uppercase;">eCommerce</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Logo Area end -->
        
        
        <!-- Service Overview Area start -->
        <section class="service-overview-area py-130 rpy-100 rel z-1">
            <div class="container px-sm-0">
                <div class="row justify-content-between align-items-end pb-30">
                    <div class="col-xl-6 col-lg-7" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-25">
                            <span class="subtitle mt-10 mb-15">Services Overview</span>
                            <h2>Social Media Marketing Services for business </h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="text mb-25" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <p>At Blue Cow Digital we offer a comprehensive range of social media marketing services to help businesses of all sizes succeed online transactions are completed.</p>
                        </div>
                    </div>
                </div>
                <div class="service-overview-wrap bordered br-10 overflow-hidden">
                    <div class="row no-gap">
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="service-item">
                                <div class="icon"><i class="flaticon-social-media-marketing"></i></div>
                                <div class="content">
                                    <h4><a href="{{ route('serviceDetails') }}">Social Media Strategy</a></h4>
                                    <p>A Social Media Strategy comprehensive plan designed to help businesses achieve their goals through targeted online .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="service-item">
                                <div class="icon"><i class="flaticon-creative"></i></div>
                                <div class="content">
                                    <h4><a href="{{ route('serviceDetails') }}">Content Creation</a></h4>
                                    <p>This can take many forms, including blog posts, videos, social media updates, infographics, podcasts, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="service-item">
                                <div class="icon"><i class="flaticon-communities"></i></div>
                                <div class="content">
                                    <h4><a href="{{ route('serviceDetails') }}">Community Management</a></h4>
                                    <p>Community management is the practice of building, nurturing, and engaging with a brand's online audience across</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="service-item">
                                <div class="icon"><i class="flaticon-promotion"></i></div>
                                <div class="content">
                                    <h4><a href="{{ route('serviceDetails') }}">Paid Advertising</a></h4>
                                    <p>Paid advertising is a strategic approach tha involves spending money to promote your brand, products, or services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Overview Area end -->
        
        
        <!-- Tab Area Start -->
        <section class="tab-area bgc-lighter-gradient">
            <div class="container bordered-x py-130 rpy-100 bgp-bottom" style="background-image: url(assets/images/background/tab-bg-dots.png);">
                <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <span class="subtitle mt-10 mb-15">Why Choose Us</span>
                    <h2>Why Choose Blue Cow Digital</h2>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                    <ul class="nav tab-style-one mb-70" role="tablist">
                        <li>
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabOne1"><i class="fas fa-user-friends"></i> Experience Team</button>
                        </li>
                        <li>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabOne2"><i class="fas fa-chart-bar"></i> Proven Results</button>
                        </li>
                        <li>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabOne3"><i class="fas fa-rocket-launch"></i> Personalized Approach</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabOne1">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <h4 class="mb-25">Lead Social Media Marketing Specialist Director of Social Media Strategy</h4>
                                    <p>As a valued member of our team Teams Member' consistently demonstrates a high level of expertise and dedication to their role their ability to collaborate effectively with colleagues</p>
                                    <ul class="list-style-two mt-35 mb-40">
                                        <li>Senior Social Media Strategist</li>
                                        <li>Chief Social Media Marketing Officer</li>
                                        <li>Director of Social Media Strategy</li>
                                    </ul>
                                    <a href="{{ route('about') }}" class="theme-btn btn-small bgc-secondary hover-secondary" data-hover="Learn More">
                                        <span>Learn More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Tab">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabOne2">
                        <div class="row gap-60 align-items-center justify-content-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="image rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Tab">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="content" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                    <h4 class="mb-25">Lead Social Media Marketing Specialist Director of Social Media Strategy</h4>
                                    <p>As a valued member of our team Teams Member' consistently demonstrates a high level of expertise and dedication to their role their ability to collaborate effectively with colleagues</p>
                                    <ul class="list-style-two mt-35 mb-40">
                                        <li>Senior Social Media Strategist</li>
                                        <li>Chief Social Media Marketing Officer</li>
                                        <li>Director of Social Media Strategy</li>
                                    </ul>
                                    <a href="{{ route('about') }}" class="theme-btn btn-small bgc-secondary hover-secondary" data-hover="Learn More">
                                        <span>Learn More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabOne3">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-5 col-lg-6">
                                <div class="content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <h4 class="mb-25">Lead Social Media Marketing Specialist Director of Social Media Strategy</h4>
                                    <p>As a valued member of our team Teams Member' consistently demonstrates a high level of expertise and dedication to their role their ability to collaborate effectively with colleagues</p>
                                    <ul class="list-style-two mt-35 mb-40">
                                        <li>Senior Social Media Strategist</li>
                                        <li>Chief Social Media Marketing Officer</li>
                                        <li>Director of Social Media Strategy</li>
                                    </ul>
                                    <a href="{{ route('about') }}" class="theme-btn btn-small bgc-secondary hover-secondary" data-hover="Learn More">
                                        <span>Learn More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Tab">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tab Area End -->
        
        
        <!-- Testimonials Area Start -->
        <section class="testimonials-area">
            <div class="container bordered-x bordered-top py-130 rpy-100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Client Testimonials</span>
                            <h2>Hear what our clients have to say about working with us</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="testimonials-active">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-logo">
                                    <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                    <div class="logo"><img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=120&h=40&fit=crop" alt="Logo"></div>
                                </div>
                                <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                <div class="quote-title">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <h6>Randall J. Ferguson</h6>
                                    <span class="designation">/CEO & Founder</span>
                                </div>
                            </div>
                            <div class="testimonial-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                <div class="author-logo">
                                    <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                    <div class="logo"><img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=120&h=40&fit=crop" alt="Logo"></div>
                                </div>
                                <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                <div class="quote-title">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <h6>Thomas L. Brinker</h6>
                                    <span class="designation">/SR Manager</span>
                                </div>
                            </div>
                            <div class="testimonial-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                                <div class="author-logo">
                                    <div class="author"><img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                    <div class="logo"><img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=120&h=40&fit=crop" alt="Logo"></div>
                                </div>
                                <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                <div class="quote-title">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <h6>Randall J. Ferguson</h6>
                                    <span class="designation">/CEO & Founder</span>
                                </div>
                            </div>
                            <div class="testimonial-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                                <div class="author-logo">
                                    <div class="author"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Author"></div>
                                    <div class="logo"><img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=120&h=40&fit=crop" alt="Logo"></div>
                                </div>
                                <div class="text">" Working with Blue Cow Digital has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                <div class="quote-title">
                                    <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                    <h6>Thomas L. Brinker</h6>
                                    <span class="designation">/SR Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area End -->
        
        
        <!-- Featured Area Start -->
        <section class="featured-area bgc-black text-white">
            <div class="container bordered-x bordered-bottom py-130 rpy-100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Featured Content</span>
                            <h2>Explore Our Featured Work</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="feature-item" data-aos="flip-down" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image"><img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Featue"></div>
                            <div class="content">
                                <a href="{{ route('services') }}" class="category">Marketing</a>
                                <h5><a href="{{ route('serviceDetails') }}">Engagement Amplified Interactive Campaigns for Maximum Reach</a></h5>
                                <a href="{{ route('serviceDetails') }}" class="theme-btn btn-small style-three" data-hover="Learn More">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-item" data-aos="flip-down" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image"><img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Featue"></div>
                            <div class="content">
                                <a href="{{ route('services') }}" class="category">Influence</a>
                                <h5><a href="{{ route('serviceDetails') }}">Impact Leveraging Social Media for Brand Growth</a></h5>
                                <a href="{{ route('serviceDetails') }}" class="theme-btn btn-small style-three" data-hover="Learn More">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-item" data-aos="flip-down" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image"><img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Featue"></div>
                            <div class="content">
                                <a href="{{ route('services') }}" class="category">Content</a>
                                <h5><a href="{{ route('serviceDetails') }}">Revolution Creating Viral Moments Social Platforms Content Revolution</a></h5>
                                <a href="{{ route('serviceDetails') }}" class="theme-btn btn-small style-three" data-hover="Learn More">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-item" data-aos="flip-down" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image"><img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Featue"></div>
                            <div class="content">
                                <a href="{{ route('services') }}" class="category">Analytics</a>
                                <h5><a href="{{ route('serviceDetails') }}">Analytics-Driven Success Optimizing Campaigns for Maximum ROI</a></h5>
                                <a href="{{ route('serviceDetails') }}" class="theme-btn btn-small style-three" data-hover="Learn More">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-featured text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <a href="{{ route('projectGrid') }}" class="theme-btn style-two hover-secondary mt-20" data-hover="Explore Projects">
                        <span>Explore Projects</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Featured Area End -->
        
        
        <!-- About Us Area start -->
        <section class="about-us-area bgc-black text-white">
            <div class="container bordered-x py-130 rpy-100">
                <div class="row gap-90 justify-content-between align-items-end">
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-content ms-xl-5 rmb-55">
                            <div class="section-title mb-30">
                                <span class="subtitle mt-10 mb-15">Who We Are</span>
                                <h2>About Our Blue Cow Digital</h2>
                            </div>
                            <p>At Blue Cow Digital , we're passionate about helping businesses succeed in the digital world. With years of experience and a dedication to innovation, we've built a reputation for delivering exceptional results</p>
                            <a href="{{ route('about') }}" class="read-more mt-10">Continue Reading <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-logo-part text-center me-xl-5">
                            <img src="{{ asset('/assets/images/background/about-logo-bg-shape.png') }}" alt="Shape">
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/logo-two-white.png') }}" alt="Logo" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50"></a></div>
                            <div class="icon one p-5"><img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Author"></div>
                            <div class="icon two p-15 text-white bgc-primary"><i class="flaticon-megaphone"></i></div>
                            <div class="icon three p-15 bgc-secondary"><i class="flaticon-trophy"></i></div>
                            <div class="icon four"><img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=80" alt="Author"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area end -->
        
        
        <!-- Team Area start -->
        <section class="team-area bgc-black text-white">
            <div class="container bordered-x pb-130 rpb-100 px-sm-0 bgp-bottom" style="background-image: url(assets/images/background/footer-bg-dots.png);">
                <div class="row no-gap justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Raymond R. Jacobs</a></h5>
                                <span class="designation">Ceo & Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">David F. Pelletier</a></h5>
                                <span class="designation">Senior Consultant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">James B. Montanez</a></h5>
                                <span class="designation">Junior Marketer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Daniel R. Alexander</a></h5>
                                <span class="designation">Hr & Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area end -->
        
        
        <!-- CTA Area start -->
        <section class="cta-area bgc-primary text-white pt-15 d-flex text-center align-items-center justify-content-center flex-wrap">
            <h6 class="mx-3 mb-15">Need more help to grow your business and  marketing strategy</h6>
            <a href="{{ route('contact') }}" class="theme-btn btn-extra-small bgc-secondary mb-15 mx-3" data-hover="Get Started">
                <span>Get Started</span>
            </a>
        </section>
        <!-- CTA Area end -->
        
        
        <!-- Blog Area start -->
        <section class="blog-area py-130 rpy-100 rel z-1">
            <div class="container px-sm-0">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mb-15">Blog & News</span>
                            <h2>Ultimate Guide to Boosting Engagement on Social Media</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gap bordered br-10 overflow-hidden justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="{{ route('blog') }}" class="category">Marketing</a></li>
                                    <li>Post by <a href="#">Brandon</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">How to Craft they Winning Socials Media Strategy from Scratch</a></h5>
                                <p>This can take many forms, including blog posts, videos, social media updates</p>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two hover-secondary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="{{ route('blog') }}" class="category">Social Media</a></li>
                                    <li>Post by <a href="#">Brandon</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Unlocking the Power of Paid Ads A Social Media Marketing</a></h5>
                                <p>This can take many forms, including blog posts, videos, social media updates</p>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two hover-secondary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="{{ route('blog') }}" class="category">Marketing</a></li>
                                    <li>Post by <a href="#">Brandon</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">How to Improve Your Website's Loading Speed Performance</a></h5>
                                <p>This can take many forms, including blog posts, videos, social media updates</p>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two  hover-secondary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
   
        
        <!-- Contact Form Area start -->
        <section class="contact-form-area pb-130 rpb-100">
            <div class="container px-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-info-part rmb-55" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-50">
                                <h2>Ready to get started? Fill out the form below, and we'll be in touch shortly</h2>
                            </div>
                            <div class="contact-info-wrap bordered br-10 overflow-hidden">
                                <div class="row no-gap">
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                                            <div class="text">57 Main Street, d-block Melbourne, Australia</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-envelope"></i></div>
                                            <div class="text">
                                                <a href="mailto:support@gmail.com">support@gmail.com</a><br>
                                                <a href="www.sayan.net" target="_blank">www.sayan.net</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-phone-volume"></i></div>
                                            <div class="text">
                                                <a href="callto:+880(123)45688">+880 (123) 456 88</a><br>
                                                <a href="callto:+001(234)56897">+001 (234) 56897</a>
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
                        <form class="contact-form bgc-lighter z-1 rel" name="contactForm" action="#" method="post" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <h3>Get In Touch</h3>
                            <p>Contact us today to schedule consultation to expert team</p>
                            <div class="row gap-20 mt-20">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Fernando H. Cruz" value="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone_number">Phone</label>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-25">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <select name="subject" id="subject">
                                            <option value="value1">Discussed for</option>
                                            <option value="value2">Getting Service</option>
                                            <option value="value3">Searching Job</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message Us</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="write here" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn btn-small bgc-secondary" data-hover="Send Message">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Area end -->
    <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
