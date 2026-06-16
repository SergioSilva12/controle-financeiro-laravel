<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controller\ControllerUsuario;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/cadastro',[ControllerUsuario::class,'index'])->name('cadastro.index');
Route::post('/cadastro',[ControllerUsuario::class,'cadastrar'])->name('cadastro.cadastrar');

