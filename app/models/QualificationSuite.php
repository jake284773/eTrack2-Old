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

class QualificationSuite extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'qualification_suite';

    public function qualifications()
    {
        return $this->hasMany('eTrack\Models\Qualification');
    }
}