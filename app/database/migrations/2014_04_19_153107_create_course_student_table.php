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

class CreateCourseStudentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('student_user_id');
            $table->string('final_grade', 45)->nullable();
            $table->string('predicted_grade', 45)->nullable();
            $table->string('target_grade', 45)->nullable();
            $table->integer('final_ucas_tariff_score')->nullable();
            $table->integer('predicted_ucas_tariff_score')->nullable();
            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')
                ->on('course');
            $table->foreign('student_user_id')
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
        Schema::drop('course_student');
    }

}
