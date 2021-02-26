<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelRecordsArea5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_records_area5', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_id');
            $table->string('sl_144');
            $table->string('sl_148');
            $table->string('sl_145');
            $table->string('sl_149');
            $table->string('sl_146');
            $table->string('sl_150');
            $table->string('sl_147');
            $table->string('sl_151');
            $table->string('sl_152');
            $table->string('sl_153');
            $table->string('sl_154');
            $table->string('sl_155');
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
        Schema::dropIfExists('model_records_area5');
    }
}
