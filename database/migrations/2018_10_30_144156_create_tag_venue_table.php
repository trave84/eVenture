<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_venue', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tag_id')->unsigned();
            // $table->foreign('tag_id')->references('id')->on('tags');


            $table->integer('venue_id')->unsigned();
            // $table->foreign('venue_id')->references('id')->on('venues');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_venue');
    }
}
