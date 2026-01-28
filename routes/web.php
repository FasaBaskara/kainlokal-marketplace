<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/catalogue', function () {
    return view('catalogue');
});

Route::get('/voc', function () {
    return view('voc');
});
