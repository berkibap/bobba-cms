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

Route::group(['middleware' => ['web']], function () {
    // me
    Route::get('/me', 'MeController@show')->middleware('isLoggedIn');
    Route::get('/logout', 'MeController@logout')->middleware('isLoggedIn');

    //settings
    Route::get('/settings', 'SettingsController@show')->middleware('isLoggedIn');
    Route::post('/settings', 'SettingsController@updateGeneral')->middleware('isLoggedIn');
    Route::post('/settings/mail', 'SettingsController@updateMail');
    Route::post('/settings/password', 'SettingsController@updatePassword')->middleware('isLoggedIn');
    Route::get('/settings/password', 'SettingsController@showPassword')->middleware('isLoggedIn');
    Route::get('/settings/mail', 'SettingsController@showMail')->middleware('isLoggedIn');
    
    // community
    Route::get('/community', 'CommunityController@show')->middleware('isLoggedIn');
    Route::get('/community/staff', 'CommunityController@staffs')->middleware('isLoggedIn');
    Route::get('/community/news/{id?}', 'CommunityController@news')->middleware('isLoggedIn');
    Route::get('/community/campaign/{id?}', 'CommunityController@campaign')->middleware('isLoggedIn');
    Route::get('/photos', 'CommunityController@photos')->middleware('isLoggedIn');
    Route::get('/community/premium', 'CommunityController@premium')->middleware('isLoggedIn');
    Route::post('/community/premium', 'CommunityController@buyPremium')->middleware('isLoggedIn');
    // client
    Route::get('/hotel', 'HotelController@show')->middleware('isLoggedIn');

    // Login
    Route::get('/', 'IndexController@show')->middleware('notLoggedIn');
    Route::post('/', 'IndexController@login')->middleware('notLoggedIn');
    
    // Register
    Route::get('/register', 'RegisterController@show')->middleware('notLoggedIn');
    Route::post('/register', 'RegisterController@register')->middleware('notLoggedIn');

});
