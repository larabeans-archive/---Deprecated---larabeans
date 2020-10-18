<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {

            $table->uuid('id')->primary('id');
            $table->uuidMorphs('locatable');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('state_id');
            $table->string('country_id');
            $table->string('post_code');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
