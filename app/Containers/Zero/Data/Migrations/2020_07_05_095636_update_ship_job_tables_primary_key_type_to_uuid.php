<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateShipJobTablesPrimaryKeyTypeToUuid extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        // Fixes Doctrine Error:
        // Unknown column type "uuid" requested.
        DoctrineType::addType('uuid', 'Ramsey\Uuid\Doctrine\UuidType');

        // First drop `id` column, so they can be re-added with new type.
        Schema::table('jobs', function (Blueprint $table) {
          $table->dropColumn('id');
        });

        Schema::table('failed_jobs', function (Blueprint $table) {
          $table->dropColumn('id');
        });

        // Now Add `id` columns and update foreign keys
        Schema::table('jobs', function (Blueprint $table) {
          $table->uuid('id')->primary();
        });

        Schema::table('failed_jobs', function (Blueprint $table) {
          $table->uuid('id')->primary();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

    }
}
