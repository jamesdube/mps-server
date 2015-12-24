<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Oct 2015 23:28:16 GMT -->
<head>
	<meta charset="utf-8" />
	<title>MPS | @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

    @section('header')
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="{{ url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet">
    <link href="{{ url('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/img/data-analytics/flaticon.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/theme/default.css') }}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ url('assets/plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    @show


</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

    <!-- begin #header -->
    <div id="header" class="header navbar navbar-inverse navbar-fixed-top">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin mobile sidebar expand / collapse button -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand bg-black"><span class="navbar-logo"></span> MPS Server</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end mobile sidebar expand / collapse button -->

            <!-- begin header navigation right -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form full-width">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        <i class="fa fa-bell-o"></i>
                        <span class="label">5</span>
                    </a>
                    <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                        <li class="dropdown-header">Notifications (5)</li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading">Server Error Reports</h6>
                                    <div class="text-muted f-s-11">3 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><img src="{{ url('assets/img/user-1.jpg')}}" class="media-object" alt="" /></div>
                                <div class="media-body">
                                    <h6 class="media-heading">John Smith</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">25 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><img src="{{ url('assets/img/user-2.jpg')}}" class="media-object" alt="" /></div>
                                <div class="media-body">
                                    <h6 class="media-heading">Olivia</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">35 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New User Registered</h6>
                                    <div class="text-muted f-s-11">1 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New Email From John</h6>
                                    <div class="text-muted f-s-11">2 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer text-center">
                            <a href="javascript:;">View more</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('assets/img/user-13.jpg')}}" alt="" />
                        <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li class="arrow"></li>
                        <li><a href="javascript:;">Edit Profile</a></li>
                        <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                        <li><a href="javascript:;">Calendar</a></li>
                        <li><a href="javascript:;">Setting</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end #header -->

    <!-- begin #sidebar -->
    <div id="sidebar" class="sidebar sidebar-grid">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <div class="image">
                        <a href="javascript:;"><img src="{{ url('assets/img/user-13.jpg')}}"  height="50" width="50" alt="user picture" /></a>
                    </div>
                    <div class="info">
                        <?php  ?>
                        {{ $user }}
                        <small>Developer</small>
                    </div>
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <ul class="nav">
                <li class="nav-header">Navigation</li>
                <li class="active"><a href="calendar.html"><i class="fa fa-laptop"></i> <span>Dashboard</span></a></li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <span class="badge pull-right">10</span>
                        <i class="fa fa-user"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('users/create') }}">New User</a></li>
                        <li><a href="email_inbox_v2.html">View User</a></li>
                        <li><a href="email_compose.html">Compose</a></li>
                        <li><a href="email_detail.html">Detail</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/orders') }}"><i class="fa fa-laptop"></i> <span>Orders</span></a></li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-cube"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="form_elements.html">Form Elements</a></li>
                        <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-building"></i>
                        <span>Customers</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="form_elements.html">Form Elements</a></li>
                        <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-ge"></i>
                        <span>Business Intelligence</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="http://seantheme.com/color-admin-v1.9/frontend/one-page-parallax/index.html" target="_blank">One Page Parallax</a></li>
                        <li><a href="http://seantheme.com/color-admin-v1.9/frontend/blog/index.html" target="_blank">Blog</a></li>
                        <li><a href="http://seantheme.com/color-admin-v1.9/frontend/forum/index.html" target="_blank">Forum</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-archive"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="email_system.html">System Template</a></li>
                        <li><a href="email_newsletter.html">Newsletter Template</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-cogs"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="email_system.html"><span>Data Sources<i class="fa text-theme fa-database m-l-5"></i></span></a></li>
                        <li><a href="email_newsletter.html">Newsletter Template</a></li>
                    </ul>
                </li>

                <!-- begin sidebar minify button -->
                <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                <!-- end sidebar minify button -->
            </ul>
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->

	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="javascript:;">Dashboard</a></li>
			<li class="active">Dashboard v2</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">@yield('title') <small>header small text goes here...</small></h1>
		<!-- end page-header -->


		<!-- begin row -->
		@yield('content')
		<!-- end row -->
	</div>
	<!-- end #content -->



	</div>
<!-- end page container -->

<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->

@section('footer')
<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ url('assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{ url('assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{ url('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{ url('assets/crossbrowserjs/html5shiv.js') }}"></script>
<script src="{{ url('assets/crossbrowserjs/respond.min.js') }}"></script>
<script src="{{ url('assets/crossbrowserjs/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ url('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{ url('assets/js/apps.min.js') }}"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

@show


</body>

</html>

