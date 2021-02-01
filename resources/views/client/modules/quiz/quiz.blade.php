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
        footer{
            display: none;
        }
        .navbar-brand img{
            width: 50px;
        }

        .quiz-que-title{
             background: url('https://karthiksurya.com/wp-content/uploads/2020/09/edIMG_3808-768x512.jpg');
             height: 300px;
             background-position: center;
             position: relative;
         }

        .quiz-que-title span{
            color: white;
            font-size: 25px;
            font-family: math;
            font-weight: 200;
            padding: 10px;
            background: linear-gradient(0deg, black, transparent);
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



    <div class="container" style="min-height: 500px;margin-top: 20px">
        <div class="col-md-12" >


            <div class="row">
                  <div class="col-12 col-md-12">
                      <h1>Translation by H. Rackham</h1>
                      <div>
                          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                       </div>
                      <hr>
                       <button class="btn btn-dark m-10">Start</button>
                 </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-12">
                    <div>
                        @for($i=0;$i<20;$i++)
                            <a href="">{{$i}}</a>
                        @endfor
                    </div>
                    <div class="quiz-que-title">
                        <span>Que 1: What is ab + c = 12 ?
                        Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</span>
                    </div>

                    <div>
                       <button class="btn btn-dark btn-alt">by Cicero, written in 45 BC</button>
                       <button class="btn btn-dark btn-alt">Finibus Bonorum </button>
                       <button class="btn btn-dark btn-alt">exact original form</button>
                       <button class="btn btn-dark btn-alt">during the Renaissance</button>

                        <button class="btn btn-warning btn-alt">Skip</button>
                    </div>
                    <hr>
                    <button class="btn btn-dark m-10">Start</button>
                </div>
            </div>



        </div>
    </div>


@endsection