<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ignition2', function($table) {
            $table->boolean('tmpflag')->default(1);
        });
        Schema::table('geo_declare2', function($table) {
            $table->boolean('tmpflag')->default(1);
        });
        Schema::table('button_declare2', function($table) {
            $table->boolean('tmpflag')->default(1);
        });
        Schema::table('loc_relay2', function($table) {
            $table->boolean('tmpflag')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
