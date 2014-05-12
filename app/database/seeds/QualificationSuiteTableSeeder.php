<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class QualificationSuiteTableSeeder extends Seeder
{
    public function run()
    {
        $date = new DateTime;

        DB::table('qualification_suite')->insert(
            array(
                array(
                    'title' => 'BTEC Nationals 2010',
                    'framework' => 'QCF',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'title' => 'BTEC Firsts 2010',
                    'framework' => 'QCF',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'title' => 'BTEC Firsts 2012',
                    'framework' => 'NQF',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'title' => 'OCR Level 2 Cambridge Technical',
                    'framework' => 'QCF',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'title' => 'OCR Level 3 Cambridge Technical',
                    'framework' => 'QCF',
                    'created_at' => $date,
                    'updated_at' => $date
                ),
            )
        );
    }
}