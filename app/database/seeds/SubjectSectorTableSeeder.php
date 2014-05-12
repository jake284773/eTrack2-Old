<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class SubjectSectorTableSeeder extends Seeder {

    public function run()
    {
        $date = new DateTime;

        DB::table('subject_sector')->insert(array(
            array('code' => 1.1, 'name' =>  'Medicine and Dentistry', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 1.2, 'name' =>  'Nursing and Subjects and Vocations Allied to Medicine', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 1.3, 'name' =>  'Health and Social Care', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 1.4, 'name' =>  'Public Services', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 1.5, 'name' =>  'Child Development and Well-Being', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 2.1, 'name' =>  'Science', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 2.2, 'name' =>  'Mathematics and Statistics', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 3.1, 'name' =>  'Agriculture', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 3.2, 'name' =>  'Horticulture And Forestry', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 3.3, 'name' =>  'Animal Care and Veterinary Science', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 3.4, 'name' =>  'Environmental Conservation', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 4.1, 'name' =>  'Engineering', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 4.2, 'name' =>  'Manufacturing Technologies', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 4.3, 'name' =>  'Transportation Operations and Maintenance', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 5.1, 'name' =>  'Architecture', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 5.2, 'name' =>  'Building and Construction', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 5.3, 'name' =>  'Urban, Rural and Regional Planning', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 6.1, 'name' =>  'ICT Practitioners', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 6.2, 'name' =>  'ICT for Users', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 7.1, 'name' =>  'Retailing and Wholesaling', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 7.2, 'name' =>  'Warehousing and Distribution', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 7.3, 'name' =>  'Service Enterprises', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 7.4, 'name' =>  'Hospitality and Catering', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 8.1, 'name' =>  'Sport, Leisure and Recreation', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 8.2, 'name' =>  'Travel and Tourism', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 9.1, 'name' =>  'Performing Arts', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 9.2, 'name' =>  'Crafts, Creative Arts and Design', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 9.3, 'name' =>  'Media and Communication', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 9.4, 'name' =>  'Publishing and Information Services', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 10.1, 'name' =>  'History', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 10.2, 'name' =>  'Archaeology and Archaeological Sciences', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 10.3, 'name' =>  'Philosophy', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 10.4, 'name' =>  'Theology and Religious Studies', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 11.1, 'name' =>  'Geography', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 11.2, 'name' =>  'Sociology and Social Policy', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 11.3, 'name' =>  'Politics', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 11.4, 'name' =>  'Economics', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 11.5, 'name' =>  'Anthropology', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 12.1, 'name' =>  'Languages, Literature and Culture of the British Isles', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 12.2, 'name' =>  'Other Languages, Literature and Culture', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 12.3, 'name' =>  'Linguistics', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 13.1, 'name' =>  'Teaching and Lecturing', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 13.2, 'name' =>  'Direct Learning Support', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 14.1, 'name' =>  'Foundations For Learning and Life', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 14.2, 'name' =>  'Preparation for Work', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 15.1, 'name' =>  'Accounting and Finance', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 15.2, 'name' =>  'Administration', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 15.3, 'name' =>  'Business Management', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 15.4, 'name' =>  'Marketing and Sales', 'created_at' => $date, 'updated_at' => $date),
            array('code' => 15.5, 'name' =>  'Law and Legal Services', 'created_at' => $date, 'updated_at' => $date),
        ));
    }
}