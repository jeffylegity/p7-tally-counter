<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingTestBlockArea2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_test_block_area2', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl52_test_block')->nullable();
            $table->string('sl55_test_block')->nullable();
            $table->string('sl53_test_block')->nullable();
            $table->string('sl60_test_block')->nullable();
            $table->string('sl114_test_block')->nullable();
            $table->string('sl113_test_block')->nullable();
            $table->string('sl117_test_block')->nullable();
            $table->string('sl122_test_block')->nullable();
            $table->string('sl123_test_block')->nullable();
            $table->string('sl121_test_block')->nullable();
            $table->string('sl141_test_block')->nullable();
            $table->string('sl139_test_block')->nullable();
            $table->string('sl142_test_block')->nullable();
            $table->string('sl140_test_block')->nullable();
            $table->string('sl187_test_block')->nullable();

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
        Schema::dropIfExists('slicing_test_block_area2');
    }
}
