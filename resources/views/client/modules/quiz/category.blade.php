@extends('client.layout.base')

@section('title','Answer quiz wim amazing prizes')
@section('description','Various type of quizes that you can enjoy over the time')
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
                        <h1 class="text-white"><span>Kerala!</span></h1>
                        <p class="lead">You must login to play the quiz</p>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--hero section end-->

    <!--hero section end-->




    <div class="container" style="min-height: 500px;margin-top: 20px">
        <div class="col-md-12" align="center" >




            <div class="row justify-content-center">
                @php $categories = ['Districts','States','Years','Universities']; @endphp
                @foreach($categories as $obj)
                    <div class="col-4 col-md-2">
                        <div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Google_Photos_icon_%282020%29.svg/1200px-Google_Photos_icon_%282020%29.svg.png" alt="" width="50px">
                            <br>
                            {{$obj}}
                        </div>
                    </div>
                @endforeach
            </div>



        </div>
    </div>


@endsection