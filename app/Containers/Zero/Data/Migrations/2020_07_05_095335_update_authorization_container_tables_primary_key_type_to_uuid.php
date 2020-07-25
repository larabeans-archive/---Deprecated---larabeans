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

        // First drop `id` reference, used as foregin key.
        Schema::table('model_has_permissions', function (Blueprint $table) {
          $table->dropForeign('model_has_permissions_permission_id_foreign');
        });

        Schema::table('role_has_permissions', function (Blueprint $table) {
          $table->dropForeign('role_has_permissions_permission_id_foreign');
        });

      Schema::table('model_has_roles', function (Blueprint $table) {
        $table->dropForeign('model_has_roles_role_id_foreign');
      });

      Schema::table('role_has_permissions', function (Blueprint $table) {
        $table->dropForeign('role_has_permissions_role_id_foreign');
      });


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
