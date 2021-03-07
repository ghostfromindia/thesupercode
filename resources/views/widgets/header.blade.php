<header >
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="{{url('/')}}" data-tooltip="Kerala YouTube Anaylysis">KYTA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('youtube-analysis')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('youtube-analysis')}}">IPL 2021</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>


    <div class="container">
        <h4>Top trending youtube categories in Kerala</h4>

        <div class="owl-carousel-1 owl-carousel">

            @foreach($categories as $obj)
                <div>
                    <a href="{{url('youtube-analysis/category/'.$obj->slug)}}">
                        <div class="card" style="width: auto">
                            <div id='head-{{$loop->index}}' class="head" style="background-image: url({{$obj->youtuber_image()}});
    width: 100%;
    height: 80px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;">
                                <h4 class="small-white-title">
                                    {{$obj->category_name}}
                                </h4>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12" align="center">
                                        {{$obj->category_name}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>

</header>