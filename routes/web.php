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


// Services Routes
    Route::get('/services', 'ServicesController@index')->name('services-index');
    Route::get('/services/{service}', 'ServicesController@show');

// Shipping Destinations Routes
    Route::get('/destinations', 'DestinationsController@index')->name('destinations');
    Route::get('/destinations/{destination}', 'DestinationsController@show');


// Authentication Routes...
Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});
    
// Backend Routes
    Route::resource('/admin/posts', 'Backend\PostsController');
    Route::resource('/admin/categories', 'Backend\CategoriesController');

//Set Middleware to Auth
    Route::middleware(['auth'])->group( function () {
        Route::get('/admin', 'Backend\HomeController@index')->name('admin');
        Route::get('/admin/media', 'Backend\HomeController@media')->name('admin-media');
        Route::get('/admin/posts', 'Backend\HomeController@posts')->name('admin-posts');
        Route::get('/admin/trash', 'Backend\HomeController@trash')->name('admin-trash');
        Route::get('/admin/categories', 'Backend\CategoriesController@index')->name('admin-categories');
        Route::get('/admin/tags', 'Backend\HomeController@tags')->name('admin-tags');
    });
    
// CMS Routes
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/{post}', 'NewsController@show')->name('news-post');
    Route::get('/category/{category}', 'NewsController@category')->name('category');
    Route::get('/author/{author}', 'NewsController@author')->name('author');
