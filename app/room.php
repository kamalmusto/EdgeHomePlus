<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    public  function  ledDetails(){
      return  $this->hasMany('App\ledDetails');
    }
    public  function  flameDetails(){
        return  $this->hasMany('App\flameDetails');
    }
    public  function  dht11Details(){
        return  $this->hasMany('App\dht11Details');
    }
}
