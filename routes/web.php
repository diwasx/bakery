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

Route::get('/', 'PagesController@index');

Route::get('/location', 'PagesController@HOL');

Route::get('/menus', 'PagesController@menus');

Route::get('/about', 'PagesController@about');

Route::get('/shop', 'PagesController@shop');

Route::get('/checkout', 'PagesController@checkout')->name('checkout');


/* Route::get('/', function () { */
/*     return view('welcome'); */
/* }); */



Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
