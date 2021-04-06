@extends('client.modules.quiz.layout.base')


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
        footer{
            display: none;
        }
        .navbar-brand img{
            width: 50px;
        }

        .quiz-que-title{
             background: url('https://karthiksurya.com/wp-content/uploads/2020/09/edIMG_3808-768x512.jpg');
             height:250px;
             background-position: center;
             position: relative;
            line-height: 25px;
         }

        .quiz-que-title span {
            color: white;
            font-size: 25px;
            font-family: math;
            font-weight: 200;
            padding: 10px;
            background: linear-gradient(
                    0deg
                    , black, #00000080);
            width: 100%;
            display: block;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        .btn-alt{
            display: block;
            display: block;
            margin: 5px;
            width: 250px;
            text-align: left;
        }



    </style>
@endsection


@section('content')



    <div class="container" style="margin-bottom: 80px">
        <div class="col-md-12" >


            <div class="row" id="intro" style="display: block">
                  <div class="col-12 col-md-12">
                      <div class="quiz_banner_image" style="background: url('https://cdn.pixabay.com/photo/2021/03/04/12/19/woman-6067822_960_720.jpg');background-position: center;background-size: cover">
                          <h1 class="card-title">{{$quiz->title}}</h1>
                      </div>
                      <div style="padding: 20px">
                          {!! $quiz->top_description !!}
                          {!! $quiz->bottom_description !!}
                       </div>

                      @auth
                          <a href="javascript:void(0)" class="start-quiz">START</a>
                          @else
                          <a href="{{url('quiz/login/google')}}" class="start-quiz">Login with google and continue</a>
                      @endauth

                 </div>
            </div>


            <div class="row" id="quiz" style="display: none">
                    <div class="col-12 col-md-12"  style="margin-bottom: 5px">
                        <div class="quiz-que-title">
                            <span id="quiz-title">ABC</span>
                        </div>

                        <div class="owl-carousel ques-list">
                            @for($i=1;$i<=count($quiz->questions());$i++)
                                <div class="qli @if($i==7) qli-current @else qli-wrong @endif">
                                        <a href="javascript:void(0)" class="ques-list" data-quiz-id="{{encrypt($quiz->id)}}">{{$i}}</a>
                                </div>
                            @endfor
                        </div>

                    </div>
                    <div class="col-12 col-md-12 answer">
                       <a href="javascript:void(0)">by Cicero, written in 45 BC</a>
                       <a href="javascript:void(0)">Finibus Bonoruus Bonoruus Bonoruusorussm </a>
                       <a href="javascript:void(0)">exact original form</a>
                       <a href="javascript:void(0)">during the Renaissance</a>

                        <a>Skip</a>
                    </div>

                    <a href="javascript:void(0)" class="complete-quiz">START</a>

                </div>
            </div>


        <div class="row" id="result" style="display: none">
            <div class="col-12 col-md-12"  style="margin-bottom: 5px">
                <div class="quiz-que-title">
                    <span>10/20</span>
                </div>

                <div class="">
                    <ul>

                        @for($i=0;$i<20;$i++)
                            <li>Rank 1 : USER {{$i}} </li>
                        @endfor
                    </ul>
                </div>

            </div>

        </div>
    </div>







    </div>
    </div>


@endsection

@section('bottom')

    <script>
        $('.start-quiz').on('click', function () {
            $('#intro').fadeOut();
            setTimeout(function () {
                $('#quiz').fadeIn();
            },1000)
        })

        $('.ques-list').owlCarousel({
            loop:false,
            responsiveClass:true,
            autoWidth:true,
            nav : false
        })
    </script>

    <script>
        $()
    </script>
@endsection