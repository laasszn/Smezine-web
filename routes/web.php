<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AuthController; // <-- Jangan lupa ini buat login

//HALAMAN PUBLIC

//home/beranda
Route::get('/', function () {
    return view('home');
})->name('home');

//mading berita public
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

//galeri
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

//tentang
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');


//sistem login & logout
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//halaman admin
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    
    // Tabel Data Berita Admin
    Route::get('/berita', [BeritaController::class, 'adminIndex'])->name('berita.index');

    // Form Tambah Berita
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');

    // Simpan Berita Baru
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

    // Form Edit Berita
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');

    // Proses Update Berita
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');

    // Hapus Berita
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

});