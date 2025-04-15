<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function TraningCenter(){
        return $this->belongsTo('App\Models\TraningCenter');
    }

    public function Areas(){
        return $this->belongsTo('App\Models\Areas');
    }

    public function Apprentices(){
        return $this->hasMany('App\Models\Apprentices');
    }

    public function Course_teacher(){
        return $this->hasMany('App\Models\Course_teacher');
    }
}
