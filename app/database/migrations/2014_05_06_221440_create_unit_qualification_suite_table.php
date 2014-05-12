<?php

/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitQualificationSuiteTable extends Migration {

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('unit_qualification_suite', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('unit_id', 12);
            $table->integer('number');
            $table->unsignedInteger('qualification_suite_id');
            $table->unsignedInteger('subject_sector_id');

            $table->foreign('qualification_suite_id')
                ->references('id')
                ->on('qualification_suite');

            $table->foreign('subject_sector_id')
                ->references('id')
                ->on('subject_sector');
        });
    }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
    public function down()
    {
        Schema::drop('unit_qualification_suite');
    }
}