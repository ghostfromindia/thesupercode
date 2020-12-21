@extends('client.layout.base')

@section('content')

    <section class="ptb-100 overflow-hidden primary-bg">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white py-5">
                        <div class="headline mb-4">
                            <p class="mb-0"><i class="fas fa-bell rounded-circle mr-2"></i> <span class="font-weight-bold">30% Discount </span> first annual purchase</p>
                        </div>
                        <h1 class="text-white">Unlimited Domain & Hosting in One Platform</h1>
                        <p class="lead">A ton of website hosting options, 99.9% uptime guarantee, free SSL certificate, easy WordPress installs.</p>

                        <div class="action-btns mt-4">
                            <a href="#" class="btn btn-brand-03 btn-lg">Get Started Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="img-wrap">
                        <img src="{{asset('client/desktop')}}/assets/img/hero-home.svg" alt="hosting" class="img-fluid">
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--hero section end-->


    <div class="feature-section ptb-100 ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                        <p>Authoritatively transform functionalized information without cross-platform convergence. Quickly reconceptualize cross-unit e-markets without superior products. Appropriately foster timely collaboration and idea-sharing rather than magnetic potentialities. Authoritatively restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                        <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/desktop')}}/assets/img/services.svg" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/desktop')}}/assets/img/create-website.svg" class="img-fluid" alt="server room">
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>Our Own Interfaces for All Management Processes</h2>
                        <p>Authoritatively transform functionalized information without cross-platform convergence. Quickly reconceptualize cross-unit e-markets without superior products. Appropriately foster timely collaboration and idea-sharing rather than magnetic potentialities. Authoritatively restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                        <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--call to action start-->
    <section class="ptb-60 primary-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="cta-content-wrap text-white">
                        <h2 class="text-white">24/7 Expert Hosting Support Our Customers Love</h2>
                        <p>Objectively innovate high compellingly maintain progressively pursue mission-critical information quality imperatives. </p>
                    </div>
                    <div class="support-action d-inline-flex flex-wrap">
                        <a href="mailto:support@yourdomain.com" class="mr-3"><i class="fas fa-comment mr-1 color-accent"></i> <span>support@yourdomain.com</span></a>
                        <a href="tel:+00123456789" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> <span>+00123456789</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-none d-lg-block">
                    <div class="cta-img-wrap text-center">
                        <img src="{{asset('client/desktop')}}/assets/img/call-center-support.svg" width="250" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->


    <section class="review-section ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2>Our Lovely Client Say About Us</h2>
                        <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Amazing template</h5>
                                <p>Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Objectively implement strategic niches through.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Best template for app</h5>
                                <p>Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Tony Roy</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Efficiently innovate app</h5>
                                <p>Continually redefine sticky channels whereas extensive "outside the box" thinking. Rapidiously supply focused schemas vis-a-vis optimal users.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Uniquely mesh flexible</h5>
                                <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-4.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Compellingly empower app</h5>
                                <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Holisticly reintermediate</h5>
                                <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Uniquely mesh flexible</h5>
                                <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Compellingly empower app</h5>
                                <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Holisticly reintermediate</h5>
                                <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/desktop')}}/assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ana Joly</h6>
                                    <span>BizBite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection