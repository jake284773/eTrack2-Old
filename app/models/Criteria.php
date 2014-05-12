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
 * Unit criteria model
 *
 * @property string $code
 * @property Unit $unit The unit which this criteria belongs to
 * @property-read string $type Type of criteria (Pass, Merit, Distinction)
 *
 * @package  eTrack\Models
 * @author  Jake Moreman <mail@jakemoreman.co.uk>
 */
class Criteria extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'criteria';

    public function unit()
    {
        return $this->belongsTo('eTrack\Models\Unit');
    }
}