@extends('client.layout.base')

@section('content')

    <section class="ptb-100 overflow-hidden primary-bg no-padding">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white py-5">
                        <h1 class="text-white">We create websites</h1>
                        <p class="lead">Are you planning to have a website? you are in right place. we create lighting fast website for you business</p>

                        <div class="action-btns mt-4">
                            <a href="#" class="btn btn-brand-03 btn-lg">Get a call back now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="img-wrap">
                        <img src="{{asset('client/images/')}}/intro-bg-3.gif" alt="the super code intro image" class="img-fluid">
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
                        <h2>Step 1 : Information gathering and Planning</h2>

                        <p>Begining of the project, In this step we took a requirement analysis from client side. We will collect the essential details from clients to get a detail understanding of project. Once we done that our internal team will gather and analysis the requirement and will discuss the scope of project. Once we done the discussion we will arrange a call with the client to inform about time periord of the project and technologies we are going to use that for project. next is step 2</p>


                    </div>
                </div>
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/images/step-1-requirment-analysis.png')}}" class="img-fluid" alt="Step 1 : Information gathering and Planning">
                    </div>
                </div>
            </div>


            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/images/step-2-desiging.png')}}" class="img-fluid" alt="Step 2 : designing">
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>Step 2 : designing</h2>
                        <p>For a successful online business design is an important factor. we create a specific design  that will satisfy the target audience.
                            we will structure your page in a systematic manner so that it look would appealing to the customers</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>Step 3 : Development</h2>

                        <p>Once we completed with designing of development we will start integrates codes on it. we will enabled dynamic capabilities to the design. we will use latest technologies and its updated version to make the site suitable for running smoothly for at least 2-3 years</p>


                    </div>
                </div>
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/images/step-3-development.png')}}" class="img-fluid" alt="Step 3 : Development">
                    </div>
                </div>
            </div>


            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/images/step-4-content-writing.png')}}" class="img-fluid" alt="Step 4 : Content writing">
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>Step 4 : Content writing</h2>
                        <p>Once development complete your site is like a new born baby, you have to feed it with required content. excelent content engage users in your site and it will increase value of the website. content is the king of any website so content writing is very important too.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>Step 5 : Testing</h2>

                        <p>Once we complete all the above steps we start testing product from various aspects like Functionality Testing, Usuablity Testing, Performance Testing ...etc. if we find any issues in testing we will fix those in order of its priority. Once all the issues are resolved we deploy the project in to the server.</p>


                    </div>
                </div>
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/images/step-5-testing.png')}}" class="img-fluid" alt="Step 5 : Testing">
                    </div>
                </div>
            </div>


            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="{{asset('client/images/step-6-maintenance.gif')}}" class="img-fluid" alt="Step 6 : Maintenance">
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>Step 6 : Maintenance</h2>
                        <p>Once the site is deployed, we never leave you there. we keep track the website for couple of weeks to analysis its performance. Backup management, server migrations, Database managemnts..etc will managed.</p>
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
                        <h2 class="text-white">Currently you can contact us through email</h2>
                        <p>When the project begins, we will expand out contact circle to serve you better. as of now please contact us through our email address</p>
                    </div>
                    <div class="support-action d-inline-flex flex-wrap">
                        <a href="mailto:info@thesupercode.com" class="mr-3"><i class="fas fa-comment mr-1 color-accent"></i> <span>info@thesupercode.com</span></a>

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
                        <p>We had clients over various countries, we are more than happy to share their thought on us </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Pleased with the result</h5>
                                <p>Very pleased with the result, creative and he got what I wanted quickly. I will use him again, great work!!</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/images/the-super-code-client-1233.jpg')}}" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Freddy kjensmo</h6>
                                    <span>Fiverr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Professional! </h5>
                                <p>I purchased my usual gig because thesupercode.com is an amazing professional that always exceed my requirements and delivers on time.</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/images/the-super-code-client-1232.jpg')}}" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Gee</h6>
                                    <span>Fiverr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Simply amazing</h5>
                                <p>What was it like working with thesupercode.com? Well simply amazing! He understands the requirements fully and even goes beyond what is expected!</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/images/the-super-code-client-tina.jpg')}}" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Tina Quinn</h6>
                                    <span>Fiverr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>Punctual</h5>
                                <p>On time, easy to communicate. made the website exactly i want it. will keep in touch</p>
                            </div>
                            <div class="review-author d-flex align-items-center">
                                <div class="author-avatar">
                                    <img src="{{asset('client/images/the-super-code-client-ashish.jpg')}}" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                    <span>“</span>
                                </div>
                                <div class="review-info">
                                    <h6 class="mb-0">Ashish Paul</h6>
                                    <span>Ecom</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection