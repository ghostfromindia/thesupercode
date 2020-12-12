@extends('admin.layout.base')


@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>

                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">

                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">New Users</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="{{url('admin/users')}}" class="link">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($users as $obj)
                                        <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{$obj->name}}</span>
                                                <span class="sub-text">{{$obj->email}}</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->

                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection