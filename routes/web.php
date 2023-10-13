<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/tambah',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/simpan',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/edit/{id}',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/hapus/{id}',[MahasiswaController::class,'destroy']);
