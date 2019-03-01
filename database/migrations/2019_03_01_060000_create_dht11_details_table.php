<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDht11DetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dht11_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('temp');
            $table->string('hum');
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
        Schema::dropIfExists('dht11_details');
    }
}
