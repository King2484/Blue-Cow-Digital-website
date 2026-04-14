        <!-- footer area start -->
        <footer class="main-footer bgc-black text-white">
            <div class="container px-sm-0 bordered-x py-100">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-info-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-30">
                                <h2>Ready To Take Your SEO to the Next Level?</h2>
                                <p>Contact us today to schedule a consultation or learn more about our services</p>
                            </div>
                            
                            <div class="contact-info-two-item">
                                <div class="icon"><i class="flaticon-world-map"></i></div>
                                <div class="text">
                                    Main Location
                                    <span class="h6">57 Main Street, Melbourne, Australia</span>
                                </div>
                            </div>
                            <div class="contact-info-two-item">
                                <div class="icon"><i class="flaticon-email"></i></div>
                                <div class="text">
                                    Email Address
                                    <span class="h6"><a href="mailto:support@gmail.com">support@gmail.com</a></span>
                                </div>
                            </div>
                            <div class="contact-info-two-item">
                                <div class="icon"><i class="flaticon-call"></i></div>
                                <div class="text">
                                    Need Helps
                                    <span class="h6"><a href="callto:+000(123)45688">+000 (123) 456 88</a></span>
                                </div>
                            </div>
                            
                            <div class="logo mt-60 rmt-35">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/BCDLOGO.png') }}" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-white">
                        <form class="contact-form style-two z-1 rel" name="contactForm" action="#" method="post" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <h3>Get In Touch</h3>
                            <p>Contact us today to schedule consultation to expert team</p>
                            <div class="row mt-30">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" value="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone No" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0">
                                        <ul class="radio-filter mb-25">
                                            <li>
                                                <input class="form-check-input" type="radio" checked="" name="ByActivities" id="activity1">
                                                <label for="activity1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="theme-btn bgc-secondary" data-hover="Send Us  Message">
                                            <span>Send Us  Message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container px-sm-0 bordered-x bordered-top pt-30 pb-15">
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