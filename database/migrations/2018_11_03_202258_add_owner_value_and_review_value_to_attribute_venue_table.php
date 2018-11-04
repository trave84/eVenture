<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOwnerValueAndReviewValueToAttributeVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attribute_venue', function (Blueprint $table) {
            $table->integer('owner_value');
            $table->decimal('review_value', 3,1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attribute_venue', function (Blueprint $table) {
            $table->dropColumn('owner_value');
            $table->dropColumn('review_value');

        });
    }
}
