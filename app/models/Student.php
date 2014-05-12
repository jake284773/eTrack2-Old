<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace eTrack\Models;

class Student extends User
{
    public function courses()
    {
        return $this->belongsToMany('eTrack\Models\Course', null,
            'student_user_id');
    }
}