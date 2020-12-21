@extends('client.layout.base')

@section('title','Youtube channel analysis of '.$channel->channel_name)
@section('description',$channel->channel_name.' currently having '.subscriberFormat($channel->subscriber_count).' subscribers on '.date('Y-m-d'))
@section('canonical',url()->current())
@section('url',url()->current())


@section('content')



    <!--hero section start-->
    <section class="hero-equal-height ptb-120 gradient-overlay bg-image">
        <div class="background-image-wraper custom-overlay" style="background: url('{{asset('client/desktop')}}/assets/img/hero-offer-bg.svg')no-repeat center center / cover; opacity: 1;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="hero-content-left text-white text-center">
                        <h1 class="text-white big-text mb-0"><span>Profile of {{$channel->channel_name}}</span> {{subscriberFormat($channel->subscriber_count)}}</h1>
                        <a href="https://youtube.com/channel/{{$channel->channel_id}}" class="btn btn-danger btn-lg mb-3">View YouTube Channel</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--hero section end-->


    <div class="container">

        <div class="col-md-12">
            <div class="row">
                @foreach($stats as $obj)
                    <div class="col-12">
                        <div>
<div style="display: inline-block"><img src="https://img.icons8.com/officel/50/000000/planner.png" width="20px"/>  {{\Carbon\Carbon::parse($obj->statistics_date)->format('d F Y')}}</div>


                            @if($obj->yesterday())
                            New views : {{subscriberFormat($obj->view_count - $obj->yesterday()->view_count)}}
                            @else
                            Total view : {{subscriberFormat($obj->view_count)}}
                            @endif

                            Subscribes : {{subscriberFormat($obj->subscriber_count)}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection