@extends('admin.layout.base')

@section('content')

    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">

                    <div class="nk-block nk-block-lg">


                        @include('admin.modules.quiz.quiz.submenu')

                        <div class="card card-preview">
                            <div class="card-inner">
                                @include('admin.include.notifications')
                                @if($obj->id)
                                    {{Form::open(['url' => route('admin.quiz.update'), 'method' => 'post','enctype' => 'multipart/form-data', 'id'=>'ytchannelForm'])}}
                                    <input type="hidden" name="id" value="{{encrypt($obj->id)}}">
                                    <input type="hidden" name="slug" value="{{($obj->slug)}}">
                                @else
                                    {{Form::open(['url' => route('admin.quiz.store'), 'method' => 'post','enctype' => 'multipart/form-data', 'id'=>'ytchannelForm'])}}
                                @endif

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the quiz title</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::text("title", $obj->title, array('class'=>'form-control', 'id' => 'title','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the quiz summary</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::textarea("summary", $obj->summary, array('class'=>'form-control', 'id' => 'summary','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the quiz top_description</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::textarea("top_description", $obj->top_description, array('class'=>'form-control', 'id' => 'top_description','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the quiz bottom_description</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::textarea("bottom_description", $obj->bottom_description, array('class'=>'form-control', 'id' => 'bottom_description','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please select a primary category</label>
                                                <div class="form-control-wrap">
                                                    @if(!empty($obj->category))
                                                        {!! Form::select('category_id',[$obj->category_id => $obj->category->category_name], $obj->category_id, array('placeholder'=>'Choose a category','data-init-plugin'=>'select2','data-select2-url'=>route('admin.qcategory.qcategory_list'),'class'=>'full-width select2_input', 'id'=>'primary_categoryss')); !!}
                                                    @else
                                                        {!! Form::select('category_id',[], $obj->category_id, array('placeholder'=>'Choose a category','data-init-plugin'=>'select2','data-select2-url'=>route('admin.qcategory.qcategory_list'),'class'=>'full-width select2_input', 'id'=>'primary_categoryss')); !!}
                                                    @endif
                                                </div>
                                            </div>
                                            <small>Note : if you can't find a proper category, please create a new one <a
                                                        href="{{route('admin.qcategory.create')}}" target="_blank">here</a></small>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the quiz question_count</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::text("question_count", $obj->question_count, array('class'=>'form-control', 'id' => 'question_count','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-sm-12"><br></div>

                                        <div class="col-sm-12">
                                            <button class="btn btn-dark" type="submit">Create</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>

@endsection

@section('bottom')
    <script>
        $('#page-heading').html('Create a new category');
    </script>

@endsection