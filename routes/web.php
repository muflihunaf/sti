<?php

use App\Http\Controllers\CategoriController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

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
});
