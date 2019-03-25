<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>EdgeHome Dashboard</title>
    <link href="{{asset('css/admin/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/icons/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    @yield('styles')
</head>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <a class="navbar-brand" href="">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">

                    </b>
                    <span class="logo-text">
                             EDGE <span style="color:#f82249" >HOME+</span>
                        </span>
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                            <ul class="list-style-none">
                                <li>
                                    <div class="">
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="zmdi zmdi-home"></i><span class="hide-menu">Home </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Devices1 </span></a></li>
                            <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Devices1 </span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar      navigation -->
        </div>
    </aside>
@yield('content')
</div>
<footer class="footer text-center">
    All Rights Reserved by  Designed and Developed by <a href="https://.com">RandomByte</a>.
</footer>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="{{asset('js/admin/jquery.min.js')}}"></script>
<script src="{{asset('js/admin/jquery.ui.touch-punch-improved.js')}}"></script>
<script src="{{asset('js/admin/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/admin/popper-utils.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/css/bootstrap.min.css')}}"></script>
<script src="{{asset('js/admin/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('js/admin/sidebarmenu.js')}}"></script>
<script src="{{asset('js/admin/custom.min.js')}}"></script>
@yield('scripts')
</body>
</html>
