<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
        return Redirect::route('login');
});

Route::filter('api.auth', function()
{
    if (Auth::guest())
        return Response::make('', 401);
});


Route::filter('auth.basic', function()
{
	return Auth::basic('user_id');
});

Route::filter('role.admin', function()
{
    if (Auth::user()->role !== 'Admin')
        return Redirect::home();
});

Route::filter('api.role.admin', function()
{
    if (Auth::user()->role !== 'Admin')
        return Response::make('', 401);
});

Route::filter('role.course_organiser', function()
{
    if (Auth::user()->role !== 'Course Organiser')
        return Redirect::home();
});

Route::filter('api.role.course_organiser', function()
{
    if (Auth::user()->role !== 'Course Organiser')
        return Response::make('', 401);
});

Route::filter('role.tutor', function()
{
    if (Auth::user()->role !== 'Tutor')
        return Redirect::home();
});

Route::filter('api.role.tutor', function()
{
    if (Auth::user()->role !== 'Tutor')
        return Response::make('', 401);
});

Route::filter('role.student', function()
{
    if (Auth::user()->role !== 'Student')
        return Redirect::home();
});

Route::filter('api.role.student', function()
{
    if (Auth::user()->role !== 'Student')
        return Response::make('', 401);
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
    if (Auth::check())
        return Redirect::home();
});

Route::filter('guest', function()
{
    if (Auth::check())
        return Response::make('', 401);
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
