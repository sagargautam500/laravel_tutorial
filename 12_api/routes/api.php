<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', function () {
    return [
        ['title' => 'Post One'],
        ['title' => 'Post Two'],
        ['title' => 'Post Three'],
    ];
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/students', [StudentController::class, 'studentsList']);
    
    Route::post('/students', [StudentController::class, 'createStudent']);
    Route::put('/student/{id}', [StudentController::class, 'updateStudent']);
    Route::delete('/student/{id}', [StudentController::class, 'deleteStudent']);
});

Route::resource('members', MemberController::class);

Route::post('/login', [UserController::class, 'login']);
Route::post('/signup', [UserController::class, 'signUp']);