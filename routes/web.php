<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

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
    return view('insert');
});
/*
Route::post('/store',[PostController::class,'store']);
Route::get('/show',[PostController::class,'show']); // show from insert.blade.php
Route::get('/delete/{id}',[PostController::class,'destroy']);  //fucnction deined as destory
Route::get('/edit/{id}',[PostController::class,'edit']);
Route::post('/update/{id}',[PostController::class,'update']);
*/

Route::post('/store',[employeeController::class,'store']);
Route::get('/show',[employeeController::class,'show']); // show from insert.blade.php
Route::get('/delete/{id}',[employeeController::class,'destroy']);  //fucnction deined as destory
Route::get('/edit/{id}',[employeeController::class,'edit']);
Route::post('/update/{id}',[employeeController::class,'update']);
