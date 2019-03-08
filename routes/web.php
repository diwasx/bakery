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

/* Both method works */
Route::get('/checkout/{id}', 'PagesController@checkout');
/* Route::get('/checkout/{id}', ['uses' =>'PagesController@checkout']); */

Route::get('/store/{id}', 'PagesController@store');

Auth::routes();

Route::get('/admin/order', 'AdminController@order')->name('order');
Route::get('/admin/order/success', 'AdminController@orderS');
Route::get('/admin/order/fail', 'AdminController@orderF');

Route::get('/admin/order/success/{id}', 'AdminController@orderSuccess');
Route::get('/admin/order/fail/{id}', 'AdminController@orderFail');

Route::get('/admin/product', 'AdminController@product');
Route::get('/admin/product/new', 'AdminController@new');

/* file upload dont allow get method */
Route::post('/admin/product/store', 'AdminController@store');
Route::post('/admin/product/editStore', 'AdminController@editStore');

/* route with varaible should be get */
Route::get('/admin/product/edit/{id}', 'AdminController@edit');
Route::get('/admin/product/delete/{id}', 'AdminController@delete');

