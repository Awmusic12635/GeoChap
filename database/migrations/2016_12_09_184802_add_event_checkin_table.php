<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventCheckinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_checkins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('caches');
            $table->timestamps();
        });

        Schema::table('checkins', function ($table) {

            $table->dropForeign(['cache']);
            $table->dropForeign(['comment']);

            $table->renameColumn('cache', 'cache_id');
            $table->renameColumn('comment', 'comment_id');
        });

        Schema::table('events', function ($table) {
            $table->dropForeign(['created_by']);
            $table->renameColumn('created_by', 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_checkins');

        Schema::table('checkins', function ($table) {

            $table->renameColumn('cache_id', 'cache');
            $table->renameColumn('comment_id', 'comment');
        });

        Schema::table('events', function ($table) {
            $table->renameColumn('user_id', 'created_by');
        });

    }
}
