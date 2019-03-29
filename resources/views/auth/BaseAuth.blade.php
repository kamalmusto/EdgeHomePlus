<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EDGE HOME+</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" Smart home edge home house house iot esp node mcu " name="keywords">
    <meta content="" name="description">
    <link href="{{asset('images/img/logo.png')}}" rel="icon">
    <link href="{{asset('images/img/logo.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/venobox/venobox.css"')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <a href="#intro" class="scrollto"><img width="50%" src="{{asset('images/img/logo.png')}}" alt="" title=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @yield('elementinNavbar')
            </ul>
        </nav>
    </div>
</header>
<main id="main">
@yield('content')
</main>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <img src="images/img/logo.png" alt="EdgeHome+">
                    <p>Our project is a student project whose aim is to show how the Internet can be used to control and secure our homes</p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Martakla <br>
                        Lattakia<br>
                        Syria <br>
                        <strong>Phone:</strong> 0946767970<br>
                        <strong>Email:</strong> Kamalmusto67@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>EdgeHome+</strong>
        </div>
        <div class="credits">
            <a href="https://bootstrapmade.com/">RandomByte</a>
        </div>
    </div>
</footer><!-- #footer -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('contactform/contactform.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts')
</body>
</html>
