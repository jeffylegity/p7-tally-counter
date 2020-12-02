<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingActualArea3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_actual_area3', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl96_actual')->nullable();
            $table->string('sl101_actual')->nullable();
            $table->string('sl84_actual')->nullable();
            $table->string('sl100_actual')->nullable();
            $table->string('sl64_actual')->nullable();
            $table->string('sl59_actual')->nullable();
            $table->string('sl57_actual')->nullable();
            $table->string('sl58_actual')->nullable();
            $table->string('sl99_actual')->nullable();
            $table->string('sl111_actual')->nullable();
            $table->string('sl109_actual')->nullable();
            $table->string('sl112_actual')->nullable();
            $table->string('sl110_actual')->nullable();
            $table->string('sl143_actual')->nullable();
            $table->string('sl108_actual')->nullable();

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
        Schema::dropIfExists('slicing_actual_area3');
    }
}
