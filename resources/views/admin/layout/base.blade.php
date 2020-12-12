<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

    <meta charset="utf-8">
    <meta name="author" content="Akhil joy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('admin-assets')}}/images/favicon.png">
    <!-- Page Title  -->
    <title>@yield('title','Admin panel | The Super Code')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('admin-assets')}}/assets/css/dashlite.css?ver=2.2.0">
    <link id="skin-default" rel="stylesheet" href="{{asset('admin-assets')}}/assets/css/theme.css?ver=2.2.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <style>
        .nk-menu-item a span{
            color: #131313;
        }
        .pagination{
            float: right;
        }
        .dataTables_filter label{
            float: right;
        }
        #datatable_wrapper .row:first-child{
            border-bottom: 1px dotted #dbdfea;
            margin:5px 0px;
            padding-bottom: 10px;
        }

        #datatable_wrapper .row:last-child{
            border-top: 1px dotted #dbdfea;
            margin:5px 0px;
            margin-top: 20px;
            padding-top: 5px;
        }

        .custom-select-sm{
            margin: 0px 5px;
            width: auto !important;
            padding: 0px;
            padding-left: 10px;
        }
        .dataTables_info{
            font-style: italic;
        }
        .btn-group label:first-child{
            border-bottom-left-radius: 0px;
        }
        .btn-group label:last-child{
            border-bottom-right-radius: 0px;
        }
        .btn-group label a{
            color: white;
        }

        .alert {
            position: relative;
            padding: 0px;
            margin-bottom: 2rem;
             border: none;
            border-radius: 4px;
            padding: 5px 10px;
        }

    </style>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
        @include('admin.include.siderbar_menu')
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            @include('admin.include.top_header')
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content ">
                @section('content') @show
            </div>
            <!-- content @e -->
            <!-- footer @s -->
            @include('admin.include.footer')
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{asset('admin-assets')}}/assets/js/bundle.js?ver=2.2.0"></script>
<script src="{{asset('admin-assets')}}/assets/js/scripts.js?ver=2.2.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    $(document).on('click', '.btn-warning-popup', function(event){
        event.preventDefault();
        var url = $(this).attr('href');
        var redirect_url = $(this).data('redirect-url');
        var message = $(this).data('message');
        if (typeof redirect_url !== typeof undefined && redirect_url !== false)
            var action = 'redirect';

        $.confirm({
            title: 'Warning',
            content: message,
            closeAnimation: 'scale',
            opacity: 0.5,
            buttons: {
                'ok_button': {
                    text: 'Proceed',
                    btnClass: 'btn-blue',
                    action: function(){
                        var obj = this;
                        obj.buttons.ok_button.setText('Processing..'); // setText for 'hello' button
                        obj.buttons.ok_button.disable();
                        $.get(url).done(function (data) {
                            obj.$$close_button.trigger('click');
                            if (typeof data.error != "undefined") {
                                var title = "Alert!";
                                var response_msg = data.error;
                            }
                            else
                            {
                                var title = "Success!";
                                var response_msg = "Task completed successfully";
                            }
                            $.confirm({
                                title: title,
                                content: response_msg,
                                buttons: {
                                    'ok': function(){
                                        if(action == 'redirect')
                                            window.location.href= redirect_url;
                                        else
                                            dt();
                                    }
                                },

                            });
                        });
                        return false;
                    }
                },
                close_button: {
                    text: 'Cancel',
                    action: function () {
                    }
                },
            }
        });
    })


</script>
<script>
    if($('.select2_input').length)
    {
        $( ".select2_input" ).each(function( index ) {

            var url = $(this).data('select2-url');
            var placeholder = $(this).data('placeholder');
            var parent = $(this).data('parent');
            if (typeof parent !== typeof undefined && parent !== false)
                parent = $(parent);
            else
                parent = $('body');
            var can_tag = false;
            var check_is_tag = $(this).data('can-tag');
            if (typeof check_is_tag !== typeof undefined && check_is_tag !== false)
                can_tag = true;

            if (typeof url !== typeof undefined && url !== false){
                $(this).select2({
                    placeholder: placeholder,
                    allowClear: true,
                    dropdownParent: parent,
                    tags: can_tag,
                    ajax: {
                        url: url,
                        dataType: 'json',
                        method: 'get',
                        processResults: function (data) {
                            return {
                                results: data
                            };
                        },
                        cache: true
                    }
                });
            }
            else{
                $(this).select2({
                    placeholder: placeholder,
                    allowClear: true,
                    dropdownParent: parent,
                    tags: can_tag
                });
            }
        });
    }
