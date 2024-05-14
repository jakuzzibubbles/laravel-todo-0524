<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;

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

Route::get('/home', function () {
    return view('platzhalter-inhalt');
});

Route::get('/home2', function () {
    return view('section-demo');
});

//Route::get('/flights', [HomeController::class,'flights']);

Route::get('/flights', [FlightController::class,'index']);

