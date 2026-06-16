<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/cadastro', function () {
    return view('pages.cadastro');
});
Route::post('/cadastro', function () {
    return view('pages.cadastro');
});

