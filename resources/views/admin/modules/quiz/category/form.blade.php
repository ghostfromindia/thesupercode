@extends('admin.layout.base')

@section('content')

    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">

                    <div class="nk-block nk-block-lg">


                        @include('admin.modules.quiz.category.submenu')

                        <div class="card card-preview">
                            <div class="card-inner">
                                @include('admin.include.notifications')
                                @if($obj->id)
                                    {{Form::open(['url' => route('admin.qcategory.update'), 'method' => 'post','enctype' => 'multipart/form-data', 'id'=>'ytchannelForm'])}}
                                    <input type="hidden" name="id" value="{{encrypt($obj->id)}}">
                                    <input type="hidden" name="slug" value="{{($obj->slug)}}">
                                @else
                                    {{Form::open(['url' => route('admin.qcategory.store'), 'method' => 'post','enctype' => 'multipart/form-data', 'id'=>'ytchannelForm'])}}
                                @endif

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the category name</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::text("category_name", $obj->category_name, array('class'=>'form-control', 'id' => 'category_name','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please select a primary category</label>
                                                <div class="form-control-wrap">
                                                    @if(!empty($obj->category))
                                                        {!! Form::select('parent_category_id',[$obj->parent_category_id => $obj->category->category_name], $obj->parent_category_id, array('placeholder'=>'Choose a category','data-init-plugin'=>'select2','data-select2-url'=>route('admin.qcategory.qcategory_list'),'class'=>'full-width select2_input', 'id'=>'primary_categoryss')); !!}
                                                    @else
                                                        {!! Form::select('parent_category_id',[], $obj->parent_category_id, array('placeholder'=>'Choose a category','data-init-plugin'=>'select2','data-select2-url'=>route('admin.qcategory.qcategory_list'),'class'=>'full-width select2_input', 'id'=>'primary_categoryss')); !!}
                                                    @endif
                                                </div>
                                            </div>
                                            <small>Note : if you can't find a proper category, please create a new one <a
                                                        href="{{route('admin.qcategory.create')}}" target="_blank">here</a></small>
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