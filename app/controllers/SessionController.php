<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace eTrack\Controllers;

use Auth;
use Input;
use Redirect;
use View;
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

    public function create()
    {
        return View::make('session.create');
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
            return Redirect::intended();
        }

        return Redirect::back()->with('error', 'You\'ve entered the wrong '.
            'user ID or password. Please check your details and try again.');
    }

    /**
     * Log the user out of the system.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy() {
        Auth::logout();
        Session::flush();
        return Redirect::route('login')->with('message', 'You have been logged '.
            'out successfully');
    }
}
