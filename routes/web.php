<?php

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



Route::get('/', 'IndexController@indexHome');

Route::get('/cartas-publicas', function () {
    return view('cartas-publicas');
});

Route::get('/escrever', function() {
    return view('escrever');
});

Route::get('/login', function () {
    return view('logar');
});


