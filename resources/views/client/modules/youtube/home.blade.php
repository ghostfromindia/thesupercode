@extends('client.layout.base')

@section('title','Top Subscribed youtube channels in Kerala')
@section('description','Get the list of top subscribed youtube channels like Mazhavil Manorama, Flowers Comedy, Karikku')
@section('canonical',url()->current())
@section('url',url()->current())

@section('content')



    <div class="container" align="center">
        <h1 class="pad-height">Top Subscribed youtube channels in Kerala  <img src="https://img.icons8.com/emoji/48/000000/fire.png"/></h1>
    </div>


    <div class="container">
        <div class="col-md-12" align="center">
            <hr>

            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Rank #</th>
                        <th>Channel Name</th>
                        <th>Subscribers</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($channels as $obj)

                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td><span class="badge">
                                <a href="{{url('youtube-analysis/category/'.$obj->ycslug)}}">{{$obj->category_name}}</a></span>
                            <a href="https://youtube.com/channel/{{$obj->channel_id}}" target="_blank"><img src="https://img.icons8.com/color/48/000000/youtube.png" width="20px"/></a>
                            <a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}">{{$obj->channel_name}}</a>
                        </td>
                        <td>{{subscriberFormat($obj->subscriber_count)}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection