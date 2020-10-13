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
        if (!Schema::hasTable('seismic_stations')) {
            Schema::create('seismic_stations', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('station');
                $table->string('channel');
                $table->string('network');
                $table->string('location');
                $table->float('latitude')->nullable();
                $table->float('longitude')->nullable();
                $table->float('elevasi')->nullable();
                $table->boolean('status')->default(0);
                $table->string('scnl')->unique();
                $table->timestamps();
            });
        }
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
