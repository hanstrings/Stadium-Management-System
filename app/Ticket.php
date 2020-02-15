<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function section(){
        return $this->belongsTo('App\Section');
    }

    public function match(){
        return $this->belongsTo('App\Match');
    }
}
