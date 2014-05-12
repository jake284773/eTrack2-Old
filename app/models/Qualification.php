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
 * Qualification model
 *
 * @property string $title
 * @property integer $level
 * @property integer $glh
 * @property integer $creditValue
 * @property-read $qualificationSuite
 *
 * @package eTrack\Models
 */
class Qualification extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'qualification';

    public function qualification_suite()
    {
        return $this->belongsTo('eTrack\Models\QualificationSuite', 'qualification_suite_id');
    }
}