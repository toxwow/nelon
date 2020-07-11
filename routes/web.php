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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', 'HomeController@index')->name('login');
Route::get('/', 'IndexController@index')->name('home');
Route::get('/o-nas', 'IndexController@about')->name('about');
Route::get('/kawiarnia', 'IndexController@cafe')->name('cafe');
Route::get('/cennik', 'IndexController@price')->name('price');
Route::get('/kontakt', 'IndexController@contact')->name('contact');
Route::get('/bezpieczenstwo', 'IndexController@save')->name('save');
Route::get('/regulamin', 'IndexController@term')->name('term');
