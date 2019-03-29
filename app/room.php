<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public  function  leds(){
      return  $this->hasMany('App\Led','room_id','id');
    }
    public  function  flames(){
        return  $this->hasMany('App\Flame','room_id','id');
    }
    public  function  dhts(){
        return  $this->hasMany('App\Dht','room_id','id');
    }
    public  function  doors(){
        return  $this->hasMany('App\Door','room_id','id');
    }
}
