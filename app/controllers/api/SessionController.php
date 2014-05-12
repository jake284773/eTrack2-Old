<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace eTrack\Controllers\API;

use Auth;
use eTrack\Controllers\BaseController;
use Input;
use Response;
use Session;

/**
 * User session controller
 *
 * For managing user sessions.
 *
 * @package eTrack\controllers
 * @author Jake Moreman <mail@jakemoreman.co.uk>
 */
class SessionController extends BaseController {

    public function index()
    {
        if (Auth::guest()) return Response::make('', 401);

        /** @noinspection PhpUndefinedFieldInspection */
        $user = array(
            'user_id' => Auth::user()->user_id,
            'email' => Auth::user()->email,
            'full_name' => Auth::user()->full_name,
            'role' => Auth::user()->role
        );

        return Response::json($user);
    }

    /**
     * Attempt to authenticate the user.
     *
     * If the submitted credentials are correct, create a new user session and
     * redirect the user to the home page.
     *
     * @return \Illuminate\View\View
     */
    public function store() {
        $credentials = array(
            'user_id' => Input::get('user_id'),
            'password' => Input::get('password')
        );

        if(Auth::attempt($credentials)) {
            return Response::make();
        }

        return Response::json(array('error' => 'You\'ve entered the wrong user ID or password. Please check your details'.
            ' and try again.'), 401);
    }

    /**
     * Log the user out of the system.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy() {
        Auth::logout();
        Session::flush();
        return Response::json(array('message' => 'You have been logged out successfully'));
    }
}
