<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function league(){
        return $this->belongsTo('App\League');
    }
    
    public function teams(){
        return $this->belongsToMany('App\Team');
    }

    public function tickets(){
        return $this->hasMany('App\Ticket','match_id');
    }

    /* public function team(){
        return $this->belongsTo('App\Team');
    } */
}
