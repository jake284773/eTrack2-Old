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
 * Unit model
 *
 * @property string $code
 * @property string $name
 * @property integer $credit_value
 * @property integer $glh
 * @property integer $level
 * @property-read Subject_Sector $subject_sector
 *
 * @package eTrack\Models
 */
class Unit extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'unit';

    public function subject_sector()
    {
        return $this->belongsTo('eTrack\Models\SubjectSector');
    }

    public function criteria()
    {
        return $this->hasMany('eTrack\Models\Criteria');
    }
}