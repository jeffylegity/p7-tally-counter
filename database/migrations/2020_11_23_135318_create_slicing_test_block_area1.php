<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingTestBlockArea1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_test_block_area1', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl88_test_block')->nullable();
            $table->string('sl90_test_block')->nullable();
            $table->string('sl89_test_block')->nullable();
            $table->string('sl93_test_block')->nullable();
            $table->string('sl91_test_block')->nullable();
            $table->string('sl94_test_block')->nullable();
            $table->string('sl92_test_block')->nullable();
            $table->string('sl95_test_block')->nullable();
            $table->string('sl97_test_block')->nullable();
            $table->string('sl98_test_block')->nullable();
            $table->string('sl102_test_block')->nullable();
            $table->string('sl105_test_block')->nullable();
            $table->string('sl103_test_block')->nullable();
            $table->string('sl104_test_block')->nullable();
            $table->string('sl106_test_block')->nullable();
            $table->string('sl107_test_block')->nullable();
            
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
        Schema::dropIfExists('slicing_test_block_area1');
    }
}
