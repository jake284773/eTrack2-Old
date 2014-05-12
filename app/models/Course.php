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

/**
 * Course model
 *
 * @property string $id
 * @property string $name
 * @property integer $level
 * @property string $status
 * @property string $pathway
 * @property \Illuminate\Database\Eloquent\Collection|Unit[] $units
 * @property User $courseOrganiser
 * @property-read Subject_Sector $subjectSector
 * @property-read Faculty $faculty
 * @property-read Qualification $qualification
 *
 * @package eTrack\Models
 */
class Course extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'course';

    public function units()
    {
        return $this->belongsToMany('eTrack\Models\Unit', 'course_unit');
    }

    public function course_organiser()
    {
        return $this->belongsTo('eTrack\Models\User', 'course_organiser_user_id');
    }

    public function faculty()
    {
        return $this->belongsTo('eTrack\Models\Faculty');
    }

    public function subject_sector()
    {
        return $this->belongsTo('eTrack\Models\Subject_Sector');
    }

    public function qualification()
    {
        return $this->belongsTo('eTrack\Models\Qualification');
    }

}