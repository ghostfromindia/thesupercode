<header id="header" class="header-main">
    <!--main header menu start-->
    <div id="logoAndNav" class="main-header-menu-wrap bg-transparent navbar-static-top">
        <div class="container">
            <nav class="js-mega-menu navbar navbar-expand-md header-nav navbar-static-top">

                <!--logo start-->
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('thesupercode-logo.png')}}" width="200" alt="logo" class="img-fluid" /></a>
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

                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="{{url('youtube-analysis')}}">Youtube Analysis</a>
                        </li>


                        <!--button start-->
                        {{--<li class="nav-item header-nav-last-item d-flex align-items-center">--}}
                            {{--<a class="btn btn-brand-03 animated-btn" href="{{url('login')}}" target="_blank">--}}
                                {{--<span class="fa fa-user pr-2"></span> Client Area--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <!--button end-->
                    </ul>
                </div>
                <!--main menu end-->
            </nav>
        </div>
    </div>
    <!--main header menu end-->
</header>