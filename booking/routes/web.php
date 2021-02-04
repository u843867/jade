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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/search', function () {
    return view('ibe-search');
});

Route::get('/search-results', function () {
    return view('ibe-search-results');
});

Route::get('/pax', function () {
    return view('ibe-pax');
});

Route::get('/pax2', function () {
    return view('ibe-pax2');
});

Route::get('/customize2', function () {
    return view('ibe-customize2');
});

Route::get('/pay2', function () {
    return view('ibe-pay2');
});
