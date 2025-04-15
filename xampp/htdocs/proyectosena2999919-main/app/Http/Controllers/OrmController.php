<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Teachers;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas(){
        //$Areas = Areas::find(2);
        //return $Areas;

        $Teachers =Teachers::find(1);
        return $Teachers;


    }
}
