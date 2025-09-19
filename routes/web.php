<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store_register'])->name('register.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store_login'])->name('login.store');

// Logout
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

// Mostrar formulario para resetear
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');



Route::get('/', [ HeroController::class, 'index' ])->name('home');
Route::get('/gallerie', [\App\Http\Controllers\GalleryController ::class, 'index' ])->name('galeries');
Route::get('/gallerie/{year}', [\App\Http\Controllers\GalleryController ::class, 'show' ])->name('galeries.show');
Route::get('/blog', [ \App\Http\Controllers\PostController::class, 'index' ])->name('blog.all');
Route::get('/blog/{slug}', [ \App\Http\Controllers\PostController::class, 'show' ])->name('blog');
Route::post('/blog/recherche', [ \App\Http\Controllers\PostController::class, 'search' ])->name('blog.search');
Route::get('/activity/{slug}', [ \App\Http\Controllers\SportController::class, 'show' ])->name('sport.activity');
Route::get('/{slug}/{sport}', [ \App\Http\Controllers\SportController::class, 'index' ])->name('sport');
Route::get('/activities',[ \App\Http\Controllers\SportController::class, 'all' ])->name('activities.all');
Route::post('/activities/recherche', [ \App\Http\Controllers\SportController::class, 'search' ])->name('activities.search');
Route::get('/activities/{slug}/{sport}/{group}', [ \App\Http\Controllers\SportController::class, 'activities' ])->name('sport.activities');;
Route::get('/professionals', [ \App\Http\Controllers\ProfessionalController::class, 'index' ])->name('professional');
Route ::get('/location', [ \App\Http\Controllers\LocationController::class, 'index' ])->name('location.index');
Route::get('/location/detail/{slug}', [ \App\Http\Controllers\LocationController::class, 'show' ])->name('location.show');


    Route::post('/rentals/check-availability', [RentalController::class, 'checkAvailability'])
        ->name('rentals.check');
    Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.create');
    Route::get('/rentals/order/{id}', [ RentalController::class, 'show'  ])->name('rentals.show');


