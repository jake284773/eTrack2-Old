<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class CourseTableSeeder extends Seeder {

    public function run()
    {
        DB::table('course')->insert(array(
            array('id' => 'NAB', 'name' => 'BTEC Subsidiary Diploma in IT', 'qualification_title' => 'Subsidiary Diploma',
                'qualification_suite_title' => 'BTEC Nationals 2010', 'status' => 'Active', 'level' => 3, 'faculty_id' => 'CCDI',
                'course_organiser_user_id' => 1005, 'subject_sector_id' => 18),
        ));

        DB::table('course_student')->insert(array(
            array('course_id' => 1, 'student_user_id' => 2, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 3, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 4, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 5, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 6, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 7, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 8, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 12, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 13, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 14, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 15, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
            array('course_id' => 1, 'student_user_id' => 16, 'predicted_grade' => 'P', 'predicted_ucas_tariff_score' => 40),
        ));

        DB::table('course_unit')->insert(array(
            array('course_id' => 'NAB', 'unit_id' => 'F-601-7233'),
            array('course_id' => 'NAB', 'unit_id' => 'F-601-7264'),
            array('course_id' => 'NAB', 'unit_id' => 'L-601-6585'),
            array('course_id' => 'NAB', 'unit_id' => 'M-601-6630'),
            array('course_id' => 'NAB', 'unit_id' => 'M-601-7261'),
            array('course_id' => 'NAB', 'unit_id' => 'T-601-7312'),
        ));

        DB::table('course')->insert(array(
            array('id' => 'NDIT-A01', 'name' => 'BTEC Extended Diploma in IT (Software Development',
                'qualification_title' => 'Extended Diploma', 'qualification_suite_title' => 'BTEC Nationals 2010',
                'status' => 'Active', 'level' => 3, 'pathway' => 'Software Development', 'faculty_id' => 'CCDI',
                'course_organiser_user_id' => 'gwright', 'subject_sector_id' => 6.1),
            array('id' => 'NDIT-A02', 'name' => 'BTEC Extended Diploma in IT (Systems Support)',
                'qualification_title' => 'Extended Diploma', 'qualification_suite_title' => 'BTEC Nationals 2010',
                'status' => 'Active', 'level' => 3, 'pathway' => 'Systems Support', 'faculty_id' => 'CCDI',
                'course_organiser_user_id' => 'gwright', 'subject_sector_id' => 6.1),
        ));
    }
}