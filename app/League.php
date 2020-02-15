<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    //
    //protected $primarykey= 'le_id';
    
    //public $timestamps=true;

    public function matches(){
        return $this->hasMany('App\Match','league_id');
    }

    public function team(){
        return $this->belongsToMany('App\Team');
    }
}
