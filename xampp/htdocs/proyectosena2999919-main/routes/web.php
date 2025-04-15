<?php

use App\Http\Controllers\OrmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});


route::get('OrmController',[OrmController::class,'consultas']);
