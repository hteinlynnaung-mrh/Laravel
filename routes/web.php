<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);
// if the url is empty,go to the index

// Static Route
Route::get('/articles', [ArticleController::class, 'index']);
// localhost:8000/articles

// Dynamic Route
Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);
// localhost:8000/articles/detail/123

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
