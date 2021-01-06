@extends('client.layout.base')

@section('title','Youtube channel analysis of '.$channel->channel_name)
@section('description',$channel->channel_name.' currently having '.subscriberFormat($channel->subscriber_count).' subscribers on '.date('Y-m-d'))
@section('canonical',url()->current())
@section('url',url()->current())

@section('head')
    <style>
        .p-4 {
            padding: 0px 1.5rem !important;
        }
        .date-title{
            background: #e2e2e2;
            text-transform: uppercase;
            border-radius: 5px;
            margin-top: 10px;
        }
        .status-title{
            background: #545454;
            color: white;
            text-transform: lowercase;
            font-size: small;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            margin-top: 5px;
        }

        .status-data-left{
            background: #e8e8e8;
            color: black;
            text-transform: lowercase;
            font-size: small;
            border-bottom-left-radius: 5px;
            margin-bottom: 5px;
        }

        .status-data-right{
            background: #e8e8e8;
            color: black;
            text-transform: lowercase;
            font-size: small;
            border-bottomsss-right-radius: 5px;
            margin-bottom: 5px;
        }
    </style>
    @endsection
@section('content')



    <section class="ptb-100 overflow-hidden primary-bg no-padding">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white py-5">
                        <h1 class="text-white">Profile of {{$channel->channel_name}}</span> {{subscriberFormat($channel->subscriber_count)}}</h1>
                        <p class="lead">{{subscriberFormat($channel->subscriber_count)}}</p>

                        <div class="action-btns mt-4">
                            <a href="https://youtube.com/channel/{{$channel->channel_id}}" class="btn btn-brand-03 btn-lg">View YouTube Channel</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="img-wrap d-none d-md-block ">
                        @if(!empty($channel->url))
                            <img src="{{asset($channel->url)}}" alt="{{$channel->channel_name}}"  class="img-fluid"> @endif

                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--hero section end-->

    <!--hero section end-->


    <div class="container">
        <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('youtube-analysis')}}">Youtube Analysis</a></li>

                <li class="breadcrumb-item"><a href="{{url('youtube-analysis/category/'.$channel->ycslug)}}">{{$channel->category_name}}</a></li>

                <li class="breadcrumb-item active" aria-current="page">{{$channel->channel_name}}</li>
            </ol>
        </nav>
        </div>

        <div class="col-md-12">
            <div class="row">
                @foreach($stats as $obj)
                    <div class="col-md-3 col-12">
                        <div class="features-box border p-4 rounded">


                                <div class="row">
                                    <div class="col-12 date-title" align="center">{{\Carbon\Carbon::parse($obj->statistics_date)->subDay()->format('d F Y')}}</div>


                                @if($obj->yesterday())
                                        <div class="col-12" align="center">New views<br>{{subscriberFormat($obj->view_count - $obj->yesterday()->view_count)}}</div>
                                    @endif

                                    @if(!empty($obj->yesterday()))
                                        @php $v_count = $obj->video_count-$obj->yesterday()->video_count;
                                    if($v_count > 0){
                                        echo '<div class="col-12" align="center">';
                                        if ($v_count == 1) { echo '<span class="badge badge-success">1 new video</span>'; }else{echo '<span class="badge badge-success">'.$v_count.' new videos</span>';} echo '</div>';
                                    }

                                        @endphp
                                    @endif

                                    <div class="col-12 status-title" align="center">Stats on {{\Carbon\Carbon::parse($obj->statistics_date)->subDay()->format('d/m/Y')}}</div>
                                    <div class="col-6 status-data-left" align="center">views<br>{{subscriberFormat($obj->view_count)}} </div>
                                    <div class="col-6 status-data-right" align="center">subs<br>{{subscriberFormat($obj->subscriber_count)}}</div>

                                </div>



                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection