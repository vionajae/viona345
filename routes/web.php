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


//admin
Route::get('admin/validasi',[MasyarakatController::class,'validasi']);
Route::post('admin/validasi',[MasyarakatController::class,'cekValidasi']);

Route::get('masyarakat/tanggapan',[MasyarakatController::class,'tanggapan']);
Route::post('masyarakat/tanggapan',[MasyarakatController::class,'cekTanggapan']);

Route::get('petugas',[MasyarakatController::class,'petugas']);
Route::post('petugas',[MasyarakatController::class,'cekPetugas']);

Route::get('LayoutUtama',[MasyarakatController::class,'LayoutUtama']);