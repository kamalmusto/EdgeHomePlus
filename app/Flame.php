<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Flame extends Model
{
    public function room(){
        return $this->belongsTo('App\Room','room_id','id');
    }
}
