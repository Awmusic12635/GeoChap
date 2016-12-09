<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultUserValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->boolean('is_admin')->default(false)->change();
            $table->boolean('is_mod')->default(false)->change();
            $table->boolean('enabled')->default(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->boolean('is_admin')->change();
            $table->boolean('is_mod')->change();
            $table->boolean('enabled')->change();
        });
    }
}
