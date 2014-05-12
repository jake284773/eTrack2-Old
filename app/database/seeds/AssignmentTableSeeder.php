<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class AssignmentTableSeeder extends Seeder {

    public function run()
    {
        $date = new DateTime;

        DB::table('assignment')->insert(array(
            array('code' => 'DJ-2014-1-1', 'unit_id' => 'F-601-7233', 'status' => 'Approved', 'available_date' => '2014-01-06 00:00:00', 'deadline' => '2014-01-24 00:00:00', 'marking_start_date' => '2014-02-07 00:00:00', 'marking_deadline' => '2014-02-21 00:00:00', 'create_at' => $date, 'updated_at' => $date),
            array('code' => 'DJ-2014-1-2', 'unit_id' => 'F-601-7233', 'status' => 'Approved', 'available_date' => '2014-01-27 00:00:00', 'deadline' => '2014-02-14 00:00:00', 'marking_start_date' => '2014-02-28 00:00:00', 'marking_deadline' => '2014-03-14 00:00:00', 'create_at' => $date, 'updated_at' => $date),
            array('code' => 'DJ-2014-1-3', 'unit_id' => 'F-601-7233', 'status' => 'Approved', 'available_date' => '2014-02-17 00:00:00', 'deadline' => '2014-03-07 00:00:00', 'marking_start_date' => '2014-03-21 00:00:00', 'marking_deadline' => '2014-04-04 00:00:00', 'create_at' => $date, 'updated_at' => $date),
            array('code' => 'GW-2014-2-1', 'unit_id' => 'M-601-7261', 'status' => 'Approved', 'available_date' => '2014-01-06 00:00:00', 'deadline' => '2014-01-24 00:00:00', 'marking_start_date' => '2014-02-07 00:00:00', 'marking_deadline' => '2014-02-21 00:00:00', 'create_at' => $date, 'updated_at' => $date),
            array('code' => 'GW-2014-2-2', 'unit_id' => 'M-601-7261', 'status' => 'Approved', 'available_date' => '2014-01-27 00:00:00', 'deadline' => '2014-02-14 00:00:00', 'marking_start_date' => '2014-02-28 00:00:00', 'marking_deadline' => '2014-03-14 00:00:00', 'create_at' => $date, 'updated_at' => $date),
            array('code' => 'GW-2014-2-3', 'unit_id' => 'M-601-7261', 'status' => 'Approved', 'available_date' => '2014-02-17 00:00:00', 'deadline' => '2014-03-07 00:00:00', 'marking_start_date' => '2014-03-21 00:00:00', 'marking_deadline' => '2014-04-04 00:00:00', 'create_at' => $date, 'updated_at' => $date),
        ));

        DB::table('assignment_criteria')->insert(array(
            array('assignment_id' => 1, 'criteria_id' => 'M1', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 1, 'criteria_id' => 'P1', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 1, 'criteria_id' => 'P2', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 1, 'criteria_id' => 'P3', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 2, 'criteria_id' => 'D1', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 2, 'criteria_id' => 'M2', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 2, 'criteria_id' => 'P4', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 2, 'criteria_id' => 'P5', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 2, 'criteria_id' => 'P6', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 3, 'criteria_id' => 'D2', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 3, 'criteria_id' => 'M3', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 3, 'criteria_id' => 'P7', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 3, 'criteria_id' => 'P8', 'criteria_unit_id' => 'F-601-7233', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 4, 'criteria_id' => 'M1', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 4, 'criteria_id' => 'P1', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 4, 'criteria_id' => 'P2', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 5, 'criteria_id' => 'D1', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 5, 'criteria_id' => 'M2', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 5, 'criteria_id' => 'P3', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 5, 'criteria_id' => 'P4', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 6, 'criteria_id' => 'D2', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 6, 'criteria_id' => 'M3', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 6, 'criteria_id' => 'P5', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 6, 'criteria_id' => 'P6', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 6, 'criteria_id' => 'P7', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 6, 'criteria_id' => 'P8', 'criteria_unit_id' => 'M-601-7261', 'create_at' => $date, 'updated_at' => $date),
        ));

        DB::table('student_assignment')->insert(array(
            array('assignment_id' => 1, 'student_user_id' => '11400235', 'create_at' => $date, 'updated_at' => $date),
            array('assignment_id' => 1, 'student_user_id' => '11400922', 'create_at' => $date, 'updated_at' => $date),
        ));
    }
}