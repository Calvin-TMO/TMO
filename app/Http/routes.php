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

    // Users
    Route::get('/users', 'UserController@index');
    Route::get('/user/add', 'UserController@create');
    Route::post('/user/add', 'UserController@store');
    Route::get('/user/{id}', 'UserController@show');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('/user/edit/{id}', 'UserController@update');

    // User Roles, Courses Taught, and Courses Tutored
    Route::post('/user_role/add/{id}', 'UserController@add_role');
    Route::get('/user_role/delete/{user_id}/{role_id}', 'UserController@delete_role');
    Route::post('/current_professor/add/{id}', 'UserController@add_current_professor');
    Route::get('/current_professor/delete/{user_id}/{course_id}', 'UserController@delete_current_professor');
    Route::post('/available_tutor/add/{id}', 'UserController@add_available_tutor');
    Route::get('/available_tutor/delete/{user_id}/{course_id}', 'UserController@delete_available_tutor');

    // Courses
    Route::get('/courses', 'CourseController@index');
    Route::get('/course/add', 'CourseController@create');
    Route::post('/course/add', 'CourseController@store');
    Route::get('/course/{id}', 'CourseController@show');
    Route::get('/course/edit/{id}', 'CourseController@edit');
    Route::post('/course/edit/{id}', 'CourseController@update');
    Route::post('/course/professor/add/{id}', 'CourseController@add_professor');
    Route::get('/course/professor/delete/{course_id}/{professor_id}', 'CourseController@delete_professor');
    Route::post('/course/tutor/add/{id}', 'CourseController@add_tutor');
    Route::get('/course/tutor/delete/{course_id}/{tutor_id}', 'CourseController@delete_tutor');
    
    // Assignments
    Route::get('/assignments', 'AssignmentController@index');
    Route::get('/assignment/add', 'AssignmentController@create');
    Route::post('/assignment/add', 'AssignmentController@store');
    Route::get('/assignment/{id}', 'AssignmentController@show');
    Route::get('/assignment/edit/{id}', 'AssignmentController@edit');
    Route::post('/assignment/edit/{id}', 'AssignmentController@update');

    // Reports
    Route::get('/reports', 'ReportController@index');
    Route::get('/report/{id}', 'ReportController@show');
    Route::get('/report/edit/{id}', 'ReportController@edit');
    Route::post('/report/edit/{id}', 'ReportController@update');
    Route::get('/report/add', 'ReportController@create');
    Route::post('/report/add', 'ReportController@store');
});
