<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class StudentGroupTableSeeder extends Seeder {
    public function run()
    {
        DB::table('student_group')->insert(array(
            array('id' => 'NAB-B01', 'course_id' => 'NAB', 'tutor_user_id' => 'snewell'),
            array('id' => 'NAB-B02', 'course_id' => 'NAB', 'tutor_user_id' => 'jbarron'),
        ));

        DB::table('student_group_student')->insert(array(
            array('student_group_id' => 'NAB-B01', 'student_user_id' => 11400235),
            array('student_group_id' => 'NAB-B01', 'student_user_id' => 11400922),
            array('student_group_id' => 'NAB-B01', 'student_user_id' => 11401181),
            array('student_group_id' => 'NAB-B01', 'student_user_id' => 11401358),
            array('student_group_id' => 'NAB-B01', 'student_user_id' => 11401452),
            array('student_group_id' => 'NAB-B01', 'student_user_id' => 11401587),
            array('student_group_id' => 'NAB-B01', 'student_user_id' => 11401854),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11401947),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11402039),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11402054),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11402494),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11403162),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11403190),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11403418),
            array('student_group_id' => 'NAB-B02', 'student_user_id' => 11403452),
        ));
    }
} 