<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Restful JSON API
Route::group(array('prefix' => 'api', 'namespace' => 'eTrack\Controllers\API'), function()
{
    Route::resource('session', 'SessionController', array('only' => array('index', 'store')));
    Route::delete('session', array('uses' => 'SessionController@destroy', 'as' => 'api.session.destroy', 'before' => 'auth'));

    Route::resource('faculty', 'FacultyController');
    Route::resource('faculty.courses', 'FacultyCourseController');
    Route::resource('course', 'CourseController');
});

Route::group(array('namespace' => 'eTrack\Controllers'), function()
{
    Route::get('/', array('uses' => 'HomeController@index', 'before' => 'auth', 'as' => 'home'));

    Route::get('login', array('uses' => 'SessionController@create', 'as' => 'login'));
    Route::get('logout', array('uses' => 'SessionController@destroy', 'before' => 'auth', 'as' => 'logout'));
    Route::resource('session', 'SessionController', array('only' => array('create', 'store', 'destroy')));

    Route::resource('faculty', 'FacultyController');
    Route::post('faculty/batch_action', array('uses' => 'FacultyController@batchAction', 'as' => 'faculty.batchAction'));
    Route::resource('faculty.courses', 'FacultyCourseController');
    Route::resource('course', 'CourseController');
});
