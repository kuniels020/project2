<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\ProdukTitipanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\PegawaiKerjaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::delete('/produk_titipan/{id}', [ProdukTitipanController::class, 'destroy'])->name('produk_titipan.destroy');
Route::get('/produk_titipan/{id}/edit', [ProdukTitipanController::class, 'edit'])->name('produk_titipan.edit');
Route::put('/produk_titipan/{id}', [ProdukTitipanController::class, 'update'])->name('produk_titipan.update');



Route::get('/', [HomeController::class, 'index']);
Route::resource('menu', MenuController::class);
Route::resource('category', CategoryController::class);
Route::resource('stock', StockController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('meja', MejaController::class);
Route::resource('jenis', JenisController::class);
Route::resource('produk_titipan', ProdukTitipanController::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('aplikasi', AplikasiConttroller::class);
Route::resource('pegawai', PegawaiConttroller::class);
Route::get('export/category',[CategoryController::class, 'exportData'])->name('export-category');
Route::resource('Absensi', AbsensiController::class);
Route::resource('contact', ContactController::class);



