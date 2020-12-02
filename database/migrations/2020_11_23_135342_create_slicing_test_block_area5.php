<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingTestBlockArea5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_test_block_area5', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl144_test_block')->nullable();
            $table->string('sl148_test_block')->nullable();
            $table->string('sl145_test_block')->nullable();
            $table->string('sl149_test_block')->nullable();
            $table->string('sl146_test_block')->nullable();
            $table->string('sl150_test_block')->nullable();
            $table->string('sl147_test_block')->nullable();
            $table->string('sl151_test_block')->nullable();
            $table->string('sl152_test_block')->nullable();
            $table->string('sl153_test_block')->nullable();
            $table->string('sl154_test_block')->nullable();
            $table->string('sl155_test_block')->nullable();

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
        Schema::dropIfExists('slicing_test_block_area5');
    }
}
