<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingTestBlockArea3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_test_block_area3', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl96_test_block')->nullable();
            $table->string('sl101_test_block')->nullable();
            $table->string('sl84_test_block')->nullable();
            $table->string('sl100_test_block')->nullable();
            $table->string('sl64_test_block')->nullable();
            $table->string('sl59_test_block')->nullable();
            $table->string('sl57_test_block')->nullable();
            $table->string('sl58_test_block')->nullable();
            $table->string('sl99_test_block')->nullable();
            $table->string('sl111_test_block')->nullable();
            $table->string('sl109_test_block')->nullable();
            $table->string('sl112_test_block')->nullable();
            $table->string('sl110_test_block')->nullable();
            $table->string('sl143_test_block')->nullable();
            $table->string('sl108_test_block')->nullable();

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
        Schema::dropIfExists('slicing_test_block_area3');
    }
}
