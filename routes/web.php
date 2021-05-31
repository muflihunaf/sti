<?php

use App\Http\Controllers\CategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LokasiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('welcome');
Route::post('/pengaduan', [LandingController::class, 'store'])->name('pengaduan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftar', [HomeController::class, 'daftar' ])->name('daftar');
Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home');

    // Categori
    Route::get('/categori',[CategoriController::class, 'index'])->name('admin.categori');
    Route::get('/categori/create',[CategoriController::class, 'create'])->name('categori.create');
    Route::post('/categori/store',[CategoriController::class, 'store'])->name('categori.store');
    Route::get('/categori/{id}/edit',[CategoriController::class, 'edit'])->name('categori.edit');
    Route::post('/categori/{id}/update',[CategoriController::class, 'update'])->name('categori.update');
    Route::get('/categori/{id}/delete',[CategoriController::class, 'destroy'])->name('categori.delete');


    // Lokasi
    Route::get('/lokasi',[LokasiController::class, 'index'])->name('admin.lokasi');
    Route::get('/lokasi/create',[LokasiController::class, 'create'])->name('lokasi.create');
    Route::post('/lokasi/store',[LokasiController::class, 'store'])->name('lokasi.store');
    Route::get('/lokasi/{id}/edit',[LokasiController::class, 'edit'])->name('lokasi.edit');
    Route::post('/lokasi/{id}/update',[LokasiController::class, 'update'])->name('lokasi.update');
    Route::get('/lokasi/{id}/delete',[LokasiController::class, 'destroy'])->name('lokasi.delete');

    // Instansi
    Route::get('/instansi',[InstansiController::class, 'index'])->name('admin.instansi');
    Route::get('/instansi/create',[InstansiController::class, 'create'])->name('instansi.create');
    Route::post('/instansi/store',[InstansiController::class, 'store'])->name('instansi.store');
    Route::get('/instansi/{id}/edit',[InstansiController::class, 'edit'])->name('instansi.edit');
    Route::post('/instansi/{id}/update',[InstansiController::class, 'update'])->name('instansi.update');
    Route::get('/instansi/{id}/delete',[InstansiController::class, 'destroy'])->name('instansi.delete');

    // Instansi
    Route::get('/laporan',[LaporanController::class, 'index'])->name('admin.laporan');
    Route::get('/instansi/create',[InstansiController::class, 'create'])->name('instansi.create');
    Route::post('/instansi/store',[InstansiController::class, 'store'])->name('instansi.store');
    Route::get('/instansi/{id}/edit',[InstansiController::class, 'edit'])->name('instansi.edit');
    Route::post('/instansi/{id}/update',[InstansiController::class, 'update'])->name('instansi.update');
    Route::get('/instansi/{id}/delete',[InstansiController::class, 'destroy'])->name('instansi.delete');
});
