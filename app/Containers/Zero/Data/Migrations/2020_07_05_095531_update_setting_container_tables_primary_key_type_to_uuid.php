<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateSettingContainerTablesPrimaryKeyTypeToUuid extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        // First drop `id` column, so they can be re-added with new type.
        Schema::table('settings', function (Blueprint $table) {
          $table->dropColumn('id');
        });

        // Now Add `id` columns and update foreign keys
        Schema::table('settings', function (Blueprint $table) {
          $table->uuid('id')->primary()->first();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

    }
}
