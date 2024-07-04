<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home'); // Menambahkan nama rute untuk halaman home

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/gallery', function () {    
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
