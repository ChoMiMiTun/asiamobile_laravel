<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStartEndDateIntoSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slides', function (Blueprint $table) {
        $table->dateTime('start')->nullable();
        $table->dateTime('end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slides', function (Blueprint $table) {
        $table->dropColumn('start');
        $table->dropColumn('end');
        });
    }
}
