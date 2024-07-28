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


Route::post('store-form', [NexaController::class, 'store'])->name('storeddata');
