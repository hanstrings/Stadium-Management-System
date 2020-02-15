<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    //protected $primarykey= 'team_id';
    public function leagues(){
        return $this->belongsToMany('App\League');
    }
    public function matches(){
        return $this->belongsToMany('App\Match');
    }

    public function players(){
        return $this->hasMany('App\Player','team_id');
    }

    public function users(){
        return $this->hasMany('App\User','team_id');
    }
    //public $timestamps=true;
    /* public function matches1(){
        return $this->hasMany('App\Match','team_1');
    }

    public function matches2(){
        return $this->hasMany('App\Match','team_2');
    } */
}
