@extends('admin.layouts.AdminBase')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/homeStyle.css')}}">
@endsection
@section('content')

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h3 class="page-title">Home Information</h3>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-water"></i></h1>
                            <h6 class="text-white">Humedanity <span class="sensor-value">67<sup><i class="fa fa-circle-o-notch" ></i></sup></span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-fan"></i></h1>
                            <h6 class="text-white">Ventilation System <span class="sensor-value" >off</span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-temperature-celsius"></i></h1>
                            <h6 class="text-white">Temperature <span class="sensor-value">76</span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="zmdi zmdi-fire "></i></h1>
                            <h6 class="text-white">Flame <span class="sensor-value" > 67</span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-security"></i></h1>
                            <h6 class="text-white">Flame System<span class="sensor-value" >GOOD</span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Rooms new Row -->
            <div class="row roomsRow">
                <div class= "col-md-6 col-sm-12 " >
                    <div class="homeRoom">
                        <div class="roomName"> test title</div>
                        <div class="roomBody">test body</div>
                    </div>
                </div>
                <div class= "col-md-6 col-sm-12 " >
                    <div class="homeRoom">
                        <div class="roomName"> test title</div>
                        <div class="roomBody">test body</div>
                    </div>
                </div>
                <div class= "col-md-6 col-sm-12 " >
                    <div class="homeRoom">
                        <div class="roomName"> test title</div>
                        <div class="roomBody">test body</div>
                    </div>
                </div>
                <div class= "col-md-6 col-sm-12 " >
                    <div class="homeRoom">
                        <div class="roomName"> test title</div>
                        <div class="roomBody">test body</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
