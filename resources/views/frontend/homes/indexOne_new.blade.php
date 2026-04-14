@extends('frontend.layouts.app')
@section('title', 'Index One')
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
                        <h1>Building Responsive Websites</h1>
                        <p>Web design is a critical aspect of creating an effective online presence for any business or
                            individual. A well-designed website not only reflects a brand's identity but also enhances user
                            experience, ensuring visitors can easily</p>
                        <a href="{{ route('projectGrid') }}" class="theme-btn mt-30 rmt-15 mb-65 rmb-30"
                            data-hover="Explore Our Projects">
                            <span>Explore Our Projects</span>
                        </a>
                        <h5>5m+ Trusted Clients</h5>
                        <div class="trusted-clients mt-25">
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="50"
                                src="{{ asset('/assets/images/hero/author1.jpg') }}" alt="Author">
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100"
                                src="{{ asset('/assets/images/hero/author2.jpg') }}" alt="Author">
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150"
                                src="{{ asset('/assets/images/hero/author3.jpg') }}" alt="Author">
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200"
                                src="{{ asset('/assets/images/hero/author4.jpg') }}" alt="Author">
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250"
                                src="{{ asset('/assets/images/hero/author5.jpg') }}" alt="Author">
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300"
                                src="{{ asset('/assets/images/hero/author6.jpg') }}" alt="Author">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-shapes">
            <div class="hero-image" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                <img src="{{ asset('/assets/images/hero/hero-four.jpg') }}" alt="">
            </div>
        </div>
    </section>
    <!-- Hero Area End -->
