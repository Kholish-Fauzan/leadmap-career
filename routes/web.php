<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - LEADMAP-Career
|--------------------------------------------------------------------------
*/

// Landing Page
Route::get('/', function () {
    return view('landing');
})->name('home');

// Halaman Berita Terbaru
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// Halaman Dokumentasi Kegiatan
Route::get('/dokumentasi', function () {
    return view('dokumentasi');
})->name('dokumentasi');

// Halaman Pusat Bantuan
Route::get('/pusat-bantuan', function () {
    return view('pusat-bantuan');
})->name('pusat-bantuan');

// Redirect old routes (jika ada)
Route::get('/aktivitas', function () {
    return redirect('/#aktivitas');
});

Route::get('/contact', function () {
    return redirect('/#contact');
});

Route::get('/about', function () {
    return redirect('/#about');
});
