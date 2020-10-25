<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountryTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->uuid('id')->primary('id');
            $table->string('name');
            $table->string('alpha2', 2);
            $table->string('alpha3', 3);
            $table->string('num', 3);
            $table->string('isd');
            $table->string('continent');
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
