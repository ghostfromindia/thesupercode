@extends('admin.layout.base')

@section('content')

    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">

                    <div class="nk-block nk-block-lg">


                        @include('admin.modules.quiz.quiz.submenu')

                        <div class="card card-preview">
                            <div class="row">
                                <div class="col-md-6" style="padding: 25px">
                                    <form action="{{route('question.save')}}" method="post" >@csrf

                                        Add/Edit Question
                                        <textarea name="question" class="form-control">@if($question){{$question->question}}@endif</textarea>
                                        <input type="hidden" name="quiz_id" value="{{encrypt($obj->id)}}">
                                        @if($question)<input type="hidden" name="id" value="{{encrypt($question->id)}}">@endif

                                        <label for="">Answer 1</label>
                                        <input type="text" class="form-control" name="answer[]" value="@if($question){{$question->answer(0)}}@endif">
                                        <label for="">Answer 2</label>
                                        <input type="text" class="form-control" name="answer[]" value="@if($question){{$question->answer(1)}}@endif">
                                        <label for="">Answer 3</label>
                                        <input type="text" class="form-control" name="answer[]" value="@if($question){{$question->answer(2)}}@endif">
                                        <label for="">Answer 4</label>
                                        <input type="text" class="form-control" name="answer[]" value="@if($question){{$question->answer(3)}}@endif">

                                        <button type="submit" class="btn btn-success" style="margin-top: 10px">Create</button>


                                    </form>

                                </div>
                                <div class="col-md-6">
                                    <h4 style="font-weight: 100">Questions</h4>

                                    <ol>
                                        @foreach($questions as $o)
                                            <li>{{$loop->index+1}}: {{$o->question}}
                                                | <a href="{{ route('question.create',['id' => encrypt($obj->id),'qid'=>$o->id]) }}">Edit</a>
                                                | <a href="{{ route('question.remove',['id'=>encrypt($o->id)]) }}">Delete</a></li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>

@endsection

@section('bottom')

@endsection