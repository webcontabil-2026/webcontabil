<?php

<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

>>>>>>> ae4396a27b1c7d4b3e05cd984365c72358307704
