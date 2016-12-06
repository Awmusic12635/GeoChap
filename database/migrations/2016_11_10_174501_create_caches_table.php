<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lat');
            $table->string('long');
            $table->string('size');
            $table->enum('type',['traditional']);
            $table->string('name');
            $table->enum('status',['damaged','missing','good'])->default('good');
            $table->string('short_description');
            $table->mediumText('long_description');
            $table->boolean('approved')->default(false);
            $table->integer('created_by');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('caches');
    }
}
