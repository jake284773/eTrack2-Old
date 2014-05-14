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

class CreateUnitTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function(Blueprint $table) {
            $table->increments('id');
            $table->string("code", 12)->unique();
            $table->string("name", 100);
            $table->integer("credit_value");
            $table->integer("glh");
            $table->integer("level");
            $table->unsignedInteger('subject_sector_id');
            $table->timestamps();

            $table->foreign("subject_sector_id")
                ->references("id")
                ->on("subject_sector");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('unit');
    }

}
