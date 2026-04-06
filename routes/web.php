<?php

/* 
Aqui que vamos separar cada tela para função 
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teste');
});

Route::get('/1', function () {
    return view('welcome');
});