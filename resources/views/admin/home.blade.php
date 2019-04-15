@extends('admin.layouts.AdminBase')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/bttn.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/homeStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/myStyle.css')}}">
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
                            <h6 class="text-white">Humidity <span class="sensor-value" id="hum"></span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div id="sysVentilationCard" class="card card-hover ">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-fan"></i></h1>
                            <h6 class="text-white">Ventilation System <span class="sensor-value" id="venSystem" ></span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-temperature-celsius"></i></h1>
                            <h6 class="text-white">Temperature <span class="sensor-value" id="temp"></span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="zmdi zmdi-fire "></i></h1>
                            <h6 class="text-white">Flame<span class="sensor-value" id="flame" ></span></h6>
                            <h6 class="text-white" id="flameUpdatedAt"></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center" id="alertFlameCard">
                            <h1 class="font-light text-white"><i class="mdi mdi-security"></i></h1>
                            <h6 class="text-white">Flame System<span class="sensor-value" id="statusFlameAlert"></span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Rooms new Row -->
            <div class="row roomsRow text-left">
                    <div class= "col-md-6 col-sm-12 " >
                        <div class="homeRoom">
                            <div class="roomName"> <h3 class="text-center">Lights</h3></div>
                            <div class="roomBody">
                                    <table class="table table-hover">
                                           <thead class="bg-black text-white">
                                                <tr>
                                                    <th>Room</th>
                                                    <th>Status</th>
                                                    <th>Control</th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                           @foreach($leds as $led)
                                                <tr id="{{$led->id}}">
                                                    <td data-target="roomName">{{$led->room->name}} </td>
                                                    <td class="text-uppercase" data-target="ledStatus">{{$led->status}}</td>
                                                    <td><button href="#" class="bttn-fill  bttn-sm bttn-danger mr-2" data-role="offLed" data-id="{{$led->id}}">OFF</button>
                                                        <button href="#"  class="bttn-fill  bttn-sm bttn-success"  data-role="onLed" data-id = "{{$led->id}}">ON</button>
                                                    </td>
                                                </tr>
                                           @endforeach
                                           </tbody>
                                        </table>
                            </div>
                        </div></div>
                <div class= "col-md-6 col-sm-12" >
                    <div class="homeRoom">
                        <div class="roomName"> <h3 class="text-center">Doors</h3></div>
                        <div class="roomBody">
                            <table class="table table-hover">
                                <thead class="bg-black text-white">
                                <tr>
                                    <th>Room</th>
                                    <th>Status</th>
                                    <th>Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($doors as $door)
                                    <tr id="{{$door->id}}door">
                                        <td>{{$door->room->name}}</td>
                                        <td data-target="doorStatus">@if($door->status) ON @else OFF @endif</td>
                                        <td><button  class="bttn-fill  bttn-sm bttn-danger mr-2" data-role="closeDoor" data-target="" data-id="{{$door->id}}">Close</button>
                                            <button class="bttn-fill  bttn-sm bttn-success" data-role="openDoor" data-toggle="" data-id="{{$door->id}}">Open</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class= "col-md-6 col-sm-12" >
                    <div class="homeRoom">
                        <div class="roomName"> <h3 class="text-center">Devices 220 V</h3></div>
                        <div class="roomBody">
                            <table class="table table-hover">
                                <thead class="bg-black text-white">
                                <tr>
                                    <th>Room</th>
                                    <th>Device</th>
                                    <th>Status</th>
                                    <th>Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Living Room</td>
                                    <td>Fan</td>
                                    <td>OFF</td>
                                    <td>
                                        <button href="#" class="bttn-fill  bttn-sm bttn-danger mr-2" data-role="" data-id="">OFF</button>
                                        <button href="#"  class="bttn-fill  bttn-sm bttn-success"  data-role="" data-id = "">ON</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Living Room</td>
                                    <td>Lamp</td>
                                    <td>OFF</td>
                                    <td>
                                        <button href="#" class="bttn-fill  bttn-sm bttn-danger mr-2" data-role="" data-id="">OFF</button>
                                        <button href="#"  class="bttn-fill  bttn-sm bttn-success"  data-role="" data-id = "">ON</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class= "col-md-6 col-sm-12" >
                    <div class="homeRoom">
                        <div class="roomName">  <h3 class="text-center"> <button  class="bttn-fill bttn-md bttn-primary" data-role="setTimer" data-target="#setTimer" data-toggle="modal">Set</button> Timer </h3></div>
                        <div class="roomBody">
                            <table class="table table-hover">
                                <thead class="bg-black text-white">
                                <tr>
                                    <th>Room</th>
                                    <th>Device</th>
                                    <th>Time On</th>
                                    <th>Time OFF</th>
                                    <th>Period</th>
                                    <th>Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Room</td>
                                    <td>Device</td>
                                    <td>Time On</td>
                                    <td>Time OFF</td>
                                    <td>Period</td>
                                    <td><button  class="bttn-fill  bttn-sm bttn-danger mr-2" data-role="closeDoor" data-target="" data-id="">del</button>
                                        <button class="bttn-fill  bttn-sm bttn-success" data-role="openDoor" data-toggle="" data-id="">Edit</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <!-- modals -->
    <!-- start open Door modal -->
    <div class=" modal fade" tabindex="-1" role="dialog" aria-labelledby="openDoorModalLabel" id="openDoorModal">
        <div class="modal-dialog" role="document">
            <div  class="bg-black modal-content text-white">
                <div class="modal-header">
                    <h4 class="modal-title text-white" id="loginModalLabel"  data-target="">Open Door</h4>
                    <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="password" class="col-12 col-form-label ">Password</label>
                                <div class="col-12">
                                    <input id="password" data-target="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="" required >
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input hidden id="status" data-target="status" type="text" class="form-control" name="status" value="1" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="hidden" id="openDoorId" data-target="id" type="text" class="form-control" value="id">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class=" col-12 ">
                                    <button id="openBtn"  class=" mx-auto d-block myBtn">
                                        <i class="mdi mdi-send" ></i> Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- open Door modal -->

    <!-- Close Door Modal -->
    <div class=" modal fade" tabindex="-1" role="dialog" aria-labelledby="closeDoorModalLabel" id="closeDoorModal">
        <div class="modal-dialog" role="document">
            <div  class="bg-black modal-content text-white">
                <div class="modal-header">
                    <h4 class="modal-title text-white" id="closeDoorModalLabel"  data-target="">Close Door</h4>
                    <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="password" class="col-12 col-form-label ">Password</label>
                                <div class="col-12">
                                    <input id="passwordCloseDoor" data-target="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="" required >
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input hidden id="status" data-target="status" type="text" class="form-control" name="status" value="1" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="hidden" id="closeDoorId" data-target="id" type="text" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class=" col-12 ">
                                    <button id="closeBtn" type="" class=" mx-auto d-block myBtn">
                                        <i class="mdi mdi-send" ></i> Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Door Modal -->

    <!-- Timer tools modals Modal -->
    <div class=" modal fade" tabindex="-1" role="dialog" aria-labelledby="setTimer" id="setTimer">
        <div class="modal-dialog" role="document">
            <div  class="bg-black modal-content text-white">
                <div class="modal-header">
                    <h4 class="modal-title text-white" id="setTimer"  data-target="">Timer</h4>
                    <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label for="sl_Device" class="col-12 col-form-label">Device</label>
                            <div class="col-12 " >
                                <select name="sl_Device" id="" class="form-control">
                                    @foreach($leds as $led)
                                        <option value="{{$led->id}}" >{{$led->numBin}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row mb-0">
                                <div class=" col-12 ">
                                    <button id="closeBtn" type="" class=" mx-auto d-block myBtn">
                                        <i class="mdi mdi-send" ></i> Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Door Modal -->
    <!-- end Modals -->


@endsection
@section('scripts')
    <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('js/jq2.js')}}"></script>
    @endsection
