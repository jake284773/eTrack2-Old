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

class CreateAssignmentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('number');
            $table->string('name', 60);
            $table->text('brief')->nullable();
            $table->string('status', 20);
            $table->dateTime('available_date');
            $table->dateTime('deadline');
            $table->dateTime('marking_start_date');
            $table->dateTime('marking_deadline');
            $table->timestamps();

            $table->unique(array('unit_id', 'number'));

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
        Schema::drop('assignment');
    }

}
