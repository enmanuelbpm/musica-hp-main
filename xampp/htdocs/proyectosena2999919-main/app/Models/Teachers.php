<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    public function TraningCenter(){
        return $this->belongsTo('App\Models\TraningCenter');
    }

    public function courses_teacher(){
        return $this->belongsToMany('App\Models\course_teacher');
    }
    public function areas(){
        return $this->belongsToMany('App\Models\areas');
    }
}
