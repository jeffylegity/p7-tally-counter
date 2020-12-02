<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingActualArea1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_actual_area1', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl88_actual')->nullable();
            $table->string('sl90_actual')->nullable();
            $table->string('sl89_actual')->nullable();
            $table->string('sl93_actual')->nullable();
            $table->string('sl91_actual')->nullable();
            $table->string('sl94_actual')->nullable();
            $table->string('sl92_actual')->nullable();
            $table->string('sl95_actual')->nullable();
            $table->string('sl97_actual')->nullable();
            $table->string('sl98_actual')->nullable();
            $table->string('sl102_actual')->nullable();
            $table->string('sl105_actual')->nullable();
            $table->string('sl103_actual')->nullable();
            $table->string('sl104_actual')->nullable();
            $table->string('sl106_actual')->nullable();
            $table->string('sl107_actual')->nullable();

            $table->dateTime('date_generated')->nullable();
            $table->string('shift')->nullable();
            $table->boolean('data_stored')->nullable();
            $table->string('foreign_key')->nullable();
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
        Schema::dropIfExists('slicing_actual_area1');
    }
}
