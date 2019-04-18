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
    <link rel="stylesheet" href="{{asset('css/icons/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <a href="#intro" class="scrolltop"><img width="50%" src="{{asset('images/img/logo.png')}}" alt="" title=""></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#our-team">Our Team</a></li>
                <li><a href="#Place">Place</a></li>
                <li><a href="#gallery">Gallery</a></li>
                @if(\Illuminate\Support\Facades\Auth::user())
                    <li class="buy-tickets"><a href="{{route('home')}}" data-toggle="" data-target="">Dashboard</a></li>
                @else
                    <li class="buy-tickets"><a href="#" data-toggle="modal" data-target="#loginModal">Log In</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>
<div class=" modal fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" id="loginModal">
<div class="modal-dialog" role="document">
    <div  class="bg-dark modal-content text-white ">
        <div class="modal-header">
            <h4 class="modal-title text-white" id="loginModalLabel" >{{ __('Login') }}</h4>
            <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="text-white" aria-hidden="true">x</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                    <div class="col-12">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email" class="col-12 col-form-label ">{{ __('E-Mail Address') }}</label>
                                        <div class="col-12">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-12 col-form-label">{{ __('Password') }}</label>
                                        <div class="col-12">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-12 offset-md-4">
                                            <button type="submit" class="myBtn">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class=" form-group row mb-0 text-center offset-md-3 ">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">The <span>EdgeHome+</span> Project</h1>
        <p class="mb-4 pb-0">Development, IOT, Cloud</p>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
           data-autoplay="true"></a>
        <a href="#about" class="about-btn scrollto">About The Project</a>
    </div>
</section>

<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About The Project</h2>
                    <p>The Project present How we Can Use Internet in our Home ?And... <br> What are there the services with IOT ?</p>
                </div>
                <div class="col-lg-3">
                    <h3>Where</h3>
                    <p>Syria, lattakia, Tishreen University</p>
                </div>
                <div class="col-lg-3">
                    <h3>When</h3>
                    <p>MEE6</p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      our-team Section
    ============================-->
    <section id="our-team" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Doctor Supervisor</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-block mx-auto">
                    <div class="our-team">
                        <img src="{{asset('images/persons/Dr.mariam.jpg')}}" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href=""> Dr.Mariam Saii </a></h3>

                            <div class="social">
                                <a href="https://www.facebook.com/mariam.m.saii"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/mariam.m.saii"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.facebook.com/mariam.m.saii"><i class="fa fa-google-plus"></i></a>
                                <a href="https://www.facebook.com/mariam.m.saii"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="section-header">
                <h2>The Students</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="our-team">
                        <img src="{{asset('images/persons/Rand.jpg')}}" alt="Speaker 4" class="img-fluid">
                        <div class="details">
                            <h3><a href="">Rand Kara Ahmad</a></h3>
                            <p></p>
                            <div class="social">
                                <a href="https://www.facebook.com/profile.php?id=100009506423886"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100009506423886"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100009506423886"><i class="fa fa-google-plus"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100009506423886"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="our-team">
                        <img src="{{asset('images/persons/kamal2.jpg')}}" alt="Speaker 5" class="img-fluid">
                        <div class="details">
                            <h3><a href="">Kamal Musto</a></h3>
                            <p></p>
                            <div class="social">
                                <a href="https://www.facebook.com/byte0111"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/byte0111"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.facebook.com/byte0111"><i class="fa fa-google-plus"></i></a>
                                <a href="https://www.linkedin.com/in/kamal-musto-3271a7169/"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="our-team">
                        <img src="{{asset('images/persons/hassan.jpg')}}" alt="Speaker 6" class="img-fluid">
                        <div class="details">
                            <h3><a href="">Hassan Hallak</a></h3>
                            <p></p>
                            <div class="social">
                                <a href="https://www.facebook.com/hassan.hallak4"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/hassan.hallak4"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.facebook.com/hassan.hallak4"><i class="fa fa-google-plus"></i></a>
                                <a href="https://www.facebook.com/hassan.hallak4"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Place" class="wow fadeInUp">
        <div class="container-fluid">
            <div class="section-header">
                <h2>EdgeHome+ At</h2>
                <p></p>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 venue-map">
                    <iframe src="https://www.google.com/maps/place/Tishreen+University/@35.5229125,35.8072654,16z/data=!4m5!3m4!1s0x1526ac18a2d4d5cd:0x3dc7dc57373f03b4!8m2!3d35.5226303!4d35.8072905" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>MEE6, Lattakia</h3>
                            <p>2018/2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Gallery</h2>
                <p></p>
            </div>
        </div>
        <div class="owl-carousel gallery-carousel">
            <a href="{{asset('images/img/gallery/1.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/1.png')}}" alt=""></a>
            <a href="{{asset('images/img/gallery/2.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/2.png')}}" alt=""></a>
            <a href="{{asset('images/img/gallery/3.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/3.png')}}" alt=""></a>
            <a href="{{asset('images/img/gallery/4.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/1.png')}}" alt=""></a>
            <a href="{{asset('images/img/gallery/5.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/2.png')}}" alt=""></a>
            <a href="{{asset('images/img/gallery/6.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/3.png')}}" alt=""></a>
            <a href="{{asset('images/img/gallery/7.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/1.png')}}" alt=""></a>
            <a href="{{asset('images/img/gallery/8.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('images/slide/2.png')}}" alt=""></a>
        </div>

    </section>
    <section id="subscribe">
        <div class="container wow fadeInUp">
        </div>
    </section>
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h2>EdgeHome+ Features</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h3 class="section-header text-center">Full Control</h3>
                            <hr>
                            <p class="text-center overflow-hidden">You can control of any electronics device in your home</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h3 class="section-header text-center">Alert System</h3>
                            <hr>
                            <p class="text-center ">Send alert to your email Or phone number if had occured any error in your home</p>

                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="section-header text-center">Security System</h3>
                            <hr>
                            <p class="text-center ">you can protect your home and watch all status devices  </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->

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
                        Syria <br>
                        Lattakia<br>
                        Tishreen Unversity <br>
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
            <a href="https://TisreenUniversity.com/">Tishreen University</a>
        </div>
    </div>
</footer>
<!-- #footer -->
<!-- modal login -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- JavaScript Libraries -->
<script src="{{secure_asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{secure_asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{secure_asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{secure_asset('lib/easing/easing.min.js')}}"></script>
<script src="{{secure_asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{secure_asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{secure_asset('lib/wow/wow.min.js')}}"></script>
<script src="{{secure_asset('lib/venobox/venobox.min.js')}}"></script>
<script src="{{secure_asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{secure_asset('contactform/contactform.js')}}"></script>
<script src="{{secure_asset('js/jquery.nicescroll.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{secure_asset('js/main.js')}}"></script>
</body>

</html>
