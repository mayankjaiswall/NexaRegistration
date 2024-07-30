<?php

use App\Http\Controllers\NexaController;
use Illuminate\Support\Facades\Route;

//HOME PAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});


//REGIOSTRATION PAGE ROUTE BY CLICKING IT TAE TO THE REGISTER PAGE
// Route::get('/register', function () {
//     return view('registration');
// })->name('registerdata');

//OR

Route::view('/register', [NexaController::class, 'registration'])->name('registerdata');

//For storing thwe data we use this route
Route::post('store-form', [NexaController::class, 'store'])->name('storeddata');


//To show the data we are going to use this route
Route::get('/userdata', [NexaController::class, 'show'])->name('dataofuser');

//to delete the data this route is useed
Route::get('/delete/{id}', [NexaController::class, 'deleted'])->name('deletedata');


//to edit data we are using this route
Route::get('/editdata/{id}', [NexaController::class, 'editdata'])->name('editdata');
