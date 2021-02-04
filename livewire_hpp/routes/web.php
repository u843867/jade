<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\hppController;


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


Route::resource('orders', OrderController::class);
//this gives us:
// +-----------+-----------------------+------------------+-------------------------------------------------+---------------+
// | Method    | URI                   | Name             | Action                                          | Middleware    |
// +-----------+-----------------------+------------------+-------------------------------------------------+---------------+  
// | GET|HEAD  | orders                | orders.index     | App\Http\Controllers\OrderController@index      | web           |   
// | POST      | orders                | orders.store     | App\Http\Controllers\OrderController@store      | web           |   
// | GET|HEAD  | orders/create         | orders.create    | App\Http\Controllers\OrderController@create     | web           |   
// | PUT|PATCH | orders/{order}        | orders.update    | App\Http\Controllers\OrderController@update     | web           |   
// | DELETE    | orders/{order}        | orders.destroy   | App\Http\Controllers\OrderController@destroy    | web           |   
// | GET|HEAD  | orders/{order}        | orders.show      | App\Http\Controllers\OrderController@show       | web           |   
// | GET|HEAD  | orders/{order}/edit   | orders.edit      | App\Http\Controllers\OrderController@edit       | web           |   
// +-----------+-----------------------+------------------+-------------------------------------------------+---------------+   

Route::resource('oms', OrderController::class);


Route::get('/order', function () {
    return view('order');
});

Route::get('/hpp2/{refid}', [hppController::class, 'show']);


Route::get('/users/{user}', [UserController::class, 'show']);

Route::get('/oms', function () {
    return view('oms');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cpd', function () {
    return view('welcomen');
});

Route::get('/stripe', function () {
    return view('stripe');
});

Route::get('/hpp', function () {
    return view('hpp');
});

Route::get('hpp/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'dk'])) {
        abort(400);
    }
    
    App::setLocale($locale);
    return view('hpp');


});



