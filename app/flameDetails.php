<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flameDetails extends Model
{
    public function device(){
        return $this->belongsTo('App\device','id');
    }
}
