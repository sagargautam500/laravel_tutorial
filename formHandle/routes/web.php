<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_form_controller;

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

Route::get('/user-form', [user_form_controller::class, 'showForm']);
Route::post('/submit-user', [user_form_controller::class, 'submitForm']);