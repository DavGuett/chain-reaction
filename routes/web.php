<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/queue', 'queue')->name('queue');
Route::view('/customers', 'customers')->name('customers');
Route::view('/services', 'services')->name('services');
Route::view('/booking', 'booking')->name('booking');
