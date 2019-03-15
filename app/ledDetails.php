<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ledDetails extends Model
{
    public function device(){
        return $this->belongsTo('App\device','id');
    }
}
