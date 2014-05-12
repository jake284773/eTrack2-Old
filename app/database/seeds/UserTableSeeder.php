<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use eTrack\Models\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $user = new User;

        $user->user_id = "admin";
        $user->password = Hash::make('admin');
        $user->email = "admin@example.com";
        $user->full_name = "Administrator";
        $user->role = "Admin";

        $user->save();
    }
}