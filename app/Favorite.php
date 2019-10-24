<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table='favorites';

    public $timestamps = false;

    //Relación de Muchos a Uno
    public function publisher(){
        return $this->belongsTo('App\Publisher', 'publisher_id');
    }

    //Relación de muchos a uno
    public function feed(){
        return $this->belongsTo('App\Feed', 'feed_id');
    }
}
