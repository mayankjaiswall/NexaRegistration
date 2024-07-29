<?php

use App\Http\Controllers\NexaController;
use Illuminate\Support\Facades\Route;

//HOME PAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

//REGIOSTRATION PAGE ROUTE BY CLICKING IT TAE TO THE REGISTER PAGE
Route::get('/register', function () {
    return view('registration');
});

//For storing thwe data we use this route
Route::post('store-form', [NexaController::class, 'store'])->name('storeddata');


//To show the data we are going to use this route
Route::get('/userdata', [NexaController::class, 'show'])->name('dataofuser');
