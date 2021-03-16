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
    return view('API1.index');
});

// Route::resource('Openfda','OpenfdaController');
Route::get('/openfda','OpenfdaController@index');
Route::get('/dashboard','DashboardController@index');
Route::get('/rx','RxController@index');
// Route::resource('rx','RXController');
Route::get('/rx/save','RxController@drugStore')->name('rx.save');
// Route::get('/interaction','InteractionController@index');
Route::get('/interaction','InteractionController@index');

Route::get('/API1','API1Controller@index');
Route::get('/API2','API2Controller@index');
Route::get('/API3','API3Controller@index');


