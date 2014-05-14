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

class CreateQualificationTable extends Migration {

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('qualification', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 150);
            $table->unsignedInteger('qualification_suite_id');
            $table->integer('level');
            $table->integer('glh');
            $table->integer('credit_value')->nullable();
            $table->timestamps();

            $table->unique(array('title', 'qualification_suite_id'));

            $table->foreign('qualification_suite_id')
                ->references('id')
                ->on('qualification_suite');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('qualification');
    }

}