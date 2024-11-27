<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
 
Route::get('/', [MovieController::class, 'MovieList'])->name('movieList');
Route::get('/create', [MovieController::class, 'Create'])->name('create');
Route::post('/store', [MovieController::class, 'Store'])->name('store');