<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
<<<<<<< HEAD
})->name('about'); // Memberikan nama 'about' pada rute

// Rute untuk halaman contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact'); // Memberikan nama 'contact' pada rute
=======
});

Route::get('/contact', function () {
    return view('contact');
});
>>>>>>> 9170f3143ce3ddc790b17afb89ed421608d23d7c
