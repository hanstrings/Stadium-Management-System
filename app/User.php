<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AgendamentoPendente;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','nationality','age','phone','address','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //protected $primarykey= 'username';
    
    //public $timestamps=true;

    public function verified()
    {
        return $this->token ===null;
    }

    public function sendVerificationEmail(){
        $this->notify(new VerifyEmail($this));
    }

    public function team(){
        return $this->belongsTo('App\Team');
    }

    public function player(){
        return $this->belongsTo('App\Player');
    }

    public function tickets(){
        return $this->hasMany('App\Ticket','user_id');
    }
    
}
