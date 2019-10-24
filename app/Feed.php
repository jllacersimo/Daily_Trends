<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $table='feeds';

    public $timestamps = false;

    //Relación de Muchos a Uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

   
}


