<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area4', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl56_target')->nullable();
            $table->string('sl136_target')->nullable();
            $table->string('sl63_target')->nullable();
            $table->string('sl135_target')->nullable();
            $table->string('sl116_target')->nullable();
            $table->string('sl134_target')->nullable();
            $table->string('sl120_target')->nullable();
            $table->string('sl133_target')->nullable();
            $table->string('sl119_target')->nullable();
            $table->string('sl132_target')->nullable();
            $table->string('sl131_target')->nullable();
            $table->string('sl137_target')->nullable();
            $table->string('sl138_target')->nullable();
            $table->string('sl192_target')->nullable();

            $table->string('sl56_model')->nullable();
            $table->string('sl136_model')->nullable();
            $table->string('sl63_model')->nullable();
            $table->string('sl135_model')->nullable();
            $table->string('sl116_model')->nullable();
            $table->string('sl134_model')->nullable();
            $table->string('sl120_model')->nullable();
            $table->string('sl133_model')->nullable();
            $table->string('sl119_model')->nullable();
            $table->string('sl132_model')->nullable();
            $table->string('sl131_model')->nullable();
            $table->string('sl137_model')->nullable();
            $table->string('sl138_model')->nullable();
            $table->string('sl192_model')->nullable();
            
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
        Schema::dropIfExists('slicing_data_area4');
    }
}
