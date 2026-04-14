        <!-- footer area start -->
        <footer class="main-footer bgc-black text-white">
            <div class="container bordered-x pt-80 pb-20" style="background-image: url(assets/images/background/footer-bg-dots.png);">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-sm-8" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="footer-widget footer-newsletter">
                            <div class="footer-logo mb-20">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/BCDLOGO.png') }}" alt="Logo"></a>
                            </div>
                            <p>High-quality content the heart successful marketing strategy drives engage.</p>
                            <form class="newsletter-form mt-25" action="#">
                                <label for="news-email"><i class="fas fa-envelope"></i></label>
                                <input id="news-email" type="email" placeholder="Email Address" required>
                                <button type="submit" class="theme-btn btn-small bgc-secondary hover-secondary" data-hover="Subscribe">
                                    <span>Subscribe</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="footer-widget footer-links">
                            <div class="footer-title">
                                <h6>Features</h6>
                            </div>
                            <ul>
                                <li><a href="{{ route('serviceDetails') }}">Page builder</a></li>
                                <li><a href="{{ route('serviceDetails') }}">Theme options</a></li>
                                <li><a href="{{ route('serviceDetails') }}">Modern builder</a></li>
                                <li><a href="{{ route('serviceDetails') }}">Template library</a></li>
                                <li><a href="{{ route('serviceDetails') }}">Support Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="footer-widget footer-links">
                            <div class="footer-title">
                                <h6>Product</h6>
                            </div>
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Careers</a></li>
                                <li><a href="{{ route('blog') }}">News</a></li>
                                <li><a href="{{ route('about') }}">Media Kit</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="footer-widget footer-links">
                            <div class="footer-title">
                                <h6>Company</h6>
                            </div>
                            <ul>
                                <li><a href="{{ route('about') }}">Overview</a></li>
                                <li><a href="{{ route('servicesTwo') }}">Features</a></li>
                                <li><a href="{{ route('services') }}">Solutions</a></li>
                                <li><a href="{{ route('about') }}">Tutorials</a></li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <div class="footer-widget footer-contact">
                            <div class="footer-title">
                                <h6>Follow Us</h6>
                            </div>
                            <div class="social-style-one mt-15">
                                <a href="{{ route('contact') }}"><i class="fab fa-facebook"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-twitter-square"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-youtube"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-pinterest"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container bordered-x bordered-top pt-30 pb-15">
                    <div class="row">
                       <div class="col-lg-5">
                            <div class="copyright-text text-center text-lg-start">
                                <p>Copyright © <a href="{{ route('home') }}">BCD</a>, all rights reserved.</p>
                            </div>
                       </div>
                       <div class="col-lg-7 text-center text-lg-end">
                           <ul class="footer-bottom-nav">
                               <li><a href="{{ route('about') }}">Refund</a></li>
                               <li><a href="{{ route('about') }}">Privacy Policy</a></li>
                               <li><a href="{{ route('faqs') }}">FAQs</a></li>
                           </ul>
                       </div>
                    </div>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><i class="far fa-arrow-up"></i></button>
                </div>
            </div>
        </footer>
        <!-- footer area end -->