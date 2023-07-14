<?php

use App\Http\Controllers\HomeControl;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeControl::class,'index'] );

// Route::get('siswa',[SiswaController::class,'siswa']);
// Route::get('siswa/{id}',[SiswaController::class,'show'])->where('id','[0-9]+');

Route::get('tentang',[HomeControl::class,'tentang']);
Route::get('kontak',[HomeControl::class,'kontak']);
Route::get('dummy',[HomeControl::class,'dummy']);

Route::resource('siswa',SiswaController::class);

Route::get('/sesi',[SesiController::class,'index']);
Route::get('/sesi/logout',[SesiController::class,'logout']);
Route::post('/sesi/login',[SesiController::class,'login']);
Route::get('/sesi/register',[SesiController::class,'register']);
Route::post('/sesi/register',[SesiController::class,'create']);





