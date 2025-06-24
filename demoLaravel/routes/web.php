<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/home','home');
// Route::redirect('/home','/');

Route::get('/home',[UserController::class,'getHome']);
Route::get('/user',[UserController::class,'getUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);
Route::get('admin',[UserController::class,'adminLogin']);