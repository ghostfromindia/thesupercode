@extends('client.modules.quiz.layout.base')

@section('title','Answer quiz win amazing prizes')
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
        header{
            background: linear-gradient(45deg,#ee0979,#ff6a00);
            margin-bottom: 0px;
        }

        .mob{
            display: none;
        }
       .remove-dump-a-styles{
           color: black;
       }
       .remove-dump-a-styles:hover{
           text-decoration: none;
       }

        @media only screen and (max-width: 600px) {
            .mob-mt-200{
                margin-top: 200px;
            }
            .mob{
                display: block;
            }

        }
    </style>
@endsection


@section('content')

    <section class="ptb-100 overflow-hidden primary-bg no-padding mob-mt-200">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-12 col-md-6 d-none d-md-block " align="center">
                    <span class="q">?</span>
                </div>
                <div class="col-12 col-md-6 d-none d-md-block">
                    <div class="hero-slider-content text-white py-5" style="    position: sticky;
    top: 0;
    padding: 5px;">
                        <h1 style="color: black">Quiz is a workout for your brain cells</h1>
                        <p  style="color: black">Quiz is module created by The Super Code developers to help those trying for interviews, combative exams and the one seeking for intresting trivia questions
                        <br>
                        <br>
                        Lets begin the fun now :)
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
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

                        @foreach($quizes as $obj)
                            <div class="col-12 col-md-3 d-none d-md-block" style="margin-bottom: 10px">

                                <div class="card quiz_thumb">
                                    <div class="quiz_thumb_image" style="background: linear-gradient(#1c92d2,#0f9b0f);background-position: center;background-size: cover">
                                        <h5 class="card-title">Quiz on current affairs 2020  example text to build on ffairs 2020  example text to buiffairs 2020 </h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#">Play now !</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-3 mob" style="margin-bottom: 10px">
                                <a href="{{url('quiz/'.$obj->slug)}}" class="remove-dump-a-styles">
                                <div class="row">
                                    <div class="col-3"
                                         style="background: linear-gradient(#1c92d2,#0f9b0f);
                                         background-position: center;
                                         background-size: cover;
                                         height: 60px"></div>


                                    <div class="col-9" align="left">
                                        <h4>{{$obj->title}}</h4>
                                        <small>{{$obj->summary}}</small>
                                    </div>
                                </div>
                                </a>


                            </div>

                        @endforeach
                    </div>



            </div>
    </div>


@endsection