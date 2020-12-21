<header id="header" class="header-main">
    <!--main header menu start-->
    <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
        <div class="container">
            <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                <!--logo start-->
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('logo-thesupercode.jpg')}}" width="80" alt="logo" class="img-fluid" /></a>
                <!--logo end-->

                <!--responsive toggle button start-->
                <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="ti-menu"></span>
                        </span>
                </button>
                <!--responsive toggle button end-->

                <!--main menu start-->
                <div id="navBar" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto main-navbar-nav">

                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{url('/')}}">Home</a>
                        </li>


                        <!--home start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                            <a id="homeMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false">Service</a>

                            <!--home mega menu start-->
                            <div class="hs-mega-menu main-sub-menu w-100" aria-labelledby="homeMegaMenu">
                                <div class="row no-gutters">
                                    <div class="col-lg-5 col-sm-6 col-12 gray-light-bg custom-radius-left">
                                        <div class="menu-item-wrap p-4">
                                            <h6>How we work</h6>
                                            <ul class="list-unstyled tech-feature-list">
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Brainstorm</strong> Requirment Analysis</small></li>
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Design</strong> Design & Document Prototype</small></li>
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Development</strong> Iterations,Demo and Feedback</small></li>
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Quality Assurance</strong> Testing and Feedback</small></li>
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Deployment</strong> Production and Support</small></li>
                                            </ul>
                                            <a class="btn btn-brand-03 mt-3" href="{{url('how-we-work')}}">Learn More <span
                                                        class="fas fa-angle-right ml-2"></span></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-sm-6 col-12 custom-radius-right">
                                        <div class="row no-gutters p-4">
                                            <div class="col-12">
                                                <span class="sub-menu-title pl-3">Our Popular Services</span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <i class="fas fa-star text-success mr-2"></i>
                                                        <small class="u-header__promo-text">Web Development</small>
                                                    </a>
                                                </div>
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <i class="fas fa-star text-success mr-2"></i>
                                                        <small class="u-header__promo-text">Android Development</small>
                                                    </a>
                                                </div>
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <i class="fas fa-star text-success mr-2"></i>
                                                        <small class="u-header__promo-text">Landing Pages</small>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <i class="fas fa-star text-success mr-2"></i>
                                                        <small class="u-header__promo-text">Hosting</small>
                                                    </a>
                                                </div>
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <i class="fas fa-star text-success mr-2"></i>
                                                        <small class="u-header__promo-text">E-commerce</small>
                                                    </a>
                                                </div>
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <i class="fas fa-star text-success mr-2"></i>
                                                        <small class="u-header__promo-text">Payment gateway</small>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--home mega menu end-->
                        </li>
                        <!--home end-->


                        <!--domain start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                            <a id="domainMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Tools</a>
                            <!-- Demos - Mega Menu -->
                            <div class="hs-mega-menu main-sub-menu" style="width: 660px" aria-labelledby="domainMegaMenu">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="menu-item-wrap p-3">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{url('youtube-analysis')}}">
                                                    <div class="d-flex align-items-center pb-1">
                                                        <i class="fab fa-youtube  mr-2 color-accent"></i>
                                                        <span class="u-header__promo-title">Youtube Analysis</span>
                                                    </div>
                                                    <small class="u-header__promo-text">Kerala youtuber analysis</small>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->

                                            <!--menu title with subtitle and icon item end-->
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 gray-light-bg custom-radius-right">
                                        <div class="menu-item-wrap p-4">
                                            <h6>#1 Youtube Analysis</h6>
                                            <ul class="list-unstyled tech-feature-list">
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>100%</strong> Free</small></li>
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Daily </strong> Update Guarantee</small></li>
                                                <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Monthly</strong>  report</small></li>

                                            </ul>
                                            <a class="btn btn-brand-03 mt-3" href="#">Learn More <span
                                                        class="fas fa-angle-right ml-2"></span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Demos - Mega Menu -->
                        </li>
                        <!--domain end-->



                        <!--about start-->
                        <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                            <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Company</a>

                            <!--about submenu start-->
                            <div class="hs-mega-menu main-sub-menu" style="width: 320px" aria-labelledby="aboutMegaMenu">
                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{url('contact')}}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{asset('client/desktop')}}/assets/img/chat-mobile.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Contact Us</span>
                                                <small class="u-header__promo-text">Face any problem? contact with us
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{url('about-us')}}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{asset('client/desktop')}}/assets/img/community.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">About Us</span>
                                                <small class="u-header__promo-text">We are leading development company
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!--menu title with subtitle and icon item start-->
                                <div class="title-with-icon-item">
                                    <a class="title-with-icon-link" href="{{url('blog')}}">
                                        <div class="media align-items-center">
                                            <img class="menu-titile-icon" src="{{asset('client/desktop')}}/assets/img/blog.svg" alt="SVG">
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Company Blog</span>
                                                <small class="u-header__promo-text">Industry latest technology news &
                                                    tips
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--menu title with subtitle and icon item end-->
                            </div>
                            <!--about submenu end-->
                        </li>
                        <!--about end-->

                        <!--button start-->
                        <li class="nav-item header-nav-last-item d-flex align-items-center">
                            <a class="btn btn-brand-03 animated-btn" href="{{url('login')}}" target="_blank">
                                <span class="fa fa-user pr-2"></span> Client Area
                            </a>
                        </li>
                        <!--button end-->
                    </ul>
                </div>
                <!--main menu end-->
            </nav>
        </div>
    </div>
    <!--main header menu end-->
</header>