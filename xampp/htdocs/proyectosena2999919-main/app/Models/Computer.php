<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function Apprentices()
    {
      return $this->hasOne('App\Models\Apprentices');//metodo de laravel
    }
}
