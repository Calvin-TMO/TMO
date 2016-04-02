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



    // Admin user pages
    Route::get('/users', 'AdminController@all_users');
    Route::get('/user/add', 'AdminController@new_user');
    Route::post('/user/add', 'AdminController@add_user');
    Route::get('/user/{id}', 'AdminController@show_user');
    Route::get('/user/edit/{id}', 'AdminController@edit_user');
    Route::post('/user/edit/{id}', 'AdminController@update_user');

    // Roles
    Route::post('/user/role/add/{id}', 'AdminController@add_user_role');
    Route::get('/user/role/delete/{user_id}/{role_id}', 'AdminController@delete_user_role');

    // Professors
    Route::post('/professor/course/add/{id}', 'AdminController@add_professor_course');
    Route::get('/professor/course/delete/{user_id}/{course_id}', 'AdminController@delete_professor_course');

    // Tutors
    Route::post('/tutor/course/add/{id}', 'AdminController@add_tutor_course');
    Route::get('/tutor/course/delete/{user_id}/{course_id}', 'AdminController@delete_tutor_course');



    // Admin course pages
    Route::get('/courses', 'CourseController@index');
    Route::get('/course/add', 'CourseController@create');
    Route::post('/course/add', 'CourseController@store');
    Route::get('/course/{id}', 'CourseController@show');
    Route::get('/course/edit/{id}', 'CourseController@edit');
    Route::post('/course/edit/{id}', 'CourseController@update');

    // Professors
    Route::post('/course/professor/add/{id}', 'CourseController@add_professor');
    Route::get('/course/professor/delete/{course_id}/{professor_id}', 'CourseController@delete_professor');

    // Tutors
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
    Route::get('/report/add/{assignment_id}', 'ReportController@create');
    Route::post('/report/add/{assignment_id}', 'ReportController@store');
    Route::get('/report/{id}', 'ReportController@show');
    Route::get('/report/edit/{id}', 'ReportController@edit');
    Route::post('/report/edit/{id}', 'ReportController@update');
    Route::post('/report/comment/add/{report_id}', 'ReportController@addComment');
    Route::get('/report/comment/delete/{report_id}/{comment_id}', 'ReportController@removeComment');
});
