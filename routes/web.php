<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::view('/', 'beranda');
Route::view('/profil', 'profil');
Route::view('/layanan', 'layanan');
Route::view('/galeri', 'galeri');

Route::get('/kontak', [ContactController::class, 'index'])->name('kontak.index');  // Menampilkan daftar kontak
Route::post('/kontak', [ContactController::class, 'store']);  // Menyimpan kontak baru
Route::get('/kontak/{id}/edit', [ContactController::class, 'edit']);  // Menampilkan form edit kontak
Route::put('/kontak/{id}', [ContactController::class, 'update']);  // Mengupdate kontak yang sudah ada
Route::delete('/kontak/{id}', [ContactController::class, 'destroy']);  // Menambahkan route DELETE