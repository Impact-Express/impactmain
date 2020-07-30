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

Route::get('/quote', 'QuotesController@index')->name('quote.index');
Route::post('/quote', 'QuotesController@send');

Route::get('/send-my-parcel','ParcelController@index')->name('send-my-parcel');
Route::post('/send-my-parcel','ParcelController@send')->name('email-parcel-details');


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
    Route::match(['put', 'patch'], '/admin/posts/{id}/edit', 'Backend\PostsController@update')->name('posts-update');
    Route::get('/admin/posts/{id}/edit', 'Backend\PostsController@edit')->name('posts-edit');

    Route::get('/admin/trash', 'Backend\HomeController@trash')->name('admin-trash');
    Route::delete('/admin/trash/{id}', 'Backend\HomeController@destroy')->name('trash.eradicate');
    Route::put('/admin/trash/{id}', 'Backend\HomeController@restore')->name('trash.restore');

    Route::resource('/admin/categories', 'Backend\CategoriesController');
    Route::resource('/admin/tags', 'Backend\TagsController');

//Set Middleware to Auth
    Route::middleware(['auth'])->group( function () {
        Route::get('/admin', 'Backend\HomeController@index')->name('admin');
        Route::get('/admin/media', 'Backend\HomeController@media')->name('admin-media');
        Route::get('/admin/posts', 'Backend\HomeController@posts')->name('admin-posts');
        Route::get('/admin/categories', 'Backend\CategoriesController@index')->name('admin-categories');
        Route::get('/admin/tags', 'Backend\TagsController@index')->name('admin-tags');
    });
    
// CMS Routes
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/{post}', 'NewsController@show')->name('news-post');
    Route::get('/category/{category}', 'NewsController@category')->name('category');
    Route::get('/tag/{id}', 'NewsController@tags')->name('tag');
    Route::get('/author/{author}', 'NewsController@author')->name('author');
