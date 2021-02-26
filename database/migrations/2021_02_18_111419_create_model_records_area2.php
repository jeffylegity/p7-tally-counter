<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelRecordsArea2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_records_area2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_id');
            $table->string('sl_52');
            $table->string('sl_55');
            $table->string('sl_53');
            $table->string('sl_60');
            $table->string('sl_114');
            $table->string('sl_113');
            $table->string('sl_117');
            $table->string('sl_122');
            $table->string('sl_123');
            $table->string('sl_121');
            $table->string('sl_141');
            $table->string('sl_139');
            $table->string('sl_142');
            $table->string('sl_140');
            $table->string('sl_187');
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
        Schema::dropIfExists('model_records_area2');
    }
}
