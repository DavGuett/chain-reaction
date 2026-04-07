<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/queue', function () {
    return view('queue');
})->name('queue');

Route::get('/customers', function () {
    return view('customers');
})->name('customers');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
