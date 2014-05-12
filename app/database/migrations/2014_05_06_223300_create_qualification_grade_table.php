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

class CreateQualificationGradeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_grade', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('qualification_id');
            $table->string('grade', 15);
            $table->integer('ucas_tariff_points')->nullable();
            $table->integer('credit_value_start');
            $table->integer('credit_value_end')->nullable();
            $table->timestamps();

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
        Schema::drop('qualification_grade');
    }
}