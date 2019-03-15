<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dht11Details extends Model
{
    public function device(){
        return $this->belongsTo('App\device','id');
    }
}
