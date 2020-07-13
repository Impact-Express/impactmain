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
Route::resource('/quote', 'QuotesController');
Route::post('/quote', 'QuotesController@send');


// Services Main Route
    Route::resource('/services', 'ServicesController');
    Route::get('/services/express', 'ServicesController@express');

// Shipping Destinations Routes
    Route::resource('/destinations', 'DestinationsController');


// Authentication Routes...
    Auth::routes();
    
// Backend Routes
    Route::resource('/admin/posts', 'Backend\PostsController');

//Set Middleware to Auth
    Route::middleware(['auth'])->group( function () {
        Route::get('/admin', 'Backend\HomeController@index')->name('admin');
        Route::get('/admin/media', 'Backend\HomeController@media')->name('admin-media');
        Route::get('/admin/posts', 'Backend\HomeController@posts')->name('admin-posts');
    });
    
// CMS Routes
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/{post}', 'NewsController@show')->name('news-post');
    Route::get('/category/{category}', 'NewsController@category')->name('category');
    Route::get('/author/{author}', 'NewsController@author')->name('author');
