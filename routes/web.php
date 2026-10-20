<?php

use Illuminate\Support\Facades\Route;

// Landing Page
Route::view('/', 'welcome')->name('home');

// Halaman Pemesanan Kamar
Route::view('/pesan-kamar', 'booking')->name('booking');