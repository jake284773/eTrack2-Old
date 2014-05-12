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

class CreateQualificationSuiteTable extends Migration {

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('qualification_suite', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 150);
            $table->string('framework', 4);
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('qualification_suite');
    }

}