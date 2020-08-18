<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePaymentContainerTablesPrimaryKeyTypeToUuid extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        // First drop `id` column, so they can be re-added with new type.
        Schema::table('payment_accounts', function (Blueprint $table) {
          $table->dropColumn('id');
        });

        Schema::table('payment_transactions', function (Blueprint $table) {
          $table->dropColumn('id');
        });

        // Now Add `id` columns and update foreign keys
        Schema::table('payment_accounts', function (Blueprint $table) {
          $table->uuid('id')->primary()->first();
          $table->uuid('user_id')->change();
        });

        Schema::table('payment_transactions', function (Blueprint $table) {
          $table->uuid('id')->primary()->first();
          $table->uuid('user_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

    }
}
