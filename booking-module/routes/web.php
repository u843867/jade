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

Route::get('/home', function () {
    return view('/cms/home');
});

Route::post('/booking/flow', 'App\Http\Controllers\booking_flow_Controller@booking_flow');

Route::get('/search-results', function () {
    return view('/booking/searchResults');
});

Route::get('/passengers', function () {
    return view('/booking/pax');
});

Route::get('/customize', function () {
    return view('/booking/customize');
});

Route::get('/pay', function () {
    return view('/booking/pay');
});



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
