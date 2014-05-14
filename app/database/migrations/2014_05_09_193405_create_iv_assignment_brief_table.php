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

class CreateIvAssignmentBriefTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iv_assignment_brief', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('assignment_id', 15)->unique();
            $table->string('assessor_user_id', 25);
            $table->string('iv_user_id', 25);
            $table->boolean('for_whole_part_unit');
            $table->boolean('q1');
            $table->text('q1_comment');
            $table->boolean('q2');
            $table->text('q2_comment');
            $table->boolean('q3');
            $table->text('q3_comment');
            $table->boolean('q4');
            $table->text('q4_comment');
            $table->boolean('approved');
            $table->text('action_required');
            $table->text('action_taken');
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
        Schema::drop('iv_assignment_brief');
    }
}