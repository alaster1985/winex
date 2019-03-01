<?php

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

Auth::routes();

Route::get('/', 'MainController@index')->name('index');

Route::get('/cave', 'MainController@cave')->middleware('auth')->name('cave');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('getGlobalWineListArray', 'CsvController@getGlobalWineListArray')->name('getGlobalWineListArray');
Route::get('getCaveWineListArray', 'CsvController@getCaveWineListArray')->name('getCaveWineListArray');
Route::post('changeBit', 'CartController@changeBit')->name('changeBit');
Route::post('sellBit', 'CartController@sellBit')->name('sellBit');
