<?php

use App\Http\Controllers\MasyarakatController;
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

Route::get('/', function () {
    return view('welcome');
});

//data masyarakat
Route::get('masyarakat',[MasyarakatController::class,'index']);

Route::get('masyarakat/registrasi',[MasyarakatController::class,'registrasi']);
Route::post('masyarakat/simpan',[MasyarakatController::class,'simpan']);

Route::get('masyarakat/login',[MasyarakatController::class,'login']);
Route::post('masyarakat/login',[MasyarakatController::class,'cekLogin']);

Route::get('masyarakat/pengaduan',[MasyarakatController::class,'pengaduan']);
Route::post('masyarakat/pengaduan',[MasyarakatController::class,'cekPengaduan']);

Route::get('masyarakat/dashboard',[MasyarakatController::class,'dashboard']);

Route::get('masyarakat/admindash',[MasyarakatController::class,'admindash']);

Route::get('masyarakat/validasi',[MasyarakatController::class,'validasi']);
Route::post('masyarakat/validasi',[MasyarakatController::class,'cekValidasi']);

Route::get('/');

Route::get('masyarakat/petugas',[MasyarakatController::class,'petugas']);
Route::post('masyarakat/petugas',[MasyarakatController::class,'cekPetugas']);

Route::get('LayoutUtama',[MasyarakatController::class,'LayoutUtama']);