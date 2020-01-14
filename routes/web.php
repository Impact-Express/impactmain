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

    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Route;

// Main Navigation Routes
Route::get('/', 'PagesController@home')->name('home');
Route::get('/contact', 'PagesController@contactUs')->name('contact');
Route::post('/contact', 'PagesController@send');
Route::get('/login', function () {return redirect()->away("http://wordpress/");})->name('login');
Route::resource('/quote', 'QuotesController');
Route::post('/quote/send', 'QuotesController@send');

// Services Routes
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/services/express', 'ServicesController@express')->name('express');
Route::post('/services/express/send', 'ServicesController@send');
Route::get('/services/economy', 'ServicesController@economy')->name('economy');
Route::get('/services/ukovernight', 'ServicesController@overnight')->name('overnight');
Route::get('/services/imports', 'ServicesController@imports')->name('imports');
Route::get('/services/dangerous-goods', 'ServicesController@dangerousGoods')->name('dangerousgoods');
Route::get('/services/dangerous-goods/dry-ice', 'ServicesController@dangerousGoodsDryIce')->name('dgdryice');
Route::get('/services/ecommerce', 'ServicesController@ecommerce')->name('ecommerce');
Route::get('/services/fufilment', 'ServicesController@fufilment')->name('fufilment');
Route::get('/services/mobile-services', 'ServicesController@mobileServices')->name('mobileservices');

// Shipping Destinations Routes
