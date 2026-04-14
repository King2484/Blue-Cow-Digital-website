        <!-- main header -->
        <header class="main-header header-one white-menu menu-absolute">
            <!--Header-Upper-->
            <div class="header-upper bordered-bottom bgc-black">
                <div class="container-fluid clearfix">
                   
                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/BCDLOGO.png') }}" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer me-lg-auto ps-lg-5 ms-xxl-4 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header rpy-10">
                                   <div class="mobile-logo">
                                       <a href="{{ route('home') }}">
                                            <img src="{{ asset('/assets/images/logos/BCDLOGO.png') }}" alt="Logo" title="Logo">
                                       </a>
                                   </div>
                                   
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        @include('frontend.includes.partials.navbar')
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        
                        <!-- Menu Button -->
                        <div class="menu-btns d-lg-flex align-items-center">
                            <div class="header-number me-5 d-none d-xl-block">
                                <i class="fas fa-phone me-1"></i>
                                <a href="callto:+000(123)889933">+000 (123) 88 99 33</a>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn btn-small color-white" data-hover="Let's Talk">
                                <span>Let's Talk</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>