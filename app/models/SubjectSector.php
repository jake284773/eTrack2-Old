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
 * Subject sector model
 *
 * @property float $code
 * @property string $name
 *
 * @package eTrack\Models
 */
class SubjectSector extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subject_sector';
}