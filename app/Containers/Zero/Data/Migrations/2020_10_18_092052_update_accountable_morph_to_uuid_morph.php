<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateAccountableMorphToUuidMorph extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('payment_accounts', function (Blueprint $table) {
            $table->dropMorphs('accountable');
        });

        Schema::table('payment_accounts', function (Blueprint $table) {
            // Not using morph, as this doesn't supports after modifier
            // $table->uuidMorphs('accountable');

            // Manual implementation of morph
            $table->string("accountable_type")->after('tenant_id');
            $table->uuid("accountable_id")->after('tenant_id');
            $table->index(["accountable_id", "accountable_type"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

    }
}
