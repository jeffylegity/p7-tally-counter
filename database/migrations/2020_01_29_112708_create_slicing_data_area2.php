<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area2', function (Blueprint $table) {
         $table->bigIncrements('id');

         $table->string('sl52_target')->nullable();
         $table->string('sl55_target')->nullable();
         $table->string('sl53_target')->nullable();
         $table->string('sl60_target')->nullable();
         $table->string('sl114_target')->nullable();
         $table->string('sl113_target')->nullable();
         $table->string('sl117_target')->nullable();
         $table->string('sl122_target')->nullable();
         $table->string('sl123_target')->nullable();
         $table->string('sl121_target')->nullable();
         $table->string('sl141_target')->nullable();
         $table->string('sl139_target')->nullable();
         $table->string('sl142_target')->nullable();
         $table->string('sl140_target')->nullable();
         $table->string('sl187_target')->nullable();

         $table->string('sl52_model')->nullable();
         $table->string('sl55_model')->nullable();
         $table->string('sl53_model')->nullable();
         $table->string('sl60_model')->nullable();
         $table->string('sl114_model')->nullable();
         $table->string('sl113_model')->nullable();
         $table->string('sl117_model')->nullable();
         $table->string('sl122_model')->nullable();
         $table->string('sl123_model')->nullable();
         $table->string('sl121_model')->nullable();
         $table->string('sl141_model')->nullable();
         $table->string('sl139_model')->nullable();
         $table->string('sl142_model')->nullable();
         $table->string('sl140_model')->nullable();
         $table->string('sl187_model')->nullable();

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
        Schema::dropIfExists('slicing_data_area2');
    }
}
