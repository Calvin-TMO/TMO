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
    Route::get('/users', 'UserController@all_users');
    Route::get('/user/add', 'UserController@new_user');
    Route::get('/user/{id}', 'UserController@view_user');
    Route::get('/user/edit/{id}', 'UserController@edit_user');
    Route::post('/user/add', 'UserController@add_user');
    Route::post('/user/edit/', 'UserController@update_user');
    Route::post('/user/delete/', 'UserController@delete_user');

    // Admin user role posts
    Route::post('/user/role/add', 'UserRoleController@add_user_role');
    Route::post('/user/role/delete', 'UserRoleController@delete_user_role');

    // Admin course pages
    Route::get('/courses', 'CourseController@all_courses');
    Route::get('/course/add', 'CourseController@new_course');
    Route::get('/course/{id}', 'CourseController@view_course');
    Route::get('/course/edit/{id}', 'CourseController@edit_course');
    Route::post('/course/add', 'CourseController@add_course');
    Route::post('/course/edit', 'CourseController@update_course');
    Route::post('/course/delete', 'CourseController@delete_course');

    // Course professor posts
    Route::post('/course/professor/add', 'CourseProfessorController@add_course_professor');
    Route::post('/course/professor/delete', 'CourseProfessorController@delete_course_professor');

    // Course tutor posts
    Route::post('/course/tutor/add', 'CourseTutorController@add_course_tutor');
    Route::post('/course/tutor/delete', 'CourseTutorController@delete_course_tutor');

    // Assignment pages
    Route::get('/assignments', 'AssignmentController@all_assignments');
    Route::get('/assignment/add', 'AssignmentController@new_assignment');
    Route::get('/assignment/{id}', 'AssignmentController@view_assignment');
    Route::get('/assignment/edit/{id}', 'AssignmentController@edit_assignment');
    Route::post('/assignment/add', 'AssignmentController@add_assignment');
    Route::post('/assignment/edit/{id}', 'AssignmentController@update_assignment');
    Route::post('/assignment/delete', 'AssignmentController@delete_assignment');

    // Report pages
    Route::get('/reports', 'ReportController@all_reports');
    Route::get('/report/add', 'ReportController@new_report');
    Route::get('/report/add/{assignment_id}', 'ReportController@new_report');
    Route::get('/report/{id}', 'ReportController@view_report');
    Route::get('/report/edit/{id}', 'ReportController@edit_report');
    Route::post('/report/add', 'ReportController@add_report');
    Route::post('/report/edit', 'ReportController@update_report');

    // Comment posts
    Route::post('/report/comment/add', 'CommentController@add_report_comment');
    Route::post('/report/comment/delete', 'CommentController@delete_report_comment');
});
