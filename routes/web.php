<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaanController;

// Halaman Beranda
Route::view('/', 'home')->name('home');

// Halaman Daftar sewa
Route::get('/', [PenyewaanController::class, 'index'])
    ->name('Sewa.index');

// Halaman Detail sewa
Route::get('//{id}', [PenyewaanController::class, 'detail'])
    ->name('.detail');