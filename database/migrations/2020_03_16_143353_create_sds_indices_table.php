<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdsIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sds_indices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('filename');
            $table->string('scnl_id')->index();
            $table->foreign('scnl_id')
                ->references('scnl')
                ->on('seismic_stations');
            $table->date('date')->index();
            $table->float('sampling_rate')->default(0.0);
            $table->float('min_amplitude')->default(0.0);
            $table->float('max_amplitude')->default(0.0);
            $table->float('availability')->default(0.0);
            $table->bigInteger('filesize')->default(0);
            $table->unique(['scnl_id','date']);
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
        Schema::dropIfExists('sds_indices');
    }
}
