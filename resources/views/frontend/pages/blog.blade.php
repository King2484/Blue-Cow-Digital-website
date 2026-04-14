@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('meta_description', 'Read the latest web design, SEO, and digital marketing tips and insights from the Blue Cow Digital team. Stay ahead of the curve with our expert guides.')
@section('meta_keywords', 'web design blog, SEO tips, digital marketing articles, website advice, social media tips')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog Grid</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=725&h=437&fit=crop" alt="Banner">
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
        
        
        <!-- Blog Grid Area start -->
        <section class="blog-grid-page rel z-1">
            <div class="container bordered-x px-sm-0 py-130 rpy-100">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li><a href="#">SEO Services</a></li>
                                        </ul>
                                        <h5><a href="{{ route('blogDetails') }}">Boosting Local Visibility in a Competitive Market with SEO</a></h5>
                                        <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                    <div class="image">
                                        <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li><a href="#">Social Media Marketing</a></li>
                                        </ul>
                                        <h5><a href="{{ route('blogDetails') }}">Unlocking the Power of Paid Ads: A Social Media Marketing Guide</a></h5>
                                        <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li><a href="#">Marketing</a></li>
                                        </ul>
                                        <h5><a href="{{ route('blogDetails') }}">How to Improve Your Website's Loading Speed Performance</a></h5>
                                        <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                    <div class="image">
                                        <img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li><a href="#">SEO Services</a></li>
                                        </ul>
                                        <h5><a href="{{ route('blogDetails') }}">How to Craft a Winning Social Media Strategy from Scratch</a></h5>
                                        <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                    <div class="image">
                                        <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li><a href="#">Social Media Marketing</a></li>
                                        </ul>
                                        <h5><a href="{{ route('blogDetails') }}">Boosting Local Visibility in a Competitive Market with SEO</a></h5>
                                        <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li><a href="#">Marketing</a></li>
                                        </ul>
                                        <h5><a href="{{ route('blogDetails') }}">How to Improve Your Website's Loading Speed Performance</a></h5>
                                        <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <ul class="pagination pt-5 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <li class="page-item active">
                                <span class="page-link">
                                    1
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next <i class="far fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-10 ps-xl-5 rmt-65">
                        <div class="blog-sidebar">
                            
                            <div class="widget widget-search" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Search</h4>
                                <form action="#" class="default-search-form">
                                    <input type="text" placeholder="Search....." required="">
                                    <button type="submit" class="searchbutton far fa-search"></button>
                                </form>
                            </div>
                            
                            <div class="widget widget-category" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><a href="{{ route('blog') }}">Web Design</a></li>
                                    <li><a href="{{ route('blog') }}">SEO Optimization</a></li>
                                    <li><a href="{{ route('blog') }}">Mobile Apps Design</a></li>
                                    <li><a href="{{ route('blog') }}">Landing Pages</a></li>
                                    <li><a href="{{ route('blog') }}">Branding Design</a></li>
                                    <li><a href="{{ route('blog') }}">Motion & Animations</a></li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-news" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Recent News</h4>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=200" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">How to Improve Your Website User Experience: 10 Expert Tips</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=200" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">The Importance of Responsive Design in a Mobile-First World</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=200" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">The Role of Colour Theory in Effective Web Design</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-tags" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tag-clouds">
                                    <a href="{{ route('blog') }}">Design</a>
                                    <a href="{{ route('blog') }}">SMM</a>
                                    <a href="{{ route('blog') }}">Agency</a>
                                    <a href="{{ route('blog') }}">SEO</a>
                                    <a href="{{ route('blog') }}">Apps</a>
                                    <a href="{{ route('blog') }}">Dashboard</a>
                                    <a href="{{ route('blog') }}">Product</a>
                                    <a href="{{ route('blog') }}">UX/UI</a>
                                    <a href="{{ route('blog') }}">Marketing</a>
                                    <a href="{{ route('blog') }}">Animation</a>
                                </div>
                            </div>
                            
                            <div class="widget widget-gallery" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Gallery</h4>
                                <div class="gallery">
                                    <a href="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=200">
                                        <i class="far fa-plus"></i>
                                        <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Gallery">
                                    </a>
                                    <a href="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=200">
                                        <i class="far fa-plus"></i>
                                        <img src="https://images.pexels.com/photos/669614/pexels-photo-669614.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Gallery">
                                    </a>
                                    <a href="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=200">
                                        <i class="far fa-plus"></i>
                                        <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Gallery">
                                    </a>
                                    <a href="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=200">
                                        <i class="far fa-plus"></i>
                                        <img src="https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Gallery">
                                    </a>
                                    <a href="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=200">
                                        <i class="far fa-plus"></i>
                                        <img src="https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Gallery">
                                    </a>
                                    <a href="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=200">
                                        <i class="far fa-plus"></i>
                                        <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Gallery">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Grid Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
