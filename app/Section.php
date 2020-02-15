<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function tickets(){
        return $this->hasMany('App\Ticket','section_id');
    }
}
