<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class QualificationGradeTableSeeder extends Seeder
{
    public function run()
    {
        $date = new DateTime;

        DB::table('qualification_grade')->insert(
            array(
                /*
                 * BTEC First (2010) Certificate Grades
                 */
                array(
                    'qualification_id' => 6,
                    'grade' => 'P',
                    'credit_value_start' => 75,
                    'credit_value_end' => 84,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 6,
                    'grade' => 'M',
                    'credit_value_start' => 85,
                    'credit_value_end' => 94,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 6,
                    'grade' => 'D',
                    'credit_value_start' => 95,
                    'credit_value_end' => 99,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /*
                 * BTEC First (2010) Extended Certificate Grades
                 */
                array(
                    'qualification_id' => 7,
                    'grade' => 'P',
                    'credit_value_start' => 150,
                    'credit_value_end' => 169,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 7,
                    'grade' => 'M',
                    'credit_value_start' => 170,
                    'credit_value_end' => 189,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 7,
                    'grade' => 'D',
                    'credit_value_start' => 190,
                    'credit_value_end' => 199,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /*
                 * BTEC First (2010) Diploma Grades
                 */
                array(
                    'qualification_id' => 8,
                    'grade' => 'P',
                    'credit_value_start' => 300,
                    'credit_value_end' => 339,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 8,
                    'grade' => 'M',
                    'credit_value_start' => 340,
                    'credit_value_end' => 379,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 8,
                    'grade' => 'D',
                    'credit_value_start' => 380,
                    'credit_value_end' => 399,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /* -------------------------------------------------------------- */

                /*
                 * BTEC First (2012) Award Grades
                 */
                array(
                    'qualification_id' => 17,
                    'grade' => 'P',
                    'credit_value_start' => 48,
                    'credit_value_end' => 65,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 17,
                    'grade' => 'M',
                    'credit_value_start' => 66,
                    'credit_value_end' => 83,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 17,
                    'grade' => 'D',
                    'credit_value_start' => 84,
                    'credit_value_end' => 89,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * BTEC First (2012) Certificate Grades
                 */
                array(
                    'qualification_id' => 18,
                    'grade' => 'PP',
                    'credit_value_start' => 96,
                    'credit_value_end' => 113,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 18,
                    'grade' => 'MP',
                    'credit_value_start' => 114,
                    'credit_value_end' => 131,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 18,
                    'grade' => 'MM',
                    'credit_value_start' => 132,
                    'credit_value_end' => 149,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 18,
                    'grade' => 'DM',
                    'credit_value_start' => 150,
                    'credit_value_end' => 167,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 18,
                    'grade' => 'DD',
                    'credit_value_start' => 168,
                    'credit_value_end' => 173,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 18,
                    'grade' => 'D*D',
                    'credit_value_start' => 174,
                    'credit_value_end' => 179,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * BTEC First (2012) Extended Certificate
                 */
                array(
                    'qualification_id' => 19,
                    'grade' => 'PP',
                    'credit_value_start' => 144,
                    'credit_value_end' => 173,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 19,
                    'grade' => 'MP',
                    'credit_value_start' => 174,
                    'credit_value_end' => 203,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 19,
                    'grade' => 'MM',
                    'credit_value_start' => 204,
                    'credit_value_end' => 233,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 19,
                    'grade' => 'DM',
                    'credit_value_start' => 234,
                    'credit_value_end' => 263,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 19,
                    'grade' => 'DD',
                    'credit_value_start' => 264,
                    'credit_value_end' => 269,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 19,
                    'grade' => 'D*D',
                    'credit_value_start' => 270,
                    'credit_value_end' => 275,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * BTEC First (2012) Diploma
                 */
                array(
                    'qualification_id' => 20,
                    'grade' => 'PP',
                    'credit_value_start' => 192,
                    'credit_value_end' => 233,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 20,
                    'grade' => 'MP',
                    'credit_value_start' => 234,
                    'credit_value_end' => 275,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 20,
                    'grade' => 'MM',
                    'credit_value_start' => 276,
                    'credit_value_end' => 317,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 20,
                    'grade' => 'DM',
                    'credit_value_start' => 318,
                    'credit_value_end' => 359,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 20,
                    'grade' => 'DD',
                    'credit_value_start' => 360,
                    'credit_value_end' => 365,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 20,
                    'grade' => 'D*D',
                    'credit_value_start' => 366,
                    'credit_value_end' => 371,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /* -------------------------------------------------------------- */

                /**
                 * OCR Level 2 Cambridge Technical Certificate Grades
                 */
                array(
                    'qualification_id' => 9,
                    'grade' => 'P',
                    'credit_value_start' => 75,
                    'credit_value_end' => 84,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 9,
                    'grade' => 'M',
                    'credit_value_start' => 85,
                    'credit_value_end' => 94,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 9,
                    'grade' => 'D',
                    'credit_value_start' => 95,
                    'credit_value_end' => 99,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * OCR Level 2 Cambridge Technical Extended Certificate Grades
                 */
                array(
                    'qualification_id' => 10,
                    'grade' => 'P',
                    'credit_value_start' => 150,
                    'credit_value_end' => 169,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 10,
                    'grade' => 'M',
                    'credit_value_start' => 170,
                    'credit_value_end' => 189,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 10,
                    'grade' => 'D',
                    'credit_value_start' => 190,
                    'credit_value_end' => 199,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * OCR Level 2 Cambridge Technical Diploma Grades
                 */
                array(
                    'qualification_id' => 11,
                    'grade' => 'P',
                    'credit_value_start' => 300,
                    'credit_value_end' => 339,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 11,
                    'grade' => 'M',
                    'credit_value_start' => 340,
                    'credit_value_end' => 379,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 11,
                    'grade' => 'D',
                    'credit_value_start' => 380,
                    'credit_value_end' => 399,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),

                /* -------------------------------------------------------------- */
            )
        );

        DB::table('qualification_grade')->insert(
            array(
                /**
                 * BTEC National (2010) Certificate Grades
                 */
                array(
                    'qualification_id' => 1,
                    'grade' => 'P',
                    'ucas_tariff_points' => 20,
                    'credit_value_start' => 210,
                    'credit_value_end' => 229,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 1,
                    'grade' => 'M',
                    'ucas_tariff_points' => 40,
                    'credit_value_start' => 230,
                    'credit_value_end' => 249,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 1,
                    'grade' => 'D',
                    'ucas_tariff_points' => 60,
                    'credit_value_start' => 250,
                    'credit_value_end' => 259,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * BTEC National (2010) Subsidiary Diploma Grades
                 */
                array(
                    'qualification_id' => 2,
                    'grade' => 'P',
                    'ucas_tariff_points' => 40,
                    'credit_value_start' => 420,
                    'credit_value_end' => 459,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 2,
                    'grade' => 'M',
                    'ucas_tariff_points' => 80,
                    'credit_value_start' => 460,
                    'credit_value_end' => 499,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 2,
                    'grade' => 'D',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 500,
                    'credit_value_end' => 519,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * BTEC National (2010) 90 Credit Diploma Grades
                 */
                array(
                    'qualification_id' => 3,
                    'grade' => 'PP',
                    'ucas_tariff_points' => 60,
                    'credit_value_start' => 630,
                    'credit_value_end' => 659,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 3,
                    'grade' => 'MP',
                    'ucas_tariff_points' => 100,
                    'credit_value_start' => 660,
                    'credit_value_end' => 689,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 3,
                    'grade' => 'MM',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 690,
                    'credit_value_end' => 719,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 3,
                    'grade' => 'DM',
                    'ucas_tariff_points' => 160,
                    'credit_value_start' => 720,
                    'credit_value_end' => 749,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 3,
                    'grade' => 'DD',
                    'ucas_tariff_points' => 180,
                    'credit_value_start' => 750,
                    'credit_value_end' => 769,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 3,
                    'grade' => 'D*D',
                    'ucas_tariff_points' => 200,
                    'credit_value_start' => 770,
                    'credit_value_end' => 789,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * BTEC National (2010) Diploma Grades
                 */
                array(
                    'qualification_id' => 4,
                    'grade' => 'PP',
                    'ucas_tariff_points' => 80,
                    'credit_value_start' => 840,
                    'credit_value_end' => 879,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 4,
                    'grade' => 'MP',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 880,
                    'credit_value_end' => 819,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 4,
                    'grade' => 'MM',
                    'ucas_tariff_points' => 160,
                    'credit_value_start' => 920,
                    'credit_value_end' => 959,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 4,
                    'grade' => 'DM',
                    'ucas_tariff_points' => 200,
                    'credit_value_start' => 960,
                    'credit_value_end' => 999,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 4,
                    'grade' => 'DD',
                    'ucas_tariff_points' => 240,
                    'credit_value_start' => 1000,
                    'credit_value_end' => 1029,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 4,
                    'grade' => 'D*D',
                    'ucas_tariff_points' => 260,
                    'credit_value_start' => 1030,
                    'credit_value_end' => 1059,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * BTEC National (2010) Extended Diploma Grades
                 */
                array(
                    'qualification_id' => 5,
                    'grade' => 'PPP',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 1260,
                    'credit_value_end' => 1299,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'MPP',
                    'ucas_tariff_points' => 160,
                    'credit_value_start' => 1300,
                    'credit_value_end' => 1339,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'MMP',
                    'ucas_tariff_points' => 200,
                    'credit_value_start' => 1340,
                    'credit_value_end' => 1379,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'MMM',
                    'ucas_tariff_points' => 240,
                    'credit_value_start' => 1380,
                    'credit_value_end' => 1419,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'DMM',
                    'ucas_tariff_points' => 280,
                    'credit_value_start' => 1460,
                    'credit_value_end' => 1499,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'DDM',
                    'ucas_tariff_points' => 320,
                    'credit_value_start' => 1460,
                    'credit_value_end' => 1499,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'DDD',
                    'ucas_tariff_points' => 360,
                    'credit_value_start' => 1500,
                    'credit_value_end' => 1529,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'D*DD',
                    'ucas_tariff_points' => 380,
                    'credit_value_start' => 1530,
                    'credit_value_end' => 1559,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'D*D*D',
                    'ucas_tariff_points' => 400,
                    'credit_value_start' => 1560,
                    'credit_value_end' => 1589,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * OCR Level 3 Cambridge Technical Certificate Grades
                 */
                array(
                    'qualification_id' => 12,
                    'grade' => 'P',
                    'ucas_tariff_points' => 20,
                    'credit_value_start' => 210,
                    'credit_value_end' => 229,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 12,
                    'grade' => 'M',
                    'ucas_tariff_points' => 40,
                    'credit_value_start' => 230,
                    'credit_value_end' => 249,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 12,
                    'grade' => 'D',
                    'ucas_tariff_points' => 60,
                    'credit_value_start' => 250,
                    'credit_value_end' => 259,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * OCR Level 3 Cambridge Technical Introductory Diploma Grades
                 */
                array(
                    'qualification_id' => 13,
                    'grade' => 'P',
                    'ucas_tariff_points' => 40,
                    'credit_value_start' => 420,
                    'credit_value_end' => 459,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 13,
                    'grade' => 'M',
                    'ucas_tariff_points' => 80,
                    'credit_value_start' => 460,
                    'credit_value_end' => 499,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 13,
                    'grade' => 'D',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 500,
                    'credit_value_end' => 519,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * OCR Level 3 Cambridge Technical Diploma Grades
                 */
                array(
                    'qualification_id' => 15,
                    'grade' => 'PP',
                    'ucas_tariff_points' => 60,
                    'credit_value_start' => 630,
                    'credit_value_end' => 659,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 15,
                    'grade' => 'MP',
                    'ucas_tariff_points' => 100,
                    'credit_value_start' => 660,
                    'credit_value_end' => 689,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 15,
                    'grade' => 'MM',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 690,
                    'credit_value_end' => 719,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 15,
                    'grade' => 'DM',
                    'ucas_tariff_points' => 160,
                    'credit_value_start' => 720,
                    'credit_value_end' => 749,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 15,
                    'grade' => 'DD',
                    'ucas_tariff_points' => 180,
                    'credit_value_start' => 750,
                    'credit_value_end' => 769,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 15,
                    'grade' => 'D*D',
                    'ucas_tariff_points' => 200,
                    'credit_value_start' => 770,
                    'credit_value_end' => 789,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * OCR Level 3 Cambridge Technical Subsidiary Diploma Grades
                 */
                array(
                    'qualification_id' => 14,
                    'grade' => 'PP',
                    'ucas_tariff_points' => 80,
                    'credit_value_start' => 840,
                    'credit_value_end' => 879,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 14,
                    'grade' => 'MP',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 880,
                    'credit_value_end' => 819,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 14,
                    'grade' => 'MM',
                    'ucas_tariff_points' => 160,
                    'credit_value_start' => 920,
                    'credit_value_end' => 959,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 14,
                    'grade' => 'DM',
                    'ucas_tariff_points' => 200,
                    'credit_value_start' => 960,
                    'credit_value_end' => 999,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 14,
                    'grade' => 'DD',
                    'ucas_tariff_points' => 240,
                    'credit_value_start' => 1000,
                    'credit_value_end' => 1029,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 14,
                    'grade' => 'D*D',
                    'ucas_tariff_points' => 260,
                    'credit_value_start' => 1030,
                    'credit_value_end' => 1059,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                /**
                 * OCR Level 3 Cambridge Technical Extended Diploma Grades
                 */
                array(
                    'qualification_id' => 16,
                    'grade' => 'PPP',
                    'ucas_tariff_points' => 120,
                    'credit_value_start' => 1260,
                    'credit_value_end' => 1299,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'MPP',
                    'ucas_tariff_points' => 160,
                    'credit_value_start' => 1300,
                    'credit_value_end' => 1339,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'MMP',
                    'ucas_tariff_points' => 200,
                    'credit_value_start' => 1340,
                    'credit_value_end' => 1379,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'MMM',
                    'ucas_tariff_points' => 240,
                    'credit_value_start' => 1380,
                    'credit_value_end' => 1419,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'DMM',
                    'ucas_tariff_points' => 280,
                    'credit_value_start' => 1460,
                    'credit_value_end' => 1499,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'DDM',
                    'ucas_tariff_points' => 320,
                    'credit_value_start' => 1460,
                    'credit_value_end' => 1499,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'DDD',
                    'ucas_tariff_points' => 360,
                    'credit_value_start' => 1500,
                    'credit_value_end' => 1529,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'D*DD',
                    'ucas_tariff_points' => 380,
                    'credit_value_start' => 1530,
                    'credit_value_end' => 1559,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'D*D*D',
                    'ucas_tariff_points' => 400,
                    'credit_value_start' => 1560,
                    'credit_value_end' => 1589,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
            )
        );

        DB::table('qualification_grade')->insert(
            array(
                array(
                    'qualification_id' => 6,
                    'grade' => 'D*',
                    'credit_value_start' => 100,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 7,
                    'grade' => 'D*',
                    'credit_value_start' => 200,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 8,
                    'grade' => 'D*',
                    'credit_value_start' => 400,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 17,
                    'grade' => 'D*',
                    'credit_value_start' => 90,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 18,
                    'grade' => 'D*D*',
                    'credit_value_start' => 180,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 19,
                    'grade' => 'D*D*',
                    'credit_value_start' => 276,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 20,
                    'grade' => 'D*D*',
                    'credit_value_start' => 372,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
            )
        );

        DB::table('qualification_grade')->insert(
            array(
                array(
                    'qualification_id' => 1,
                    'grade' => 'D*',
                    'ucas_tariff_points' => 70,
                    'credit_value_start' => 260,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 2,
                    'grade' => 'D*',
                    'ucas_tariff_points' => 140,
                    'credit_value_start' => 520,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 3,
                    'grade' => 'D*D*',
                    'ucas_tariff_points' => 210,
                    'credit_value_start' => 790,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 4,
                    'grade' => 'D*D*',
                    'ucas_tariff_points' => 280,
                    'credit_value_start' => 1060,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 5,
                    'grade' => 'D*D*D*',
                    'ucas_tariff_points' => 420,
                    'credit_value_start' => 1590,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 12,
                    'grade' => 'D*',
                    'ucas_tariff_points' => 70,
                    'credit_value_start' => 260,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 13,
                    'grade' => 'D*',
                    'ucas_tariff_points' => 140,
                    'credit_value_start' => 520,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 15,
                    'grade' => 'D*D*',
                    'ucas_tariff_points' => 210,
                    'credit_value_start' => 790,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 14,
                    'grade' => 'D*D*',
                    'ucas_tariff_points' => 280,
                    'credit_value_start' => 1060,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 16,
                    'grade' => 'D*D*D*',
                    'ucas_tariff_points' => 420,
                    'credit_value_start' => 1590,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
            )
        );

        DB::table('qualification_grade')->insert(
            array(
                array(
                    'qualification_id' => 9,
                    'grade' => 'D*',
                    'credit_value_start' => 100,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 10,
                    'grade' => 'D*',
                    'credit_value_start' => 200,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
                array(
                    'qualification_id' => 11,
                    'grade' => 'D*',
                    'credit_value_start' => 400,
                    'created_at' => $date,
                    'updated_at' => $date,
                ),
            )
        );
    }
}