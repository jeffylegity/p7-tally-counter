<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area1', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl88_target')->nullable();
            $table->string('sl90_target')->nullable();
            $table->string('sl89_target')->nullable();
            $table->string('sl93_target')->nullable();
            $table->string('sl91_target')->nullable();
            $table->string('sl94_target')->nullable();
            $table->string('sl92_target')->nullable();
            $table->string('sl95_target')->nullable();
            $table->string('sl97_target')->nullable();
            $table->string('sl98_target')->nullable();
            $table->string('sl102_target')->nullable();
            $table->string('sl105_target')->nullable();
            $table->string('sl103_target')->nullable();
            $table->string('sl104_target')->nullable();
            $table->string('sl106_target')->nullable();
            $table->string('sl107_target')->nullable();

            $table->string('sl88_model')->nullable();
            $table->string('sl90_model')->nullable();
            $table->string('sl89_model')->nullable();
            $table->string('sl93_model')->nullable();
            $table->string('sl91_model')->nullable();
            $table->string('sl94_model')->nullable();
            $table->string('sl92_model')->nullable();
            $table->string('sl95_model')->nullable();
            $table->string('sl97_model')->nullable();
            $table->string('sl98_model')->nullable();
            $table->string('sl102_model')->nullable();
            $table->string('sl105_model')->nullable();
            $table->string('sl103_model')->nullable();
            $table->string('sl104_model')->nullable();
            $table->string('sl106_model')->nullable();
            $table->string('sl107_model')->nullable();

            $table->dateTime('date_generated')->nullable();
            $table->string('shift')->nullable();
            $table->boolean('data_stored')->nullable();
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
        Schema::dropIfExists('slicing_data_area1');
    }
}
