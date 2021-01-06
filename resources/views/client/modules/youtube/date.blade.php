@extends('client.layout.base')

@section('title','Most viewed youtube channels in Kerala')


@section('description','Get the list of most views youtube channels and analysis the channel based ob history ')
@section('canonical',url()->current())
@section('url',url()->current())

@section('head')
    <style>
        table{
            background: white;
        }
        th:first-child, td:first-child
        {
            position:sticky;
            left:0px;
            background-color:white;
            height: 50px;
            width: 50px;
            text-align: center;
            vertical-align: middle;
        }
    </style>
    @endsection
@section('content')



    <section class="ptb-100 overflow-hidden primary-bg no-padding">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white py-5">
                        <h1 class="text-white">Most viewed youtube channels in Kerala</h1>
                        <p class="lead">Analysis on views of youtube channels in last week</p>

                        <div class="action-btns mt-4">
                            <a href="{{url('youtube-analysis')}}" class="btn btn-brand-03 btn-lg">Most subscribed youtube channels</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="img-wrap d-none d-md-block ">
                        @foreach($channels_1 as $obj)
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

    <!--hero section end-->




    <div class="container">


        <div class="col-md-12" align="center" >

<div class="table-wrapper">

    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-responsive" width="100%" style="margin-left: auto;margin-right: auto">
                <thead>
                    <th class="headcol">RANK</th>
                    <th>{{Carbon\Carbon::now()->subDay()->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(2)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(3)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(4)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(5)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(6)->format('d M')}}</th>
                </thead>
                @foreach($channels_1 as $obj)
                    @if(!empty($channels_1[$loop->index]) && !empty($channels_2[$loop->index]) && !empty($channels_3[$loop->index]) && !empty($channels_4[$loop->index]) && !empty($channels_5[$loop->index]) && !empty($channels_6[$loop->index]))
                <tr>
                    <th class="headcol">#{{$loop->index+1}}</th>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_1[$loop->index]->channel_name}} [{{subscriberFormat($channels_1[$loop->index]->dif)}}]" src="{{asset($channels_1[$loop->index]->url)}}" alt="{{$channels_1[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_2[$loop->index]->channel_name}} [{{subscriberFormat($channels_2[$loop->index]->dif)}}]" src="{{asset($channels_2[$loop->index]->url)}}" alt="{{$channels_2[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_3[$loop->index]->channel_name}} [{{subscriberFormat($channels_3[$loop->index]->dif)}}]" src="{{asset($channels_3[$loop->index]->url)}}" alt="{{$channels_3[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_4[$loop->index]->channel_name}} [{{subscriberFormat($channels_4[$loop->index]->dif)}}]" src="{{asset($channels_4[$loop->index]->url)}}" alt="{{$channels_4[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_5[$loop->index]->channel_name}} [{{subscriberFormat($channels_5[$loop->index]->dif)}}]" src="{{asset($channels_5[$loop->index]->url)}}" alt="{{$channels_5[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_6[$loop->index]->channel_name}} [{{subscriberFormat($channels_6[$loop->index]->dif)}}]" src="{{asset($channels_6[$loop->index]->url)}}" alt="{{$channels_6[$loop->index]->channel_name}}" width="40px"></td>
                </tr>
                    @endif
                @endforeach

            </table>
        </div>
    </div>
</div>
        </div>
    </div>


@endsection

@section('bottom')

@endsection