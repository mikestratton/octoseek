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
    return view('octo-seek');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/attorneys', 'AttorneyController@example')->name('attorneys');
Route::get('/attorneys/results', 'AttorneyController@results');

Route::get('/5000', 'AttorneyController@fiveThousand');

Route::get('/vendors', 'VendorController@index')->name('vendors');
Route::get('/vendors/{vendor}', 'VendorController@index');
Route::get('/vendor/{id}', 'VendorController@show')->name('vendor');


Route::get('/pricing', 'PagesController@pricing')->name('pricing');
Route::get('/contact', 'PagesController@order')->name('order');
Route::get('/search-operators', 'PagesController@operators')->name('search-operators');
Route::get('/naics-codes', 'PagesController@naics')->name('naics');
