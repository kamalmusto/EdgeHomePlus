<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Door;
use App\Dht;
use App\Flame;
use App\Led;
use App\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rooms = Room::all();
        $dhts = Dht::all()->load('room');
        $leds = Led::all()->load('room');
        $flames = Flame::all()->load('room');
        $doors = Door::all()->load('room');
        $globalFlame = Flame::findOrFail(1);
        $globalDht = dht::findOrFail(1);
        $gateDoor = Door::findOrFail(2);

        return view('admin.home',compact('rooms','dhts','leds','flames','doors','gateDoor','globalDht','globalFlame'));
    }
}
