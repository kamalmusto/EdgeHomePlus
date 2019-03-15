<?php

namespace App\Http\Controllers\api;
use App\dht11Details;
use App\Http\Requests\updateDeviceRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\device;
use App\ledDetails;
use App\flameDetails;
use App\Http\Resources\device as deviceResource;
use App\Http\Resources\flameDetails as flameDetailsResource;
use App\Http\Resources\dht11Details as dht11DetailsResource;
use App\Http\Resources\ledDetails as ledDetailsResource;


class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allDevices = device::all()->load(['room']);
        return deviceResource::collection($allDevices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $device = device::findOrFail($id);
        $type = $device->type;
        if ($type == 'leds') {
            $data = ledDetails::findOrFail($id)->load('device');
            $data->is_active = $request->is_active;
            $data->status = $request->status;
            $data->saveOrfail();
            return new ledDetailsResource($data);
        }
        if ($type == 'dht') {
            $data = dht11Details::findOrFail($id)->load('device');
            $data->temp = $request->temp;
            $data->hum = $request->hum;
            $data->is_active = $request->is_active;
            $data->saveOrfail();
            return new dht11DetailsResource($data);
        }
        if ($type == 'flame') {
            $data = flameDetails::findOrFail($id)->load('device');
            $data->is_active = $request->is_active;
            $data->value = $request->value;
            $data->saveOrfail();
            return new flameDetailsResource($data);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $id
     * @param $type
     * @return device and details
     */
    public  function  getDetails($id,$type){
        try {
            if ($type == 'leds') {
                $data = ledDetails::findOrFail($id)->load('device');
                return new ledDetailsResource($data);
            }
            if ($type == 'dht') {
                $data = dht11Details::findOrFail($id)->load('device');
                return new dht11DetailsResource($data);
            }
            if ($type == 'flame') {
                $data = flameDetails::findOrFail($id)->load('device');
                return new flameDetailsResource($data);
            }
        }
        catch (\Exception $exception){
            return response($exception->getMessage(),'404');
        }
    }
}
