<?php

use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\MasyarakatMiddleware;
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


//masyarakat
Route::get('masyarakat',[MasyarakatController::class,'index']);

Route::get('masyarakat/registrasi',[MasyarakatController::class,'registrasi']);
Route::post('masyarakat/simpan',[MasyarakatController::class,'simpan']);

Route::get('masyarakat/login',[MasyarakatController::class,'login']);
Route::post('masyarakat/login',[MasyarakatController::class,'cekLogin']);

Route::get('masyarakatsatu',[MasyarakatController::class,'indexpengaduan']);

Route::get('masyarakat/pengaduan',[MasyarakatController::class,'pengaduan']);
Route::post('masyarakat/pengaduan',[MasyarakatController::class,'cekPengaduan']);

//logout
Route::get('logout',[MasyarakatController::class,'logout']);

// layout
Route::get('LayoutUtama',[MasyarakatController::class,'LayoutUtama']);
Route::get('layoutmasyarakat',[MasyarakatController::class,'layoutmasyarakat']);

//admin
Route::get('admin/login',[MasyarakatController::class,'adminlogin']);
Route::post('admin/login',[MasyarakatController::class,'cekadminlogin']);

Route::get('admin',[MasyarakatController::class,'petugasatu']);

Route::get('admin/registrasi',[MasyarakatController::class,'registrasiadmin']);
Route::post('admin/simpan',[MasyarakatController::class,'simpanadmin']);

Route::get('admin/validasi',[MasyarakatController::class,'validasi']);
Route::post('admin/validasi',[MasyarakatController::class,'cekValidasi']);

Route::get('admin/tanggapan',[MasyarakatController::class,'tanggapan']);
Route::post('admin/tanggapan',[MasyarakatController::class,'cekTanggapan']);

