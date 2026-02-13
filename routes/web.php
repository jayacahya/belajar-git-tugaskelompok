<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about'); // Memberikan nama 'about' pada rute

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


Route::get('/team', function () {
    return view('team');
})->name('team');
