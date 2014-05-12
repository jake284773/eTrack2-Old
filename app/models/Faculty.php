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
 * Faculty model
 *
 * @property string $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|Course[] $courses
 *
 * @package eTrack\Models
 */
class Faculty extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faculty';

    public function courses()
    {
        return $this->hasMany('eTrack\Models\Course');
    }

}