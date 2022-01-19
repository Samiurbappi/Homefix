<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;



Route::get('/', function () {
    return view('home');
});


// applience repare
Route::get('applience',[ServiceController::class,'applience'])->name('applience');



// painting
Route::get('painting',[ServiceController::class,'painting'])->name('painting');


// shfitng
Route::get('shifting',[ServiceController::class,'shifting'])->name('shifting');


// ac reparing
Route::get('AC_reparing',[ServiceController::class,'AC_reparing'])->name('AC_reparing');



// car rental
Route::get('car_rental',[ServiceController::class,'car_rental'])->name('car_rental');
Route::get('car_rental/add',[ServiceController::class,'addCar'])->name('add.car');
Route::post('car_rental/info',[ServiceController::class,'storeCar'])->name('store.car');



// emergency
Route::get('emergency_service',[ServiceController::class,'emergency_service'])->name('emergency_service');


// electrical
Route::get('plumbing_service',[ServiceController::class,'plumbing_service'])->name('plumbing_service');


// plumbing
