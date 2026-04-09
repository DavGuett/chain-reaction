<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::view('/queue', 'queue')->name('queue');
Route::view('/customers', 'customers')->name('customers');
Route::view('/services', 'services')->name('services');
Route::view('/booking', 'booking')->name('booking');
