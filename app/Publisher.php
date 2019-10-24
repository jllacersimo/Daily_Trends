<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Publisher as Authenticatable;

class Publisher extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password','id_feel','date',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relación de uno a muchos
    public function images(){
        return $this->hasMany('App\Image');
    }

    //Relación de uno a muchos
    public function feeds(){
        return $this->hasMany('App\Feed');
    }

}
