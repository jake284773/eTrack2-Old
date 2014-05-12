<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class FacultyTableSeeder extends Seeder
{

    public function run()
    {
        $date = new DateTime;

        DB::table('faculty')->insert(
            array(
                array(
                    'code' => 'BHAS',
                    'name' => 'Business, Healthcare & Academic Studies',
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'code' => 'CCDI',
                    'name' => 'Creative Cultural & Digital Industries',
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'code' => 'LSVE',
                    'name' => 'Lifestyle Services & the Visitor Economy',
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'code' => 'PCS',
                    'name' => 'Progression & Community Studies',
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'code' => 'TMR',
                    'name' => 'Technology, Marine & Renewables',
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'code' => 'WBL_SP',
                    'name' => 'Work Based Learning & School Partnerships',
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
            )
        );
    }
}