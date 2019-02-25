@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/myStyle.css')}}">
    @endsection
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark mybg-dark fixed-top bg-transparent" >
        <a class="navbar-brand" href="#">EdgeHomePlus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Our Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Control</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel" data-interval="3000" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slide/1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slide/2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slide/3.png" alt="Third slide">
            </div>
        </div>
    </div>
    <div class="container" >
        <h1 class="display-4 text-center mt-4 mb-4" ><span class="base-color-title">EdgeHome+</span> FEATURES</h1>
        <div class="row" >
           <div class="col-lg-3 col-md-6 col-sm-12 mb-2 " >
               <div class="myBox" >
                    <div class="">
                        <img class="myimg" src="images/featuresCard/images.png" alt="">
                    </div>
                   <div class="details mt-2 text-center " >
                       <h6 id="firstCard"> <span class="badge badge-warning" style="color: white;">Control Using Internet</span></h6>

                   </div>
               </div>
           </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2 " >
                <div class="myBox" >
                    <div class="">
                        <img class="myimg" src="images/featuresCard/vector_525_02-512.png" alt="">
                    </div>
                    <div class="details mt-2 text-center " >
                        <h6  id="secondCard"> <span class="badge badge-info">Remote Monitoring</span> </h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2 " >
                <div class="myBox" >
                    <div class="">
                        <img class="myimg" src="images/featuresCard/Cybersecurity.jpg" alt="">
                    </div>
                    <div class="details mt-2 text-center " >
                        <h6  id="thirdCard"> <span class="badge badge-info">Security System</span>  </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2" >
                <div class="myBox" >
                    <div class="">
                        <img class="myimg" src="images/featuresCard/alert-01.png" alt="">
                    </div>
                    <div class="details mt-2 text-center " >
                        <h6  id="forthCard">  <span class="badge badge-danger"> Alert System</span> </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
