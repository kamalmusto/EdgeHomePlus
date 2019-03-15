<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class device extends Model
{


    public function  room(){
      return  $this->belongsTo('App\room');
    }
    public function flame(){
        return $this->hasOne('App\flameDetails');
    }
    public function dht(){
        return $this->hasOne('App\dht11Details');
    }
    public function led(){
        return $this->hasOne('App\ledDetails');
    }
}
