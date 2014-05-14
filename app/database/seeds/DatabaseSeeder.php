<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('FacultyTableSeeder');
        $this->call('SubjectSectorTableSeeder');
        $this->call('QualificationSuiteTableSeeder');
        $this->call('QualificationTableSeeder');
        $this->call('QualificationGradeTableSeeder');
        $this->call('UnitTableSeeder');
//        $this->call('CriteriaTableSeeder');
    }

}
