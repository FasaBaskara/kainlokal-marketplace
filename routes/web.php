<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/catalogue', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/voc', function () {
    return view('voc');
});