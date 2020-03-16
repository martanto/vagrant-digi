<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeismicStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seismic_stations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('station');
            $table->string('channel');
            $table->string('network');
            $table->string('location');
            $table->string('scnl')->unique();
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
        Schema::dropIfExists('seismic_stations');
    }
}
