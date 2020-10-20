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
            $table->uuid('tenant_id')->index('tenant_id_index');
            $table->uuidMorphs('locatable');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable()->default(null);
            $table->string('city');
            $table->string('state_id');
            $table->string('country_id');
            $table->string('post_code')->nullable()->default(null);
            $table->string('latitude')->nullable()->default(null);
            $table->string('longitude')->nullable()->default(null);
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
