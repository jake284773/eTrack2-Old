<?php

namespace eTrack\Controllers;

use Auth;
use View;

class HomeController extends BaseController {

    public function index()
    {
        $roleViews = array(
            'Admin' => 'home.admin',
            'Course Organiser' => 'home.courseorganiser',
            'Tutor' => 'home.tutor',
            'Student' => 'home.student',
        );

        $firstName = current(explode(' ', Auth::user()->full_name));

        return View::make($roleViews[Auth::user()->role], array('firstName' => $firstName, 'pageTitle' => 'Home'));
    }
} 