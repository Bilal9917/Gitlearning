<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get("/show",[StudentController::class,'index']);
// // Route::get("/delete/{id?}",[StudentController::class,'delete'])->name('data.delete');
// Route::get("/edit/{id?}",[StudentController::class,'edit'])->name('data.edit');
// Route::post("/update/{id?}",[StudentController::class,'update']);
// Route::get("/insert",[StudentController::class,'save']);
Route::get("/relation",[UserController::class,'relation']);
Route::get("/show",[UserController::class,'index']);
Route::get("/delete/{id?}",[UserController::class,'delete'])->name('data.delete');
Route::get("/edit/{id?}",[UserController::class,'edit'])->name('data.edit');
Route::post("/update/{id?}",[UserController::class,'update']);
