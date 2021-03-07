@extends('client.modules.youtube.layout.base')

@section('title','Top Subscribed youtube channels in Kerala')
@section('description','Get the list of top subscribed youtube channels like Mazhavil Manorama, Flowers Comedy, Karikku')
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
            text-align: center;
            vertical-align: middle;
        }
        th:nth-child(2), td:nth-child(2)
        {
            position:sticky;
            left:0px;
            background-color:white;
            height: 50px;
            text-align: center;
            vertical-align: middle;
        }
        .table th, .table td {
            padding: 2px 20px;
            vertical-align: top;
        }
        th,td{
            padding: 0 !important;
            vertical-align: middle !important;
            font-size: 12px !important;
            text-align: left !important;
            border-top: 0 !important;
            height: auto !important;
        }
        td a{
            color: black !important;
        }
    </style>
@endsection


@section('content')


    <section class="ptb-100 overflow-hidden primary-bg no-padding">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="img-wrap  ">
                        <div class="owl-carousel-2 owl-carousel">
                            @foreach($channels as $obj)
                                <img src="@if(!empty($obj->url)) {{asset($obj->url)}} @endif" alt="{{$obj->channel_name}}" style="width: 40px;height: 40px" class="img-fluid">
                                @if($loop->index == 39) @break @endif
                            @endforeach
                        </div>
                    </div>
                </div>




            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--hero section end-->



    <div class="container-fluid" style="padding: 0;">

        <div class="col-md-12" align="center" >

            <div class="table-wrapper">


                <div class="row justify-content-center">

                    <div class="col-12 col-lg-6" align="left">
                        <div class="hero-slider-content text-white py-5" style="    position: sticky;
    top: 0;
    padding: 5px;">
                            <h1 style="color: black">Top Subscribed youtube channels in Kerala</h1>
                            <p  style="color: black">Kerala youtube community grown up significantly in the lockdown period of India lots of YouTubers are managed to get their audience. YouTube popularity in Kerala is in the good stage today. Television channels are leading the community in terms of subscribers count apart from these channels <b>M4 Tech</b> and <b>Village Food Channel</b> leading the YouTube community in kerala</p>
                        </div>
                    </div>


                    <div class="col-12 col-lg-6" style="padding: 0px;padding-top: 20px">



                <table class="table" width="100%" style="margin-left: auto;margin-right: auto">
                    <thead>
                    <th class="headcol" width="50%">Name</th>
                    <th width="20%">Subs</th>
                    <th width="20%">T.views</th>
                    </thead>

                    <tbody>
                        @foreach($channels as $obj)
                        <tr id="row-{{$obj->id}}" >
                            <td width="50%" @if( $loop->index+1 <= 10)  style="background: #ffc10729" @endif>

                               @if( $loop->index+1 < 10) 0{{$loop->index+1}} @else {{$loop->index+1}} @endif
                                <a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}">

                                    @if(!empty($obj->url))
                                    <img src="{{asset($obj->url)}}" width="30" alt="{{$obj->channel_name}}" >
                                        @else
                                    <img src="https://img.icons8.com/ultraviolet/80/000000/change-user-male.png" width="64" alt="{{$obj->channel_name}}" >
                                    @endif
                                </a>

                                <a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}"> {{$obj->channel_name}}</a>
                            </td>
                            <td width="20%" @if( $loop->index+1 <= 10)  style="background: #ffc10729" @endif>{{subscriberFormat($obj->subscriber_count)}}</td>
                            <td width="20%" @if( $loop->index+1 <= 10)  style="background: #ffc10729" @endif>{{subscriberFormat($obj->view_count)}}</td>






                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection

@section('bottom')

@endsection