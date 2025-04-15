<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    public function Computer()
    {
      return $this->belongsTo('App\Models\Computer');//metodo de laravel
    }

    public function Courses(){
        return $this->hasMany('App\Models\Courses');
    }
}
