@extends('client.layout.base')

@section('title','Most viewed youtube channels in Kerala')


@section('description','Get the list of most views youtube channels and analysis the channel based ob history ')
@section('canonical',url()->current())
@section('url',url()->current())

@section('head')
<style>
    table {
        border-collapse: separate;
        border-spacing: 0;
        border-top: 1px solid grey;
    }

    td, th {
        margin: 0;
        border: 1px solid grey;

        border-top-width: 0px;
    }



    .headcol {
        position: absolute;
        width: 5em;
        left: 0;
        top: auto;
        border-top-width: 1px;
        /*only relevant for first row*/
        margin-top: -1px;
        /*compensate for top border*/
        padding: 20px !important;
    }

    .headcol:before {
        content: '#';
    }

    .table-wrapper{
        width: 80%;
        overflow-x: scroll;
        margin-left: 5em;
        overflow-y: visible;
        padding: 0;
    }
</style>
    @endsection
@section('content')

    <!--hero section start-->
    <section class="hero-equal-height ptb-120 gradient-overlay bg-image" style="height: 50%;min-height: 0">
        <div class="background-image-wraper custom-overlay" style="background: url('{{asset('client/desktop')}}/assets/img/hero-offer-bg.svg')no-repeat center center / cover; opacity: 1;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="hero-content-left text-white text-center">
                        <h1 class="text-white big-text mb-0" style="    font-size: 38px;
    line-height: 40px;">
                            Most viewed youtube channels in Kerala
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


                </ol>
            </nav>
        </div>


        <div class="col-md-12" align="center" >

<div class="table-wrapper">


            <table class="table" width="100%">
                <thead>
                    <th class="headcol"></th>
                    <th>{{Carbon\Carbon::now()->subDay()->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(2)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(3)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(4)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(5)->format('d M')}}</th>
                    <th>{{Carbon\Carbon::now()->subDays(6)->format('d M')}}</th>
                </thead>
                @foreach($channels_1 as $obj)
                <tr>
                    <th class="headcol">{{$loop->index+1}}</th>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_1[$loop->index]->channel_name}} [{{subscriberFormat($channels_1[$loop->index]->dif)}}]" src="{{asset($channels_1[$loop->index]->url)}}" alt="{{$channels_1[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_2[$loop->index]->channel_name}} [{{subscriberFormat($channels_2[$loop->index]->dif)}}]" src="{{asset($channels_2[$loop->index]->url)}}" alt="{{$channels_2[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_3[$loop->index]->channel_name}} [{{subscriberFormat($channels_3[$loop->index]->dif)}}]" src="{{asset($channels_3[$loop->index]->url)}}" alt="{{$channels_3[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_4[$loop->index]->channel_name}} [{{subscriberFormat($channels_4[$loop->index]->dif)}}]" src="{{asset($channels_4[$loop->index]->url)}}" alt="{{$channels_4[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_5[$loop->index]->channel_name}} [{{subscriberFormat($channels_5[$loop->index]->dif)}}]" src="{{asset($channels_5[$loop->index]->url)}}" alt="{{$channels_5[$loop->index]->channel_name}}" width="40px"></td>
                    <td class="long"><img data-toggle="tooltip" title="{{$channels_6[$loop->index]->channel_name}} [{{subscriberFormat($channels_6[$loop->index]->dif)}}]" src="{{asset($channels_6[$loop->index]->url)}}" alt="{{$channels_6[$loop->index]->channel_name}}" width="40px"></td>
                </tr>
                @endforeach

            </table>
</div>
        </div>
    </div>


@endsection

@section('bottom')

@endsection