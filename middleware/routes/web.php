<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\CountryCheck;

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

// Route::get('/home', [homeController::class, 'showHome'])->middleware(ageCheck::class, CountryCheck::class);
// Route::get('/home', [homeController::class, 'showHome']);
// Route::get('/about', [homeController::class, 'showAbout']);
// Route::get('/contact', [homeController::class, 'showContact']);

Route::middleware([ageCheck::class, CountryCheck::class])->group(function () {
    Route::get('/home', [homeController::class, 'showHome']);
    Route::get('/about', [homeController::class, 'showAbout']);
    Route::get('/contact', [homeController::class, 'showContact']);
});