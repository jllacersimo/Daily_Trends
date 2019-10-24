<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table='favorites';

    public $timestamps = false;

    //Relación de Muchos a Uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //Relación de muchos a uno
    public function feed(){
        return $this->belongsTo('App\Feed', 'feed_id');
    }
}
