@extends('client.layout.base')

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
                        <h1 class="text-white">Top Subscribed youtube channels in Kerala</h1>
                        <p class="lead">Most subscribed channels on {{date('Y m d')}}</p>

                        <div class="action-btns mt-4">
                            <a href="{{url('youtube-analysis/most-viewed-channels')}}" class="btn btn-brand-03 btn-lg">Most viewed youtube channels</a>
                        </div>
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



    <div class="container">
        <div class="col-md-12">
            <div class="row">
                    @foreach($categories as $o)
                        <div class="col-md-2 col-6"><a href="{{url('youtube-analysis/category/'.$o->slug)}}">{{$o->category_name}}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-12" align="center" >
            <hr>
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
                    <td>Youtube</td>
                    </thead>

                    <tbody>
                        @foreach($channels as $obj)
                        <tr id="row-{{$obj->id}}">
                            <td>#{{$loop->index+1}}</td>
                            <td><a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}"> @if(!empty($obj->url))
                                    <img src="{{asset($obj->url)}}" width="50" alt="{{$obj->channel_name}}" class="rounded-circle shadow-sm img-fluid mr-3">
                                @else
                                    <img src="https://img.icons8.com/ultraviolet/80/000000/change-user-male.png" width="64" alt="{{$obj->channel_name}}" class="rounded-circle shadow-sm img-fluid mr-3">
                                    @endif </a></td>
                            <td><a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}"> {{$obj->channel_name}}</a></td>
                            <td>{{subscriberFormat($obj->subscriber_count)}}</td>
                            <td>{{subscriberFormat($obj->view_count)}}</td>
                            <td>
                                @if(!empty($obj->category_name))
                                <a href="{{url('youtube-analysis/category/'.$obj->ycslug)}}">{{$obj->category_name}}</a>
                                @else
                                    @auth
                                        @if(Auth::user()->is_admin == 1)
                                                <select name="category"  data-id="{{$obj->id}}">
                                                    <option value="">Choose</option>
                                                    @foreach($categories as $o)
                                                        <option value="{{encrypt($o->id)}}">{{$o->category_name}}</option>
                                                    @endforeach
                                                </select>
                                        @endif
                                    @endauth
                                @endif
                            </td>


                                    <td><a  href="https://youtube.com/channel/{{$obj->channel_id}}" target="_blank">visit</a></td>



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