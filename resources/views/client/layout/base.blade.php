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

        <link rel="stylesheet" href="{{asset('client/bootstrap-4.5.3/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('client/style.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Condiment&family=Cookie&family=Dancing+Script:wght@700&family=Merienda+One&family=Pacifico&family=Sofia&family=Yellowtail&display=swap" rel="stylesheet">

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
                font-size: 160px;
                font-weight: 100;
                display: contents;
                padding: 0;
            }



        </style>



    </head>
    <body>

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

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">the<span class="primary-color">super</span>code.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('youtube-analysis')}}"><img src="https://img.icons8.com/plasticine/50/000000/youtube.png" width="20px"/> Youtube Analysis</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        @section('content')
            @show



        <footer>

        </footer>
        <script src="{{asset('client/jquery/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('client/bootstrap-4.5.3/js/bootstrap.js')}}"></script>

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
    </body>
</html>