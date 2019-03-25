@extends('admin.layouts.AdminBase')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/homeStyle.css')}}">
    @endsection
@section('content')

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
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
                                <h1 class="font-light text-white"><i class="mdi mdi-roomba"></i></h1>
                                <h6 class="text-white">Living Room</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-food-variant"></i></h1>
                                <h6 class="text-white">Kitchen</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="zmdi zmdi-washing-machine"></i></h1>
                                <h6 class="text-white">Wash Room</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="zmdi zmdi-desktop-windows"></i></h1>
                                <h6 class="text-white">Office</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-lock-open"></i></h1>
                                <h6 class="text-white"><a href="{{route('homeDoor')}} "style="text-decoration:none">Home Door</a> </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title"></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div class="roomStyle">
                                            <h4 class="roomName">
                                                Name Room
                                            </h4>
                                            <div class="roomBody" >
                                                <div class="row" >
                                                    <div class="col-md-8 pull-left">left</div>
                                                    <div class="col-md-4 pull-right">right</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">22</h5>
                                                    <small class="font-light">Temprature</small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-plus m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">120</h5>
                                                    <small class="font-light">Hume</small>
                                                </div>
                                            </div>
                                            <div class="col-12 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">No Warring</h5>
                                                    <small class="font-light">PIR System</small>
                                                </div>
                                            </div>
                                            <div class="col-12 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-tag m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">No Warring</h5>
                                                    <small class="font-light">Alert System</small>
                                                </div>
                                            </div>
                                            <div class="col-12 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-table m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">Close</h5>
                                                    <small class="font-light">Door</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
