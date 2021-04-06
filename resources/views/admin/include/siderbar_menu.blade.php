<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{url('admin')}}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('logo-thesupercode.jpg')}}" srcset="{{asset('admin-assets')}}/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('logo-thesupercode.jpg')}}" srcset="{{asset('admin-assets')}}/images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{asset('logo-thesupercode.jpg')}}" srcset="{{asset('logo-thesupercode.jpg')}}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Applications</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon">
                                <img src="https://img.icons8.com/plasticine/100/000000/youtube.png"/>
                            </span>
                            <span class="nk-menu-text">Youtube Statistics</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.ytchannel.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add new youtube channel</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.ytcategory.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add new youtube category</span></a>
                            </li>

                            <li class="nk-menu-item">
                                <a href="{{route('admin.ytchannel.index')}}" class="nk-menu-link"><span class="nk-menu-text">View all youtube channels</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.ytcategory.index')}}" class="nk-menu-link"><span class="nk-menu-text">View all youtube categories</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->


                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon">
                                <img src="https://img.icons8.com/emoji/48/000000/question-mark-emoji.png"/>
                            </span>
                            <span class="nk-menu-text">Quiz</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.quiz.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add new Quiz</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.qcategory.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add new Category</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->

                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>