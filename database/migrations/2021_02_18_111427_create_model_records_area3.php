<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelRecordsArea3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_records_area3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_id');
            $table->string('sl_96');
            $table->string('sl_101');
            $table->string('sl_84');
            $table->string('sl_100');
            $table->string('sl_64');
            $table->string('sl_59');
            $table->string('sl_57');
            $table->string('sl_58');
            $table->string('sl_99');
            $table->string('sl_111');
            $table->string('sl_109');
            $table->string('sl_112');
            $table->string('sl_110');
            $table->string('sl_143');
            $table->string('sl_108');

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
        Schema::dropIfExists('model_records_area3');
    }
}
