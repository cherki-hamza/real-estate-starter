<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){



    // route for index home website
    Route::get('/' , 'frontend\SiteController@index')->name('home');
    // route for about website
    Route::get('/about' , 'frontend\SiteController@about')->name('about');
    // route for feature  website
    Route::get('/feature' , 'frontend\SiteController@feature')->name('feature');
    // route for pricing website
    Route::get('/pricing' , 'frontend\SiteController@pricing')->name('pricing');
    // route for faq  website
    Route::get('/faq' , 'frontend\SiteController@faq')->name('faq');
    // route for privacy  website
    Route::get('/privacy' , 'frontend\SiteController@privacy')->name('privacy');
    // route for contact website
    Route::get('/contact' , 'frontend\SiteController@contact')->name('contact');

    // Auth routes
    Auth::routes();


});



