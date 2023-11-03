<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\MasyarakatMiddleware;
use App\Http\Middleware\Validasiadmin;
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

Route::get('masyarakat/pengaduan',[MasyarakatController::class,'pengaduan']);
Route::post('masyarakat/pengaduan',[MasyarakatController::class,'cekPengaduan']);

//logout
Route::get('logout',[MasyarakatController::class,'logout']);
Route::get('logout',[AdminController::class,'logout']);

// layout
Route::get('layoutmasyarakat',[MasyarakatController::class,'layoutmasyarakat'])->middleware;
Route::get('LayoutUtama',[AdminController::class,'LayoutUtama'])->middleware(Validasiadmin::class);

//admin
Route::get('admin/login',[AdminController::class,'adminlogin']);
Route::post('admin/login',[AdminController::class,'cekadminlogin']);

Route::get('admin/registrasi',[AdminController::class,'registrasiadmin']);
Route::post('admin/registrasi',[AdminController::class,'simpanadmin']);

Route::get('admin/validasi',[AdminController::class,'validasi'])->middleware(Validasiadmin::class);
Route::post('admin/validasi',[AdminController::class,'cekValidasi']);

Route::get('admin/tanggapan',[MasyarakatController::class,'tanggapan'])->middleware(Validasiadmin::class);
Route::post('admin/tanggapan',[MasyarakatController::class,'cekTanggapan']);