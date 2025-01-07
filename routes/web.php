<?php

use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('index');
});

// Rota para calcular os juros
Route::post('/calcular', [App\Http\Controllers\controllerCalculo::class, 'calcular'])->name('calcular');
