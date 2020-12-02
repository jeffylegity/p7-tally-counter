<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingTestBlockArea4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_test_block_area4', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl56_test_block')->nullable();
            $table->string('sl136_test_block')->nullable();
            $table->string('sl63_test_block')->nullable();
            $table->string('sl135_test_block')->nullable();
            $table->string('sl116_test_block')->nullable();
            $table->string('sl134_test_block')->nullable();
            $table->string('sl120_test_block')->nullable();
            $table->string('sl133_test_block')->nullable();
            $table->string('sl119_test_block')->nullable();
            $table->string('sl132_test_block')->nullable();
            $table->string('sl131_test_block')->nullable();
            $table->string('sl137_test_block')->nullable();
            $table->string('sl138_test_block')->nullable();
            $table->string('sl192_test_block')->nullable();

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
        Schema::dropIfExists('slicing_test_block_area4');
    }
}
