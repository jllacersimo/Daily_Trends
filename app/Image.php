<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='images';

    public $timestamps = false;

    //Relación de muchos a uno
    public function feed(){
        return $this->belongsTo('App\Feed', 'id');
    }

    //Relacion uno a muchos
    public function likes(){
        return $this->hasMany('App\Favorite');
    }

    //Relación de muchos a uno
    public function publisher(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
