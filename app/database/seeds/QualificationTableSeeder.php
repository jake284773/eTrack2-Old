<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class QualificationTableSeeder extends Seeder {
    public function run()
    {
        $date = new DateTime;

        DB::table('qualification')->insert(array(
            array(
                'title' => 'Certificate',
                'qualification_suite_id' => 1,
                'level' => 3,
                'glh' => 180,
                'credit_value' => 30,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Subsidiary Diploma',
                'qualification_suite_id' => 1,
                'level' => 3,
                'glh' => 360,
                'credit_value' => 60,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => '90 Credit Diploma',
                'qualification_suite_id' => 1,
                'level' => 3,
                'glh' => 540,
                'credit_value' => 90,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Diploma',
                'qualification_suite_id' => 1,
                'level' => 3,
                'glh' => 720,
                'credit_value' => 120,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Extended Diploma',
                'qualification_suite_id' => 1,
                'level' => 3,
                'glh' => 1080,
                'credit_value' => 180,
                'created_at' => $date,
                'updated_at' => $date,
            ),

            array(
                'title' => 'Certificate',
                'qualification_suite_id' => 2,
                'level' => 2,
                'glh' => 90,
                'credit_value' => 15,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Extended Certificate',
                'qualification_suite_id' => 2,
                'level' => 2,
                'glh' => '180',
                'credit_value' => 30,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Diploma',
                'qualification_suite_id' => 2,
                'level' => 2,
                'glh' => 360,
                'credit_value' => 60,
                'created_at' => $date,
                'updated_at' => $date,
            ),

            array(
                'title' => 'Certificate',
                'qualification_suite_id' => 4,
                'level' => 2,
                'glh' => 90,
                'credit_value' => 15,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Extended Certificate',
                'qualification_suite_id' => 4,
                'level' => 2,
                'glh' => '180',
                'credit_value' => 30,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Diploma',
                'qualification_suite_id' => 4,
                'level' => 2,
                'glh' => 360,
                'credit_value' => 60,
                'created_at' => $date,
                'updated_at' => $date,
            ),

            array(
                'title' => 'Certificate',
                'qualification_suite_id' => 5,
                'level' => 3,
                'glh' => 180,
                'credit_value' => 30,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Introductory Diploma',
                'qualification_suite_id' => 5,
                'level' => 3,
                'glh' => 360,
                'credit_value' => 60,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Subsidiary Diploma',
                'qualification_suite_id' => 5,
                'level' => 3,
                'glh' => 540,
                'credit_value' => 90,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Diploma',
                'qualification_suite_id' => 5,
                'level' => 3,
                'glh' => 720,
                'credit_value' => 120,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Extended Diploma',
                'qualification_suite_id' => 5,
                'level' => 3,
                'glh' => 1080,
                'credit_value' => 180,
                'created_at' => $date,
                'updated_at' => $date,
            ),
        ));

        DB::table('qualification')->insert(array(
            array(
                'title' => 'Award',
                'qualification_suite_id' => 3,
                'level' => 2,
                'glh' => 120,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Certificate',
                'qualification_suite_id' => 3,
                'level' => 2,
                'glh' => 240,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Extended Certificate',
                'qualification_suite_id' => 3,
                'level' => 2,
                'glh' => 360,
                'created_at' => $date,
                'updated_at' => $date,
            ),
            array(
                'title' => 'Diploma',
                'qualification_suite_id' => 3,
                'level' => 2,
                'glh' => 480,
                'created_at' => $date,
                'updated_at' => $date,
            ),
        ));
    }
}