<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingActualArea5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_actual_area5', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl144_actual')->nullable();
            $table->string('sl148_actual')->nullable();
            $table->string('sl145_actual')->nullable();
            $table->string('sl149_actual')->nullable();
            $table->string('sl146_actual')->nullable();
            $table->string('sl150_actual')->nullable();
            $table->string('sl147_actual')->nullable();
            $table->string('sl151_actual')->nullable();
            $table->string('sl152_actual')->nullable();
            $table->string('sl153_actual')->nullable();
            $table->string('sl154_actual')->nullable();
            $table->string('sl155_actual')->nullable();

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
        Schema::dropIfExists('slicing_actual_area5');
    }
}
