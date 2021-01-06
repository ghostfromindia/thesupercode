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
        .table th, .table td {
            padding: 2px 20px;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
    </style>
@endsection


@section('content')

    <section class="ptb-100 overflow-hidden primary-bg no-padding">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white py-5">
                        <h1 class="text-white"><span>Top Subscribed {{$category->category_name}} youtube channels in Kerala</span></h1>
                        <p class="lead">
                            Total of
                            @php $total = 0; @endphp
                            @foreach($channels as $obj) @php $total += $obj->subscriber_count; @endphp @endforeach
                            {{subscriberFormat($total)}} Subscribers are following {{$category->category_name}} category</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="img-wrap d-none d-md-block ">
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

    <!--hero section end-->




    <div class="container">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('youtube-analysis')}}">Youtube Analysis</a></li>

                    <li class="breadcrumb-item"><a href="{{url('youtube-analysis/category/'.$category->slug)}}">{{$category->category_name}}</a></li>
                </ol>
            </nav>
        </div>


        <div class="container">
            <div class="col-md-12" align="center" >

                <div class="table-wrapper">


                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <table class="table table-striped table-responsive" width="100%" style="margin-left: auto;margin-right: auto">
                                <thead>
                                <th class="headcol">RANK</th>
                                <th>Logo</th>
                                <th>Channel name</th>
                                <th>Subscribers</th>
                                <th>Total views</th>
                                <th>Category</th>
                                </thead>

                                <tbody>
                                @foreach($channels as $obj)
                                    <tr>
                                        <td>#{{$loop->index+1}}</td>
                                        <td><a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}"> @if(!empty($obj->url))
                                                    <img src="{{asset($obj->url)}}" width="50" alt="{{$obj->channel_name}}" class="rounded-circle shadow-sm img-fluid mr-3">
                                                @else
                                                    <img src="https://img.icons8.com/ultraviolet/80/000000/change-user-male.png" width="64" alt="{{$obj->channel_name}}" class="rounded-circle shadow-sm img-fluid mr-3">
                                                @endif </a></td>
                                        <td><a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}"> {{$obj->channel_name}}</a></td>
                                        <td>{{subscriberFormat($obj->subscriber_count)}}</td>
                                        <td>{{subscriberFormat($obj->view_count)}}</td>
                                        <td><a href="{{url('youtube-analysis/category/'.$obj->ycslug)}}">{{$obj->category_name}}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>


@endsection