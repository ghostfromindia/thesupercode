@extends('client.layout.base')

@section('title','Top Subscribed youtube channels in Kerala')
@section('description','Get the list of top subscribed youtube channels like Mazhavil Manorama, Flowers Comedy, Karikku')
@section('canonical',url()->current())
@section('url',url()->current())

@section('content')


    <section class="ptb-100 overflow-hidden primary-bg no-padding">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white py-5">
                        <h1 class="text-white">Top Subscribed youtube channels in Kerala</h1>
                        <p class="lead">Most subscribed channels on {{date('Y m d')}}</p>

                        <div class="action-btns mt-4">
                            <a href="{{url('youtube-analysis/most-viewed-channels')}}" class="btn btn-brand-03 btn-lg">Most viewed youtube channels</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="img-wrap">
                        @foreach($channels as $obj)
                        <img src="@if(!empty($obj->url)) {{asset($obj->url)}} @endif" alt="{{$obj->channel_name}}" style="width: 50px;height: 50px" class="img-fluid">
                            @if($loop->index == 39) @break @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--hero section end-->



    <div class="container">
        <div class="col-md-12" align="center">

            <div class="row">

                @foreach($channels as $obj)
                <div class="col-md-4">

                    <div class="border single-review-wrap bg-white p-4 m-3">
                        <div class="review-body">
                            <h5>{{subscriberFormat($obj->subscriber_count)}}</h5>
                            <p>Popular creator in  <a href="{{url('youtube-analysis/category/'.$obj->ycslug)}}">{{$obj->category_name}}</a> category.</p>
                        </div>
                        <div class="review-author d-flex align-items-center">
                            <div class="author-avatar">
                                @if(!empty($obj->url))
                                    <img src="{{asset($obj->url)}}" width="64" alt="{{$obj->channel_name}}" class="rounded-circle shadow-sm img-fluid mr-3">
                                    @else
                                    <img src="https://img.icons8.com/ultraviolet/80/000000/change-user-male.png" width="64" alt="{{$obj->channel_name}}" class="rounded-circle shadow-sm img-fluid mr-3">
                                @endif
                            </div>
                            <div class="review-info">
                                <a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}">
                                <h6 class="mb-0">{{$obj->channel_name}}</h6>
                                <span>#{{$loop->index+1}}</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>





        </div>
    </div>


@endsection