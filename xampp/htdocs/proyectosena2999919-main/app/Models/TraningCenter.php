<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TraningCenter extends Model
{
    public function Courses(){
        return $this->hasMany('App\Models\Courses');
    }

    public function Teachers(){
        return $this->hasMany('App\Models\Teachers');
    }
}
