<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

// Route::get('/home',[userController::class,'showHome']);
// Route::get('/about',[userController::class,'showAbout']);
// Route::get('/contact',[userController::class,'showContact'])->name('con');
// Route::post('/submit-contact',[userController::class,'submitContact']);

Route::controller(userController::class)->group(function () {
    Route::get('/home', 'showHome');
    Route::get('/about', 'showAbout');
    Route::get('/about/{name}', 'showAboutName');
    Route::get('/contact', 'showContact')->name('con');
    Route::post('/submit-contact', 'submitContact');
});