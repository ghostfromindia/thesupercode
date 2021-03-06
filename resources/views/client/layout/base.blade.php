@php
    $string = preg_replace("/[^ \w]+/", "", url()->current());
    if(file_exists(public_path().'/web/'.$string.'.html')){
        echo  file_get_contents(public_path().'/web/'.$string.'.html');
        exit;
    }
    ob_start();
@endphp
<html>
    <head>
        <meta name=”robots” content="index, follow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>@yield('title','The Super Code | Get it done on times')</title>
        <meta name="description" content="@yield('description','we provide IT Support and IT Services for all type of business, including web development. Contact us today')">
        <link rel="canonical" href="@yield('canonical')" />


        <meta property="og:type" content="article" />
        <meta property="og:title" content="@yield('title','The Super Code | Get it done on times')" />
        <meta property="og:description" content="@yield('description','we provide IT Support and IT Services for all type of business, including web development. Contact us today')" />
        <meta property="og:image" content="@yield('og_image')" />
        <meta property="og:url" content="@yield('url')" />
        <meta property="og:site_name" content="The Super Code" />

        <link rel="icon" href="{{asset('icons')}}/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('icons')}}/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('icons')}}/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('icons')}}/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('icons')}}/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('icons')}}/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('icons')}}/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('icons')}}/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('icons')}}/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('icons')}}/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('icons')}}/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('icons')}}/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icons')}}/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('icons')}}/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icons')}}/favicon-16x16.png">
        <link rel="manifest" href="{{asset('icons')}}/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('icons')}}/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <link rel="stylesheet" href="{{asset('client/desktop')}}/assets/css/main.css">

        <link rel="stylesheet" href="{{asset('client/style.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Condiment&family=Cookie&family=Dancing+Script:wght@700&family=Merienda+One&family=Pacifico&family=Sofia&family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">


        <style>
            .font-1{font-family: 'Amatic SC', cursive;}
            .font-2{font-family: 'Condiment', cursive;}
            .font-3{font-family: 'Cookie', cursive;}
            .font-4{font-family: 'Dancing Script', cursive;}
            .font-5{font-family: 'Merienda One', cursive;}
            .font-6{font-family: 'Pacifico', cursive;}
            .font-7{font-family: 'Sofia', cursive;}
            .font-8{font-family: 'Yellowtail', cursive;}

            @php
             $color_array = ['#eb4d4b','#30336b','#be2edd','#7ed6df','#eb4d4b','#6ab04c','#ffbe76','#4834d4','#130f40','#535c68'];
            @endphp
            @for($i=0;$i<10;$i++)
            .color-{{$i+1}} {
                background: -webkit-linear-gradient(45deg, {{$color_array[rand(0,9)]}}, {{$color_array[rand(0,9)]}});
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            @endfor

            h2, .h2 {
                font-size: 2rem;
                font-weight: 100;
            }

            td .badge{
                padding:5px;
                background: linear-gradient(45deg, #6ab04c, #0062cc);
                color: white;
                border-radius: 5px;
                margin-right: 5px;
            }

            td .badge a{
                color: white;
            }

            td .badge a:hover{
                color: white;
            }

            .sub-count{
                font-size: 60px;
                font-weight: 100;
                display: contents;
                padding: 0;
            }

            .gradient-bg-alt {
                background: #2c3e50 !important;
            }

            .gradient-bg {
                background: #2c3e50 !important;
            }

            .ptb-120 {
                padding: 80px 0 0;
            }



        </style>

        @section('head') @show

        <script data-ad-client="ca-pub-5595711823084513" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6ES6WTG3MD"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-6ES6WTG3MD');
        </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TXSBNSC');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXSBNSC"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @auth
        @if(Auth::user()->is_admin == 1)
            <div style="background: rgb(0 0 0 / 0.8);
            color: white;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            position: fixed;
            bottom: 0px;
            z-index: 10;
            padding: 10px;
border-top-left-radius: 5px;
border-top-right-radius: 5px;">
                <a style="color: white" href="{{url('admin')}}">Admin</a>
                <a style="color: red;float: right" href="{{url('logout')}}">Logout</a>
            </div>
        @endif
    @endauth



    @include('client.desktop.common.header')



        @section('content')
            @show


    @include('client.desktop.common.footer')



    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">&copy; TheSuperCode Design Agency, All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="small-text" href="{{url('terms-condition')}}">Terms & Condition</a></li>
                            <li class="list-inline-item"><a class="small-text" href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
            <span class="fas fa-hand-point-up"></span>
        </div>

        <!--build:js-->
        <script src="{{asset('client/desktop')}}/assets/js/vendors/jquery-3.5.1.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/popper.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/bootstrap.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/bootstrap-slider.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/jquery.easing.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/owl.carousel.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/countdown.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/jquery.waypoints.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/jquery.rcounterup.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/magnific-popup.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/validator.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/vendors/hs.megamenu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <script src="{{asset('client/desktop')}}/assets/js/app.js"></script>
        <!--endbuild-->
      <script>
            var fontArray = ['font-1','font-2','font-3','font-4','font-5','font-6','font-7','font-8'];
            var colorArray = ['color-1','color-2','color-3','color-4','color-5','color-6','color-7','color-8','color-9','color-10'];
            var dom = $('#intro-showoff');
            setInterval(function () {
                var font = fontArray[Math.floor(Math.random() * fontArray.length)];
                var color = colorArray[Math.floor(Math.random() * colorArray.length)];
                dom.removeAttr('class').addClass(font).addClass(color);
            },500)
        </script>

    <script>
        $(function(){
            $.each(document.images, function(){
                var this_image = this;
                var src = $(this_image).attr('src') || '' ;
                if(!src.length > 0){
                    //this_image.src = options.loading; // show loading
                    var lsrc = $(this_image).attr('lsrc') || '' ;
                    if(lsrc.length > 0){
                        var img = new Image();
                        img.src = lsrc;
                        $(img).load(function() {
                            this_image.src = this.src;
                        });
                    }
                }
            });
        });
    </script>

    @auth
        @if(Auth::user()->is_admin == 1)

            <script>
                $('select[name=category]').on('change', function () {
                    $.post('admin/ytcategory/change-category',{_token:'{{csrf_token()}}','channel_id':$(this).data('id'),'category_id':$(this).val()}).done(function (data) {
                        alert('updated');
                    })
                })
            </script>

        @endauth
    @endauth




    @section('bottom')
@show
    </body>
</html>
@php
    if (!file_exists(public_path().'/web')) {
    mkdir(public_path().'/web', 0777, true);
    }

    if(strpos(url()->current(),'?') !== false){

    }else{
    $string = preg_replace("/[^ \w]+/", "", url()->current());
    file_put_contents(public_path().'/web/'.$string.'.html', ob_get_contents());
    }

@endphp