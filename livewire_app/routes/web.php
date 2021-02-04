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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cpd', function () {
    return view('welcomen');
});

Route::get('/stripe', function () {
    return view('stripe');
});

Route::get('/ibe', function () {
    return view('ibe-search');
});


