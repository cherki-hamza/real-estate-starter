<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// admin dashboard route

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'auth' ]
    ], function(){

        // route for dashboard
       Route::get('/admin' , 'backend\DashboardController@index')->name('dashboard');
       // route for dashboard home
       Route::get('/admin/home' , 'backend\DashboardController@home')->name('dashboard.home');
       // route for contact dashboard
       Route::get('/admin/contact' , 'backend\DashboardController@contact')->name('dashboard.contact');
       Auth::routes();

       // route to get all profiles
       Route::get('/admin/users_profiles' , 'backend\DashboardController@Users_Profile')->name('dashboard.users_profiles');


       // route to get singele profile by id
       Route::get('/admin/profile/{id}' , 'backend\DashboardController@profile')->name('dashboard.profile');


       // route to to show profile by id
       Route::get('/admin/show_profile/{id}' , 'backend\DashboardController@show_profile')->name('dashboard.show_profile');

       // route to go to the form for edit profile by id
       Route::get('/admin/edit_profile/{id}' , 'backend\DashboardController@edit_profile')->name('dashboard.edit_profile');

        // route to update profile by id
        Route::post('/admin/profile/{id}/update' , 'backend\DashboardController@update_profile')->name('dashboard.profile_update');


       // route to delete  profile by id
      // Route::delete('/admin/delete_profile/{id}' , 'backend\DashboardController@delete_profile')->name('dashboard.delete_profile');


       // route to show the users permessions (just for admin user)
       Route::get('/admin/users/permessions' , 'backend\DashboardController@users_permessions')->name('dashboard.permessions');

       // Permession make user admin
       Route::get('/admin/users/permessions/{user}/make-admin' , 'backend\DashboardController@make_admin')->name('dashboard.permessions.make-admin');

       // Permession make user editor
       Route::get('/admin/users/permessions/{user}/make-editor' , 'backend\DashboardController@make_editor')->name('dashboard.permessions.make-editor');

       // Permession make simple user
       Route::get('/admin/users/permessions/{user}/make-user' , 'backend\DashboardController@make_user')->name('dashboard.permessions.make-user');


       // routes for categories listening
       // this is a resource route for crud category
       Route::resource('/categories' , 'backend\CategoriesController' );


       // routes for areas listening
       // this is a resource route for crud area
       Route::resource('/areas' , 'backend\AreasController' );





});

