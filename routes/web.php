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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/contact', 'PagesController@contactUs')->name('contact');
Route::get('/login', function () {return redirect()->away("http://wordpress/");})->name('login');

Route::resource('/quote', 'QuotesController');