<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title','Latest News &amp; Teams, Probable 11 and predictions for Dream11 | Fantasy News')</title>
        <meta name="keywords" content="@yield('keywords','Dream11 Probable11 Predictions News')">
        <meta name="description" content="@yield('keywords','Dream11 Latest News, predictions, Teams, and selected Probable11 from Fantasy News.')">

        <link rel="stylesheet" href="{{asset('client/quiz/bootstrap-4/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('client/quiz/custom/common.css')}}">
        <link rel="stylesheet" href="{{asset('client/quiz/owl/owl.carousel.min.css')}}">
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    </head>

    @section('head') @show
    <body>

        @include('client.modules.quiz.components.header')

        <div class="container">
            @section('content') @show
        </div>


        <section id="footer-menu">
            <ul>
                <li><a href="{{url('quiz')}}" style="color: unset"><i class="lni lni-home"></i><span>Home</span></a></li>
                <li><a href="{{url('quiz/quiz')}}" style="color: unset"><i class="lni lni-grid"></i><span>Categories</span></a></li>
                <li><a href="{{url('quiz')}}" style="color: unset"><i class="lni lni-user"></i><span>Profile</span></a></li>
            </ul>
        </section>


        <script src="{{asset('client/quiz/jquery/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('client/quiz/bootstrap-4/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('client/quiz/owl/owl.carousel.min.js')}}"></script>
    @section('bottom') @show



        <script>
            $('.owl-carousel-1').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay : true,
                autoWidth:true,
                nav : false,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:false
                    }
                }
            })

            $('.owl-carousel-2').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay : true,
                autoWidth:true,
                nav : false,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:false
                    }
                }
            })
        </script>

        <script>
            $( document ).ready(function() {
                var element = document.getElementById('head-0');
                var rect = element.getBoundingClientRect();
                $('header').attr('style','height:'+rect.bottom+'px;margin-bottom:50px;')
                console.log('asa',rect)
            });
        </script>
    </body>
</html>