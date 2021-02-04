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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts/{post}', 'PostsController@show');
Route::post('/payments/route', 'PaymentsController@route');
Route::post('/payments/authorization', 'PaymentsController@authorization');

/* Route::post('/payments/initialize', 'PaymentsController@initialize'); */

Route::resource('payments', 'PaymentsController');
/* this gives:
| GET|HEAD  | payments                | payments.index   | App\Http\Controllers\PaymentsController@index   | web          |
| POST      | payments                | payments.store   | App\Http\Controllers\PaymentsController@store   | web          |
| GET|HEAD  | payments/create         | payments.create  | App\Http\Controllers\PaymentsController@create  | web          |
| GET|HEAD  | payments/{payment}      | payments.show    | App\Http\Controllers\PaymentsController@show    | web          |
| PUT|PATCH | payments/{payment}      | payments.update  | App\Http\Controllers\PaymentsController@update  | web          |
| DELETE    | payments/{payment}      | payments.destroy | App\Http\Controllers\PaymentsController@destroy | web          |
| GET|HEAD  | payments/{payment}/edit | payments.edit    | App\Http\Controllers\PaymentsController@edit    | web          | 
*/





