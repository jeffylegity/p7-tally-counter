<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area3', function (Blueprint $table) {
         $table->bigIncrements('id');
         
         $table->string('sl96_target')->nullable();
         $table->string('sl101_target')->nullable();
         $table->string('sl84_target')->nullable();
         $table->string('sl100_target')->nullable();
         $table->string('sl64_target')->nullable();
         $table->string('sl59_target')->nullable();
         $table->string('sl57_target')->nullable();
         $table->string('sl58_target')->nullable();
         $table->string('sl99_target')->nullable();
         $table->string('sl111_target')->nullable();
         $table->string('sl109_target')->nullable();
         $table->string('sl112_target')->nullable();
         $table->string('sl110_target')->nullable();
         $table->string('sl143_target')->nullable();
         $table->string('sl108_target')->nullable();

         $table->string('sl96_model')->nullable();
         $table->string('sl101_model')->nullable();
         $table->string('sl84_model')->nullable();
         $table->string('sl100_model')->nullable();
         $table->string('sl64_model')->nullable();
         $table->string('sl59_model')->nullable();
         $table->string('sl57_model')->nullable();
         $table->string('sl58_model')->nullable();
         $table->string('sl99_model')->nullable();
         $table->string('sl111_model')->nullable();
         $table->string('sl109_model')->nullable();
         $table->string('sl112_model')->nullable();
         $table->string('sl110_model')->nullable();
         $table->string('sl143_model')->nullable();
         $table->string('sl108_model')->nullable();
         
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
        Schema::dropIfExists('slicing_data_area3');
    }
}
