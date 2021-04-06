@extends('admin.layout.base')

@section('content')

    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">

                    <div class="nk-block nk-block-lg">


                        @include('admin.modules.youtube.ytcategory.submenu')

                        <div class="card card-preview">
                            <div class="card-inner">
                                <table class="datatable-init table"  id="datatable"
                                       data-datatable-ajax-url="{{ route($route.'.index') }}">
                                    <thead>
                                    <tr>
                                        <th width="10px">Id</th>
                                        <th>Category name</th>
                                        <th width="200px">Updated at</th>
                                        <th width="10px">Edit</th>
                                        <th width="10px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
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
        $('#page-heading').html('Youtube Channels');

        var my_columns = [
            {data: null, name: 'id'},
            {data: 'category_name', name: 'category_name'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action_edit', name: 'action_edit'},
            {data: 'action_delete', name: 'action_delete'}
        ];
        var slno_i = 0;
        var order = [0, 'desc'];


    </script>

@endsection