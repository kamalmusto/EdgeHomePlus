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
    <link rel="stylesheet" href="{{asset('css/icons/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    @yield('styles')
</head>
<body>
@yield('content')
<footer class="footer text-center">
    All Rights Reserved by  Designed and Developed by <a href="https://wrappixel.com">RandomByte</a>.
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
