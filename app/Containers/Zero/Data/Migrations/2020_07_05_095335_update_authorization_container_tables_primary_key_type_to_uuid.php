<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateAuthorizationContainerTablesPrimaryKeyTypeToUuid extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        $foreignKeys = config('permission.foreign_keys');

        // Fixes Doctrine Error:
        // Unknown column type "uuid" requested.
        DoctrineType::addType('uuid', 'Ramsey\Uuid\Doctrine\UuidType');

        // First drop `id` column, so they can be re-added with new type.
        Schema::table($tableNames['permissions'], function (Blueprint $table) {
          $table->dropColumn('id');
        });

        Schema::table($tableNames['roles'], function (Blueprint $table) {
          $table->dropColumn('id');
        });


        // Now Add `id` columns and update foreign keys
        Schema::table($tableNames['permissions'], function (Blueprint $table) {
          $table->uuid('id')->primary();
        });

        Schema::table($tableNames['roles'], function (Blueprint $table) {
          $table->uuid('id')->primary();
        });

        Schema::table($tableNames['model_has_permissions'], function (Blueprint $table) {
          $table->uuid('permission_id')->change();
        });

        Schema::table($tableNames['model_has_roles'], function (Blueprint $table) {
          $table->uuid('role_id')->change();
          $table->uuid('model_id')->change();
        });

        Schema::table($tableNames['role_has_permissions'], function (Blueprint $table) {
          $table->uuid('permission_id')->change();
          $table->uuid('role_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

    }
}