</script>
<script>
    function intToString (value) {
        var suffixes = ["", "k", "m", "b","t"];
        var suffixNum = Math.floor((""+value).length/3);
        var shortValue = parseFloat((suffixNum != 0 ? (value / Math.pow(1000,suffixNum)) : value).toPrecision(2));
        if (shortValue % 1 != 0) {
            shortValue = shortValue.toFixed(1);
        }
        return shortValue+suffixes[suffixNum];
    }

    setInterval(function () {
        $('.convert-to-subs').each(function () {
            var regExp = /[a-zA-Z]/g;
            if(!regExp.test(intToString(this).html())){
                $(this).html(intToString(this).html());
            }
        })
    },2000)

</script>

@section('bottom')
@show
<script>

    var $table = $('#datatable');
    var ajaxUrl = $table.data('datatable-ajax-url');
    console.log(ajaxUrl)
    //var order = '';
    dt_table = $table.DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        "processing": true,
        "serverSide": true,
        responsive: true,
        ajax: {
            url: ajaxUrl,
            data: function(d) {
                var advanced_search = {};
                $('.datatable-advanced-search').each(function(i, obj) {
                    advanced_search[$(this).attr('name')] = $(this).val();
                });
                d.data = advanced_search;
            }
        },
        columns: my_columns,

        'aoColumnDefs': [
            { 'bSortable': false, 'sClass': "text-center table-width-10", 'aTargets': ['nosort'] },
            { "bSearchable": false, 'sClass': "text-center", "aTargets": [ 'nosearch' ] },
            { "bVisible": false, 'sClass': "d-none", "aTargets": ['nodisplay'] }
        ],
        errMode: 'throw',
        "order": [order],
        "language": {
            "search": "",
            'searchPlaceholder': 'Search...'
        },
        initComplete: function(settings, json) {
            $(this).trigger('initComplete', [this]);
            $(window).trigger('resize');
            this.api().columns().every( function () {

            });
            if($('.ratings').length)
            {
                $(".ratings").starRating({
                    starSize: 25,
                    readOnly: true
                });
            }
        },
        fnRowCallback : function(nRow, aData, iDisplayIndex, iDisplayIndexFull){
            updateDtSlno(this, slno_i);
        }
    });

    $('#datatable #column-search tr th').each( function () {
        var title = $(this).text();
        var columnClass = $(this).attr('class');
        if($(this).hasClass('searchable-input')){
            if($(this).hasClass('date'))
            {
                var id = $(this).attr('data-id');
                $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control input-sm daterange" name="updated_at" id="'+id+'" />' );
                $('.daterange').daterangepicker({
                    timePicker: true,
                    autoUpdateInput: false,
                    drops: "up",
                    locale: {
                        cancelLabel: 'Clear',
                        format: 'MM/DD/YYYY HH:mm'
                    }
                });
            }
            else if($(this).hasClass('date_time'))
            {
                var id = $(this).attr('data-id');
                $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control input-sm daterange" name="date_time" id="'+id+'" />' );
                $('#'+id).daterangepicker({
                    timePicker: true,
                    autoUpdateInput: false,
                    drops: "up",
                    locale: {
                        cancelLabel: 'Clear',
                        format: 'MM/DD/YYYY HH:mm'
                    }
                });
            }
            else
                $(this).html(  '<input type="text" placeholder="Search '+title+'" class="form-control input-sm search-input" />' );
        }
    });

    $( '#datatable thead').on( 'keyup change', ".search-input",function () {

        dt_table
            .column( $(this).parent().index() )
            .search( this.value )
            .draw();
    });

    $( '#datatable thead').on( 'change', ".select-box-input",function () {

        dt_table
            .column( $(this).parent().index() )
            .search( this.value )
            .draw();
    });


    function updateDtSlno(dt, slno_i) {
        if (typeof dt != "undefined") {
            if(typeof slno_i == 'undefined')
                slno_i = 0;
            table_rows = dt.fnGetNodes();
            var oSettings = dt.fnSettings();
            $.each(table_rows, function(index){
                $("td:eq(" + slno_i + ")", this).html(oSettings._iDisplayStart+index+1);
            });
        }
    }

    function dt(){
        dt_table.ajax.reload();
    }
</script>


</body>

</html>