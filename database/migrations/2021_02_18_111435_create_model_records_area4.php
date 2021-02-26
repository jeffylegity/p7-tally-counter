<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelRecordsArea4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_records_area4', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_id');
            $table->string('sl_56');
            $table->string('sl_136');
            $table->string('sl_63');
            $table->string('sl_135');
            $table->string('sl_116');
            $table->string('sl_134');
            $table->string('sl_120');
            $table->string('sl_133');
            $table->string('sl_119');
            $table->string('sl_132');
            $table->string('sl_131');
            $table->string('sl_137');
            $table->string('sl_138');
            $table->string('sl_192');
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
        Schema::dropIfExists('model_records_area4');
    }
}
