<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $table='feeds';

    //Relación de Muchos a Uno
    public function user(){
        return $this->belongsTo('App\Publisher', 'publisher');
    }

    //Relación de uno a muchos
    public function image(){
        return $this->hasMany('App\Image');
    }

   
}


