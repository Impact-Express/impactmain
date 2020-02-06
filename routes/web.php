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
// Route::domain('')
Route::resource('/quote', 'QuotesController');
Route::post('/quote', 'QuotesController@send');


// Services Main Route
Route::get('/services', 'ServicesController@index')->name('services');

// Express
Route::get('/services/express', 'ServicesController@express')->name('express');
Route::post('/services/express', 'ServicesController@send');

// Economy
Route::get('/services/economy', 'ServicesController@economy')->name('economy');
Route::post('/services/economy', 'ServicesController@send');

// UK Overnight
Route::get('/services/ukovernight', 'ServicesController@overnight')->name('overnight');
Route::post('/services/ukovernight', 'ServicesController@send');

// Imports
Route::get('/services/imports', 'ServicesController@imports')->name('imports');
Route::post('/services/imports', 'ServicesController@send');

// Dangerous Goods
Route::get('/services/dangerous-goods', 'ServicesController@dangerousGoods')->name('dangerousgoods');
Route::post('/services/dangerous-goods', 'ServicesController@send');

// DG Dry Ice
Route::get('/services/dangerous-goods/dry-ice', 'ServicesController@dangerousGoodsDryIce')->name('dgdryice');
Route::post('/services/dangerous-goods/dry-ice', 'ServicesController@send');

// E-Commerce
Route::get('/services/ecommerce', 'ServicesController@ecommerce')->name('ecommerce');
Route::post('/services/ecommerce', 'ServicesController@send');

// Fulfilment
Route::get('/services/fufilment', 'ServicesController@fufilment')->name('fufilment');
Route::post('/services/fufilment', 'ServicesController@send');

// Mobile Services
Route::get('/services/mobile-services', 'ServicesController@mobileServices')->name('mobileservices');
Route::post('/services/mobile-services', 'ServicesController@send');


// Shipping Destinations Routes



// Authentication Routes...
    Auth::routes();

// CMS Routes
    Route::get('/news', 'NewsController@index')->name('news');