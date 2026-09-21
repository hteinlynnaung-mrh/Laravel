<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Static Route
Route::get('/articles', [ArticleController::class, 'index']);
// localhost:8000/articles

// Dynamic Route
Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);
// localhost:8000/articles/detail/123


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
