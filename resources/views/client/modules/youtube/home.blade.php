@extends('client.layout.base')

@section('title','Top Subscribed youtube channels in Kerala')
@section('description','Get the list of top subscribed youtube channels like Mazhavil Manorama, Flowers Comedy, Karikku')
@section('canonical',url()->current())
@section('url',url()->current())

@section('content')



    <!--hero section start-->
    <section class="ptb-120 gradient-bg-alt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">Top Subscribed youtube channels in Kerala</h1>
                        <p class="lead">Most subscribed channels on {{date('Y m d')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-md-12" align="center">

            <div class="row">
                <div class="col-md-12" align="center">
                    <a href="{{url('youtube-analysis/most-viewed-channels')}}">Click here</a> to see the most viewed youtube channels
                </div>

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