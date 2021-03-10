<?php

use App\Http\Controllers\kelolaBarangController;
use App\Http\Controllers\kelolakeuangancontroller;
use App\Http\Controllers\profilecontroller;
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
    Route::view('/view_kelola_barang', 'kelola_barang');
    Route::get('/kelola_barang', [kelolaBarangController::class, "index"])->name('kelola_barang.index') ;

    Route::get('/kelola_barang/show', [kelolaBarangController::class, "show"])->name('kelola_barang.show') ;

    route::resource('kelola_keuangan', kelolakeuangancontroller::class);

Auth::routes();

Route::get('/profile', [App\Http\Controllers\profilecontroller::class, 'index'])->name('profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
