<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;

Route::get('/', [ HeroController::class, 'index' ])->name('home');
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
