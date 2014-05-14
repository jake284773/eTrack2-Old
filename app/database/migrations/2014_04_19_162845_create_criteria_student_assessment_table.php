<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCriteriaStudentAssessmentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_student_assessment', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_assignment_id');
            $table->unsignedInteger('criteria_id');
            $table->unsignedInteger('assessor_user_id');
            $table->unsignedInteger('moderator_user_id')->nullable();
            $table->string('assessment_status', 3);
            $table->timestamps();

            $table->unique(array('student_assignment_id', 'criteria_id'),
                'criteria_student_assessment_unique');

            $table->foreign('student_assignment_id',
                'criteria_student_assignment_foreign')
                ->references('id')
                ->on('student_assignment');
            $table->foreign('criteria_id')
                ->references('id')
                ->on('criteria');
            $table->foreign('assessor_user_id')
                ->references('id')
                ->on('user');
            $table->foreign('moderator_user_id')
                ->references('id')
                ->on('user');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('criteria_student_assessment');
    }

}
