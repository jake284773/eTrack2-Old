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

class AddQualificationToCourseTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course', function ($table)
        {
            $table->unsignedInteger('qualification_id');

            $table->foreign('qualification_id')
                ->references('id')
                ->on('qualification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course', function ($table)
        {
            $table->dropForeign('course_qualification_id_foreign');
        });
    }
}