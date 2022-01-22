<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SP\CarController;
use App\Http\Controllers\Controller;



Route::get('/', function () {
    return view('home');
});

// User controlle Route
Route::get('login',[Controller::class,'loginView'])->name('login.view');
Route::post('login/user',[Controller::class,'login'])->name('login');
Route::get('reg',[Controller::class,'regView'])->name('regView');
Route::post('register',[Controller::class,'register'])->name('register');
Route::get('logout',[Controller::class,'logout'])->name('logout');

// applience repare
Route::get('applience',[ServiceController::class,'applience'])->name('applience');



// painting
Route::get('painting',[ServiceController::class,'painting'])->name('painting');


// shfitng
Route::get('shifting',[ServiceController::class,'shifting'])->name('shifting');


// ac reparing
Route::get('AC_reparing',[ServiceController::class,'AC_reparing'])->name('AC_reparing');



// car.service.create
Route::get('/car/service/list',[CarController::class,'serviceList'])->name('car.service.list');
Route::get('/car/create/service',[CarController::class,'carService'])->name('car.service.create');
Route::post('/car/store/service',[CarController::class,'carServicestore'])->name('car.store.service');
Route::get('/car/service/approve/{id}',[CarController::class,'approve'])->name('car.service.approve');
Route::get('/car/service/delete/{id}',[CarController::class,'delete'])->name('car.service.delete');
// wazed

Route::get('car_rental',[ServiceController::class,'car_rental'])->name('car_rental');
Route::get('car_rental/add',[ServiceController::class,'addCar'])->name('add.car');
Route::post('car_rental/info',[ServiceController::class,'storeCar'])->name('store.car');



// emergency
Route::get('emergency_service',[ServiceController::class,'emergency_service'])->name('emergency_service');


// electrical
Route::get('plumbing_service',[ServiceController::class,'plumbing_service'])->name('plumbing_service');


// cart add.cart
Route::get('card/add/{id}',[CartController::class,'addCart'])->name('add.cart');
Route::get('card/view',[CartController::class,'Cartview'])->name('cart.view');
