<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/student',[StudentController::class, 'addStudent']);
Route::post('/student',[StudentController::class, 'storeStudent']);
Route::get('/show-student',[StudentController::class, 'showStudents']);
Route::get('/delete/{id}',[StudentController::class, 'deleteStudent']);
Route::get('/edit-student/{id}',[StudentController::class, 'editStudent']);
Route::put('/update-student/{id}',[StudentController::class, 'updateStudent']);

Route::get('/search-students', [StudentController::class, 'searchStudent']);