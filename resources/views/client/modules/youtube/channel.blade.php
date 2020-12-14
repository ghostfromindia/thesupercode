@extends('client.layout.base')

@section('content')



    <div class="container" align="cnter" >
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
        <div class="col-md-12">
            <div class="row">
                @foreach($stats as $obj)
                    <div class="col-12">
                        <div>
<div style="display: inline-block"><img src="https://img.icons8.com/officel/50/000000/planner.png" width="20px"/>  {{\Carbon\Carbon::parse($obj->statistics_date)->format('d F Y')}}</div>


                            @if($obj->yesterday())
                            New views : {{subscriberFormat($obj->view_count - $obj->yesterday()->view_count)}}
                            @else
                            Total view : {{subscriberFormat($obj->view_count)}}
                            @endif

                            Subscribes : {{subscriberFormat($obj->subscriber_count)}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection