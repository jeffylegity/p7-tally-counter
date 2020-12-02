<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingActualArea2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_actual_area2', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl52_actual')->nullable();
            $table->string('sl55_actual')->nullable();
            $table->string('sl53_actual')->nullable();
            $table->string('sl60_actual')->nullable();
            $table->string('sl114_actual')->nullable();
            $table->string('sl113_actual')->nullable();
            $table->string('sl117_actual')->nullable();
            $table->string('sl122_actual')->nullable();
            $table->string('sl123_actual')->nullable();
            $table->string('sl121_actual')->nullable();
            $table->string('sl141_actual')->nullable();
            $table->string('sl139_target')->nullable();
            $table->string('sl142_target')->nullable();
            $table->string('sl140_target')->nullable();
            $table->string('sl187_target')->nullable();

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
        Schema::dropIfExists('slicing_actual_area2');
    }
}
