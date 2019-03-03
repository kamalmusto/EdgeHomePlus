<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePirDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pir_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status')->collation('utf8_general_ci');
            $table->boolean('is_active');
            $table->integer('numBin');
            $table->foreign('id')->references('id')->on('devices')->onDelete('cascade');
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
        Schema::dropIfExists('pir_details');
    }
}
