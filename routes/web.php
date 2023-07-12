<?php

use App\Http\Controllers\HomeControl;
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



