<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//leitet auf die View
//localhost:8000/w2 ruft auf welcome2.blade.php
Route::get('w2', function () {
    return view('welcome2');
});

//leitet um auf einen Controller
Route::get('c1', [HomeController::class,'index']);


//leitet um auf einen Controller
Route::get('wert1', [HomeController::class,'wert1']);

