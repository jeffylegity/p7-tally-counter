<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area5', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl144_target')->nullable();
            $table->string('sl148_target')->nullable();
            $table->string('sl145_target')->nullable();
            $table->string('sl149_target')->nullable();
            $table->string('sl146_target')->nullable();
            $table->string('sl150_target')->nullable();
            $table->string('sl147_target')->nullable();
            $table->string('sl151_target')->nullable();
            $table->string('sl152_target')->nullable();
            $table->string('sl153_target')->nullable();
            $table->string('sl154_target')->nullable();
            $table->string('sl155_target')->nullable();

            $table->string('sl144_model')->nullable();
            $table->string('sl148_model')->nullable();
            $table->string('sl145_model')->nullable();
            $table->string('sl149_model')->nullable();
            $table->string('sl146_model')->nullable();
            $table->string('sl150_model')->nullable();
            $table->string('sl147_model')->nullable();
            $table->string('sl151_model')->nullable();
            $table->string('sl152_model')->nullable();
            $table->string('sl153_model')->nullable();
            $table->string('sl154_model')->nullable();
            $table->string('sl155_model')->nullable();
            
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
        Schema::dropIfExists('slicing_data_area5');
    }
}
