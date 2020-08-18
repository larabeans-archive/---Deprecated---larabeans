<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateUserContainerTablesPrimaryKeyTypeToUuid extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        // First drop `id` reference, used as foregin key.
        Schema::table('payment_accounts', function (Blueprint $table) {
          $table->dropForeign('payment_accounts_user_id_foreign');
        });

        Schema::table('payment_transactions', function (Blueprint $table) {
          $table->dropForeign('payment_transactions_user_id_foreign');
        });

        // First drop `id` column, so they can be re-added with new type.
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('id');
        });

        // Now Add `id` columns and update foreign keys
        Schema::table('users', function (Blueprint $table) {
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
