@extends('client.layout.base')

@section('content')

    <div class="dark-banner">
        We are in beta mode, will be live soon. like cyberpunk 2077 soon
    </div>

    <div class="container" align="center">
        <h1 class="pad-height">Kerala : Top 20 Kerala youtube channels <img src="https://img.icons8.com/emoji/48/000000/fire.png"/></h1>
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
                        <td><span class="badge"><a href="{{url('youtube-analysis/category/'.$obj->ycslug)}}">{{$obj->category_name}}</a></span><a href="{{url('youtube-analysis/channel/'.$obj->chslug)}}">{{$obj->channel_name}}</a></td>
                        <td>{{subscriberFormat($obj->subscriber_count)}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection