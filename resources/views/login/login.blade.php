@extends('login.base')

@section('content')
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-split nk-split-page nk-split-md">
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">

                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                                <a href="{{url('/')}}" class="logo-link">
                                    <img class="logo-light logo-img logo-img-lg" src="{{asset('thesupercode-logo.png')}}" srcset="{{asset('thesupercode-logo.png')}}" alt="logo">
                                    <img class="logo-dark logo-img logo-img-lg" src="{{asset('thesupercode-logo.png')}}" srcset="{{asset('thesupercode-logo.png')}}" alt="logo-dark">
                                </a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Sign-In (Development mode : only access to admin)</h5>
                                    <div class="nk-block-des">
                                        <p>Access the super code panel using your email and passcode.</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            @include('admin.include.notifications')
                            <form action="{{url('login')}}" method="post" id="login-form"> @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email or Username</label>
                                    </div>
                                    <input type="email" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address or username">
                                </div><!-- .foem-group -->
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">Passcode</label>
                                        <a class="link link-primary link-sm" tabindex="-1" href="{{url('forget-password')}}">Forgot Code?</a>
                                    </div>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter your passcode">
                                    </div>
                                </div><!-- .foem-group -->
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                </div>
                            </form><!-- form -->
                            <div class="form-note-s2 pt-4"> New on our platform? <a href="{{url('register')}}">Create an account</a>
                            </div>
                            <div class="text-center pt-4 pb-3">
                                <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                            </div>
                            <ul class="nav justify-center gx-4">
                                <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                            </ul>
                        </div><!-- .nk-block -->

                    </div><!-- .nk-split-content -->
                    <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true" >

                    </div><!-- .nk-split-content -->
                </div><!-- .nk-split -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
@endsection

@section('bottom')
    <script>
        $('#login-form').validate({
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                }
            },
            messages : {
                email : {
                    required : 'Email field is mandatory',
                    email : 'Please enter a valid email address'
                },
                password: {
                    required : 'Password field is mandatory',
                }
            },

        })
    </script>
@endsection