<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FlashController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'getLogin']);
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/profile', [UserController::class, 'getProfile']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/flash-form', [FlashController::class, 'showFlashForm']);
Route::post('/submit-flash-form', [FlashController::class, 'submitFlashForm']);