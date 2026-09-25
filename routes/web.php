<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [ArticleController::class, 'index']);
// if the url is empty,go to the index

// Static Route
Route::get('/articles', [ArticleController::class, 'index']);
// localhost:8000/articles

// Dynamic Route
Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);
// localhost:8000/articles/detail/123

Route::get('/articles/delete/{id}', [ArticleController::class, 'delete']);

Route::get('/articles/add', [ArticleController::class, 'add']);
Route::post('/articles/create', [ArticleController::class, 'create']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
