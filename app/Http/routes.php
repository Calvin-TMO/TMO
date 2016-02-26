<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Open pages to guest users.
Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () { return view('welcome'); });
});

// Requires login to view these pages.
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    // Admin only access. (see controller __constructor)
    Route::get('/users', 'UserController@index');
    Route::get('/user/add', 'UserController@create');
    Route::post('/user/add', 'UserController@store');
    Route::get('/user/{id}', 'UserController@show');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('/user/edit/{id}', 'UserController@update');
});
