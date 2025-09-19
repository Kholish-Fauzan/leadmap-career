<?php

   use Illuminate\Support\Facades\Route;

   /*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   */

   Route::get('/', function () {
       return view('landing');
   });

   // Route tambahan untuk navigasi
   Route::get('/aktivitas', function () {
       return view('landing'); // Sementara redirect ke landing
   });

   Route::get('/contact', function () {
       return view('landing'); // Sementara redirect ke landing
   });

   Route::get('/about', function () {
       return view('landing'); // Sementara redirect ke landing
   });
