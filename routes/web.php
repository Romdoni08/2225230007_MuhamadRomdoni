<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalisController;

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

Route::get('/calis',[CalisController::class,'index']);
Route::get('/calis/create',[CalisController::class,'create']);
Route::post('/calis/store',[CalisController::class,'store']);
Route::get('/calis/{id}/edit',[CalisController::class,'edit']);
Route::put('/calis/{id}',[CalisController::class,'update']);
Route::delete('/calis/{id}',[CalisController::class,'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
