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

class CreateCriteriaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('code', 4);
            $table->string('type', 15);
            $table->unsignedInteger('unit_id');
            $table->timestamps();

            $table->foreign('unit_id')
                ->references('id')
                ->on('unit');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('criteria');
    }

}
