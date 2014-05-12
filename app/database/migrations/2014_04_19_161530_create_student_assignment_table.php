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

class CreateStudentAssignmentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_assignment', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('assignment_id');
            $table->unsignedInteger('student_user_id');
            $table->dateTime('special_deadline')->nullable();
            $table->dateTime('submission_date')->nullable();
            $table->timestamps();

            $table->foreign('assignment_id')
                ->references('id')
                ->on('assignment');
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
        Schema::drop('student_assignment');
    }

}
