@extends('admin.layout.base')

@section('content')

    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">

                    <div class="nk-block nk-block-lg">


                        @include('admin.modules.youtube.ytchannel.submenu')

                        <div class="card card-preview">
                            <div class="card-inner">
                                @include('admin.include.notifications')
                                @if($obj->id)
                                    {{Form::open(['url' => route('admin.ytchannel.update'), 'method' => 'post','enctype' => 'multipart/form-data', 'id'=>'ytchannelForm'])}}
                                    <input type="hidden" name="id" value="{{encrypt($obj->id)}}">
                                @else
                                    {{Form::open(['url' => route('admin.ytchannel.store'), 'method' => 'post','enctype' => 'multipart/form-data', 'id'=>'ytchannelForm'])}}
                                @endif

                                <input type="hidden" name="created_by" value="{{Auth::user()->id}}">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the channel name</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::text("channel_name", $obj->channel_name, array('class'=>'form-control', 'id' => 'channel_name','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter the channel id</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::text("channel_id", $obj->channel_id, array('class'=>'form-control', 'id' => 'channel_id','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12"><br></div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please enter channel username</label>
                                                <div class="form-control-wrap">
                                                    {{ Form::text("channel_user_name", $obj->channel_user_name, array('class'=>'form-control', 'id' => 'channel_user_name','required' => true)) }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-01">Please select a primary category</label>
                                                <div class="form-control-wrap">
                                                    @if(!empty($obj->category))
                                                    {!! Form::select('primary_category',[$obj->primary_category => $obj->category->category_name], $obj->primary_category, array('placeholder'=>'Choose a category','data-init-plugin'=>'select2','data-select2-url'=>route('admin.ytcategory.ytcategory_list'),'class'=>'full-width select2_input', 'id'=>'primary_categoryss')); !!}
                                                        @else
                                                        {!! Form::select('primary_category',[], $obj->primary_category, array('placeholder'=>'Choose a category','data-init-plugin'=>'select2','data-select2-url'=>route('admin.ytcategory.ytcategory_list'),'class'=>'full-width select2_input', 'id'=>'primary_categoryss')); !!}
                                                    @endif
                                                </div>
                                            </div>
                                            <small>Note : if you can't find a proper category, please create a new one <a
                                                        href="{{route('admin.ytcategory.create')}}" target="_blank">here</a></small>
                                        </div>

                                        <div class="col-sm-12"><br></div>

                                        <div class="col-sm-12">
                                            @if($obj->id)
                                                <button class="btn btn-outline-dark" type="submit">Update</button>
                                                @else
                                                <button class="btn btn-dark" type="submit">Create</button>
                                            @endif
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
        @if(!$obj->id)
        $('#page-heading').html('Create a new channel');
        @else
        $('#page-heading').html('Update channel : {{$obj->channel_name}}');
        @endif
    </script>

@endsection