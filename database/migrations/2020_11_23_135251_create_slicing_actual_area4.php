<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingActualArea4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_actual_area4', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl56_actual')->nullable();
            $table->string('sl136_actual')->nullable();
            $table->string('sl63_actual')->nullable();
            $table->string('sl135_actual')->nullable();
            $table->string('sl116_actual')->nullable();
            $table->string('sl134_actual')->nullable();
            $table->string('sl120_actual')->nullable();
            $table->string('sl133_actual')->nullable();
            $table->string('sl119_actual')->nullable();
            $table->string('sl132_actual')->nullable();
            $table->string('sl131_actual')->nullable();
            $table->string('sl137_actual')->nullable();
            $table->string('sl138_actual')->nullable();
            $table->string('sl192_actual')->nullable();

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
        Schema::dropIfExists('slicing_actual_area4');
    }
}
