<?php


Route::prefix('dashboard')->name('dashboard.')->middleware(['auth','role:super_admin|admin'])->group(function(){



    //welcome route

    Route::get('/','welcomeController@index')->name('welcome');

    //categories
    Route::resource('categories','categoryController');


    //movies
    Route::resource('movies','MovieController');


    // roles

    Route::resource('roles','RoleController');

    //users
    Route::resource('users','UserController');
 

    //settings

    Route::get('/settings/social_login','SettingController@social_login')->name('settings.social_login');
    Route::get('/settings/social_links','SettingController@social_links')->name('settings.social_links');
    Route::post('/settings','SettingController@store')->name('settings.store');

});