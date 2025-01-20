<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');;

Route::get('/sommes-nous', function () {
    return view('sommes-nous');
})->name('sommes-nous');

Route::get('/equipes', function () {
    return view('equipes');
})->name('equipes');


Route::get('/equipes/details', function () {
    return view('details');
})->name('details');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
