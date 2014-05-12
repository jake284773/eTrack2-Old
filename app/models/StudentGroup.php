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

use Eloquent;

class StudentGroup extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student_group';

    public function course()
    {
        return $this->belongsTo('eTrack\Models\Course');
    }

    public function students()
    {
        return $this->belongsToMany('eTrack\Models\User',
            'student_group_student', null, 'student_user_id');
    }

    public function tutor()
    {
        return $this->belongsTo('eTrack\Models\User', 'tutor_user_id');
    }
}