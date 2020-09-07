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

use App\Http\Controllers\InformationController;
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
    Route::get('/services/dangerous-goods/dry-ice', 'ServicesController@dryIce');

    Route::get('/services/imports/import-request', 'ServicesController@importRequests')->name('import-requests');;
    Route::post('/services/imports/import-request', 'ServicesController@sendImportRequest')->name('email-import-request');;

// Shipping Destinations Routes
    Route::get('/destinations', 'DestinationsController@index')->name('destinations');
    Route::get('/destinations/{destination}', 'DestinationsController@show');

// Information Pages Routes
    Route::get('/information/coronavirus',                                      'InformationController@pages');
    Route::get('/information/monthly-fuel-surcharge',                           'InformationController@pages');
    Route::get('/information/service-level-agreement-and-surcharges',           'InformationController@pages');
    Route::get('/information/remote-area-surcharges',                           'InformationController@pages');
    Route::get('/information/denied-parties',                                   'InformationController@pages');
    Route::get('/information/dangerous-goods',                                  'InformationController@pages');
    Route::get('/information/prohibited-items',                                 'InformationController@pages');
    Route::get('/information/packaging-guide',                                  'InformationController@pages');
    Route::get('/information/opening-hours',                                    'InformationController@pages');
    Route::get('/information/gdpr-policy',                                      'InformationController@pages');
    Route::get('/information/careers',                                          'InformationController@pages');
    Route::get('/information/impact-express-rate-increase-2020',                'InformationController@pages');
    Route::get('/information/general-sanctions-warranty-and-indemnity-letter',  'InformationController@pages');

    Route::get('/information/{info}', 'InformationController@show');


// Authentication Routes...
Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});
    
// Backend Routes
    Route::resource('/admin/posts', 'Backend\PostsController');
    Route::match(['put', 'patch'], '/admin/posts/{id}/edit', 'Backend\PostsController@update')->name('posts-update');
    Route::get('/admin/posts/{id}/edit', 'Backend\PostsController@edit')->name('posts-edit');

    Route::resource('/admin/pages', 'Backend\PagesController');
    Route::match(['put', 'patch'], '/admin/pages/{id}/edit', 'Backend\PagesController@update')->name('pages-update');
    Route::get('/admin/pages/{id}/edit', 'Backend\PagesController@edit')->name('pages-edit');

    Route::get('/admin/trash', 'Backend\HomeController@trash')->name('admin-trash');
    Route::delete('/admin/trash/{id}', 'Backend\HomeController@destroy')->name('trash.eradicate');
    Route::put('/admin/trash/{id}', 'Backend\HomeController@restore')->name('trash.restore');

    Route::resource('/admin/categories', 'Backend\CategoriesController');
    Route::resource('/admin/tags', 'Backend\TagsController');

    Route::get('/admin', 'Backend\HomeController@index')->name('admin');
    Route::get('/admin/posts', 'Backend\HomeController@posts')->name('admin-posts');
<<<<<<< HEAD
    Route::get('/admin/media', 'Backend\HomeController@media')->name('admin-media');
=======
    Route::get('/admin/pages', 'Backend\HomeController@pages')->name('admin-pages');
>>>>>>> 366d673028e1c0401b63a1cf885cd3c8fa131809
    Route::get('/admin/categories', 'Backend\CategoriesController@index')->name('admin-categories');
    Route::get('/admin/tags', 'Backend\TagsController@index')->name('admin-tags');
    Route::get('/admin/users/{user}/profile', 'Backend\UsersController@profile')->name('admin-profile');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin/users', 'Backend\UsersController@index')->name('admin-users');

        Route::put('/admin/users/{user}/profile/edit', 'Backend\UsersController@update')->name('admin-edit-profile');

        Route::get('/admin/users/register', 'Backend\UsersController@register');
        Route::post('/admin/users/register', 'Auth\RegisterController@create')->name('admin-register-user');

        Route::post('/admin/users/{user}/make-admin', 'Backend\UsersController@makeAdmin')->name('admin-users-makeAdmin');
        Route::post('/admin/users/{user}/make-writer', 'Backend\UsersController@makeWriter')->name('admin-users-makeWriter');
    });

    
// CMS Routes
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/{post}', 'NewsController@show')->name('news-post');
    Route::get('/category/{category}', 'NewsController@category')->name('category');
    Route::get('/tags/{tag}', 'TagsController@index')->name('tag');
    Route::get('/author/{author}', 'NewsController@author')->name('author');
