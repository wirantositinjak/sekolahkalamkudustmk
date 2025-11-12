<?php

use App\Http\Controllers\PageController;
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

// Halaman Utama
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/guru', [PageController::class, 'guru'])->name('guru');
Route::get('/prestasi', [PageController::class, 'prestasi'])->name('prestasi');
Route::get('/renungan', [PageController::class, 'renungan'])->name('renungan');
Route::get('/siswa', [PageController::class, 'kegiatanSiswa'])->name('kegiatan-siswa');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/majalah-dinding', [PageController::class, 'majalahDinding'])->name('majalah-dinding');



// Grup Halaman Tentang
Route::prefix('tentang')->name('tentang.')->group(function () {
    Route::get('/kb-tk', [PageController::class, 'tentangKBTK'])->name('kbtk');
    Route::get('/sd', [PageController::class, 'tentangSD'])->name('sd');
    Route::get('/smp', [PageController::class, 'tentangSMP'])->name('smp');
    Route::get('/sma', [PageController::class, 'tentangSMA'])->name('sma');
});

// Grup Halaman Alumni
Route::prefix('alumni')->name('alumni.')->group(function () {
    Route::get('/kb-tk', [PageController::class, 'alumniKBTK'])->name('kbtk');
    Route::get('/sd', [PageController::class, 'alumniSD'])->name('sd');
    Route::get('/smp', [PageController::class, 'alumniSMP'])->name('smp');
    Route::get('/sma', [PageController::class, 'alumniSMA'])->name('sma');
});
