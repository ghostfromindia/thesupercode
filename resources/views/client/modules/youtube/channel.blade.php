@extends('client.layout.base')

@section('content')



    <div class="container" align="center">
        <h1 class="pad-height">{{$channel->channel_name}} <img src="https://img.icons8.com/emoji/48/000000/fire.png"/></h1>
    </div>


    <div class="container">
        <div class="col-md-12" align="center">
            <hr>
            <div class="sub-count">
                {{subscriberFormat($channel->subscriber_count)}}
            </div>
            <hr>


        </div>
    </div>


@endsection