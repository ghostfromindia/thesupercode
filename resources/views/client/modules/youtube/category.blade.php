@extends('client.layout.base')

@section('title','Top Subscribed '.$category->category_name.' youtube channels in Kerala')
@php $subs = ''; @endphp
@foreach($channels as $obj)
    @if($loop->index < 3)
    @php $subs .= $obj->channel_name.', '; @endphp
    @endif
@endforeach

@section('description','Get the list of top subscribed youtube channels like '.$subs)
@section('canonical',url()->current())
@section('url',url()->current())

@section('content')

    <!--hero section start-->
    <section class="hero-equal-height ptb-120 gradient-overlay bg-image" style="height: 50%;min-height: 0">
        <div class="background-image-wraper custom-overlay" style="background: url('{{asset('client/desktop')}}/assets/img/hero-offer-bg.svg')no-repeat center center / cover; opacity: 1;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="hero-content-left text-white text-center">
                        <h1 class="text-white big-text mb-0"><span>Top Subscribed {{$category->category_name}} youtube channels in Kerala</span> @php $total = 0; @endphp
                            @foreach($channels as $obj) @php $total += $obj->subscriber_count; @endphp @endforeach
                            {{subscriberFormat($total)}}

                        </h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--hero section end-->




    <div class="container">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('youtube-analysis')}}">Youtube Analysis</a></li>

                    <li class="breadcrumb-item"><a href="{{url('youtube-analysis/category/'.$category->slug)}}">{{$category->category_name}}</a></li>
                </ol>
            </nav>
        </div>


        <div class="col-md-12" align="center">

<div class="row">

                @foreach($channels as $obj)

                    <div class="col-md-4">

                        <div class="border single-review-wrap bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>{{subscriberFormat($obj->subscriber_count)}}</h5>
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