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

// Route::resource('Openfda','OpenfdaController');
Route::get('/openfda','OpenfdaController@index');
Route::get('/rx','RxController@index');
// Route::resource('rx','RXController');
Route::get('/rx/save','RxController@drugStore')->name('rx.save');
// Route::get('/interaction','InteractionController@index');
Route::post('/interaction','InteractionController@index');


