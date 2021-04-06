<header >
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="{{url('/')}}" data-tooltip="Kerala YouTube Anaylysis">QUIZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('quiz')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('quiz/category/psc')}}">PSC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('quiz/category/current-affairs')}}">Current Affairs</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    @if(url()->full() == url('quiz'))
    <div class="container">
        <h4>Top trending quiz categories</h4>

        <div class="owl-carousel-1 owl-carousel">

            @foreach($categories as $obj)
                <div>
                    <a href="{{url('quiz/category/'.$obj->slug)}}">
                        <div class="card" style="width: auto">
                            <div id='head-{{$loop->index}}' class="head" style="background-image: url({{$obj->youtuber_image()}});
                                    width: 100%;
                                    height: 80px;
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: center;">

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12" align="center">
                                        <span style="color: black"> {{$obj->category_name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
    @ENDIF

</header>