<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'penjualList' => [],
    ]);
})->name('dashboard');

// Route sementara agar link Login & Daftar di navbar tidak error
Route::get('/login', fn () => 'Halaman Login')->name('login');
Route::get('/register', fn () => 'Halaman Register')->name('register');
