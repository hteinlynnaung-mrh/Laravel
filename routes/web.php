<?php

use Illuminate\Support\Facades\Route;

// Static Route
Route::get('/articles', function() {
    return "Articles List";
});

// Dynamic Route
Route::get('/articles/detail/{id}', function($id) { // we can reuse {id} in return with $id
    return "Articles Detail - $id";
});

Route::get('/', function () {
    return view('welcome');
});
