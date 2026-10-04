<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oneluxe</title>

    <base href="/">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" href="{{asset('images/icon/facivon/favicon-32x32.png')}}" type="image/png" sizes="16x16">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- SUMMERNOTE START  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- SUMMERNOTE END  -->
    <!--swal cnd for popup-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">-->
    <!--End swal cdn popup-->
    <style>
        .brand-link {
            border: none !important;
        }

        .sidebar {
            padding-top: 27px !important;
        }

    </style>
</head>

<style>
.elevation-3 {
    box-shadow: 0 10px 20px rgba(0, 0, 0, .19), 0 6px 6px rgb(85 71 71 / 23%) !important;
   }
    .form-control {
        height: 43px !important;
    }

    .img-circle {
        border-radius: 0% !important;
    }

    /*.note-editor.note-airframe .note-editing-area, .note-editor.note-frame .note-editing-area {*/
    /*   min-height:250px!important;*/
    /*}*/

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #007bff;
        color: #fff;
        text-align: left;
    }
    .brand-link .brand-image{
        float: none!important;
    }
    .brand-link{
        text-align: center;
    }

</Style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!--<div class="preloader flex-column justify-content-center align-items-center">-->
        <!--    <img class="animation__shake" src="{{asset('images/logo/logo_far_and_beyond_black.png')}}" alt="AdminLTELogo"-->
        <!--        style="color: black; width:500px" height="60" width="60">-->
        <!--</div>-->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!--<li class="nav-item d-none d-sm-inline-block">-->
                <!--    <a href="/" class="nav-link">Home</a>-->
                <!--</li>-->
                <!--<li class="nav-item d-none d-sm-inline-block">-->
                <!--    <a href="#" class="nav-link">Contact</a>-->
                <!--</li>-->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->

                <!-- Messages Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a> -->
                <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                                <img src="dashboard/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div> -->
                <!-- Message End -->
                <!-- </a> -->
                <!-- <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                                <img src="dashboard/dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div> -->
                <!-- Message End -->
                <!-- </a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <!-- <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                                <img src="dashboard/dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div> -->
                <!-- Message End -->
                <!-- </a> -->
                <!-- <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div> -->
                <!-- </li> -->
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->

                <!-- User Profile  -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="/user/profile" class="dropdown-item" style="display:none;">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <i class="fa fa-user"></i> My Profile
                                        <span class="float-right text-sm text-primary"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">See My Profile...</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <!-- <form action="logout" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                  Message Start -->
                        <!-- <div class="media">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            <i class="fa fa-user-lock"></i> Logout
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Close The Session...</p>
                                    </div>
                                </div> -->
                        <!-- Message End -->
                        <!-- </button>
                        </form>  -->
                        <a href="logout" class="nav-link">Logout</a>
                    </div>
                </li>
                <!-- User Profile -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="landing-page" class="brand-link">
                <img src="{{asset('images/logo/Oneluxe_Logo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">

            </a>

            <!-- Sidebar -->
 <div class="sidebar">
    <!-- Search Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            {{-- Website Data --}}
            @php
                $websiteMenuActive = request()->is('landing-page') || request()->routeIs('admin.aboutUs', 'admin.designation', 'admin.service', 'little.inspirations', 'admin.responsible');
            @endphp
            <li class="nav-item {{ $websiteMenuActive ? 'menu-is-opening menu-open' : '' }}">
                <a href="#" class="nav-link {{ $websiteMenuActive ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Website Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('landing-page') }}" class="nav-link {{ request()->is('landing-page') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Home Page</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.aboutUs') }}" class="nav-link {{ request()->routeIs('admin.aboutUs') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About Us</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.designation') }}" class="nav-link {{ request()->routeIs('admin.designation') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Destinations</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.service') }}" class="nav-link {{ request()->routeIs('admin.service') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Services</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('little.inspirations') }}" class="nav-link {{ request()->routeIs('little.inspirations') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inspiring Experiences</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.responsible') }}" class="nav-link {{ request()->routeIs('admin.responsible') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Responsible Travel</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Blogs & Testimonials --}}
            @php
                $blogMenuActive = request()->is('addpost') || request()->routeIs('blog.lists', 'add.testimonial', 'all.testimonial');
            @endphp
            <li class="nav-item {{ $blogMenuActive ? 'menu-is-opening menu-open' : '' }}">
                <a href="#" class="nav-link {{ $blogMenuActive ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Blogs & Testimonial
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('addpost') }}" class="nav-link {{ request()->is('addpost') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Blog</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog.lists') }}" class="nav-link {{ request()->routeIs('blog.lists') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blogs List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all.testimonial') }}" class="nav-link {{ request()->routeIs('all.testimonial') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Testimonial</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Inquiry & Subscriptions --}}
            @php
                $inquiryMenuActive = request()->routeIs('admin.inquiry', 'admin.subscription');
            @endphp
            <li class="nav-item {{ $inquiryMenuActive ? 'menu-is-opening menu-open' : '' }}">
                <a href="#" class="nav-link {{ $inquiryMenuActive ? 'active' : '' }}">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                        Inquiry & Subscriptions
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.inquiry') }}" class="nav-link {{ request()->routeIs('admin.inquiry') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Inquiry</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.subscription') }}" class="nav-link {{ request()->routeIs('admin.subscription') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Subscription</p>
                        </a>
                    </li>
                   {{-- <li class="nav-item">
                        <a href="{{ route('admin.transaction.list') }}" class="nav-link {{ request()->routeIs('admin.transaction.list') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Transaction</p>
                        </a>
                    </li>--}}
                </ul>
            </li>
            
            
             {{-- Inquiry & Subscriptions --}}
            @php
                $inquiryMenuActive1 = request()->routeIs('admin.transaction.list');
            @endphp
            <li class="nav-item {{ $inquiryMenuActive1 ? 'menu-is-opening menu-open' : '' }}">
                <a href="#" class="nav-link {{ $inquiryMenuActive1 ? 'active' : '' }}">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                       Payments
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.transaction.list') }}" class="nav-link {{ request()->routeIs('admin.transaction.list') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Online Payments</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- SEO --}}
            <li class="nav-header">SEO Tagging</li>
            <li class="nav-item">
                <a href="{{ route('admin.view.seo') }}" class="nav-link {{ request()->routeIs('admin.view.seo') ? 'active' : '' }}">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">SEO</p>
                </a>
            </li>

        </ul>
    </nav>
</div>


            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('page-content')

        <!-- /.content-wrapper -->
        <footer class="main-footer">

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <!--<script src="{{asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>-->
    <!--<script src="{{asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>-->
    <!-- jQuery Knob Chart -->
    <script src="{{asset('dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('dashboard/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dashboard/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
    @yield('scripts')
</body>

</html>
