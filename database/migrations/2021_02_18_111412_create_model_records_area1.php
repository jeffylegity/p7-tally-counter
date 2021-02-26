<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelRecordsArea1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_records_area1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_id');
            $table->string('sl_88');
            $table->string('sl_90');
            $table->string('sl_89');
            $table->string('sl_93');
            $table->string('sl_91');
            $table->string('sl_94');
            $table->string('sl_92');
            $table->string('sl_95');
            $table->string('sl_97');
            $table->string('sl_98');
            $table->string('sl_102');
            $table->string('sl_105');
            $table->string('sl_103');
            $table->string('sl_104');
            $table->string('sl_106');
            $table->string('sl_107');
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
        Schema::dropIfExists('model_records_area1');
    }
}
