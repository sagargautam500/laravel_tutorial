<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ImageGalleryController;


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
Route::view('/', 'welcome');
Route::get('/gallery', [ImageGalleryController::class, 'index']);
Route::delete('/delete-image', [ImageGalleryController::class, 'deleteImage']);
Route::get('/upload', [UploadController::class, 'displayUpload']);
Route::post('/upload', [UploadController::class, 'handleUpload']);

Route::get('/multiple-upload', [UploadController::class, 'displayMultipleUpload']);
Route::post('/multiple-upload', [UploadController::class, 'handleMultipleUpload']);
