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

class CreateCourseTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('code', 15);
            $table->string('name', 100);
            $table->integer('level');
            $table->string('status', 20);
            $table->string('pathway', 100)->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedInteger('subject_sector_id');
            $table->unsignedInteger('faculty_id');
            $table->unsignedInteger('course_organiser_user_id');
            $table->timestamps();

            $table->unique(array('code', 'start_date', 'end_date'));

            $table->foreign('subject_sector_id')
                ->references('id')
                ->on('subject_sector');
            $table->foreign('faculty_id')
                ->references('id')
                ->on('faculty');
            $table->foreign('course_organiser_user_id')
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
        Schema::drop('course');
    }

}
