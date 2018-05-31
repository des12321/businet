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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('', [
    'as' => 'user.login',
    'uses' => 'UserController@showLogin'
]);

Route::post('index.php/loginpost', [
    'as' => 'auth.login',
    'uses' => 'AuthUserController@loginUser'
]);

Route::get('index.php/Logout', [
    'as' => 'auth.logout',
    'uses' => 'AuthUserController@logoutUser'
]);

Route::group(['prefix' => 'index.php', 'middleware' => ['authlogin']], function () {
    Route::get('', [
        'as' => 'core.dashboard',
        'uses' => 'CoreController@showDashboard'
    ]);
    Route::get('index.php/dashboard', [
        'as' => 'core.dashboard.inicio',
        'uses' => 'CoreController@showDashboard'
    ]);
});

Route::get('index.php/registro', [
    'as' => 'user.register',
    'uses' => 'UserController@showRegistration'
]);



Route::get('index.php/login', [
    'as' => 'user.login.login',
    'uses' => 'UserController@showLogin'
]);

Route::group(['prefix' => 'user'], function () {
	Route::get('fillTopBanner', [
    'as' => 'user.fillTopBanner',
    'uses' => 'UserController@fillTopBanner'
	]);
});