<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {

            $table->uuid('id')->primary('id');
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });

        // Store Owner: Pivot table for store-owner relationship handling
        // TODO-SAMK: Latter on planed to use customized pivot table and relationship model
        // Ref:: https://laravel.com/docs/7.x/eloquent-relationships#defining-custom-intermediate-table-models
        Schema::create('store_owner', function (Blueprint $table) {

            $table->uuid('store_id');
            $table->uuid('user_id');
            // $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');;
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;

            $table->timestamps();
            $table->softDeletes();
        });

        // Store Branches
        Schema::create('store_branches', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->uuid('store_id');
            // $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');;
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });

        // Store Locations (Through Branches)
        Schema::create('store_locations', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->uuid('branch_id');
            // $table->foreign('branch_id')->references('id')->on('store_branches')->onDelete('cascade');;
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('zipcode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('landline_no1');
            $table->string('landline_no2');

            $table->timestamps();
            $table->softDeletes();
        });

        // Store Departments
        Schema::create('store_departments', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->uuid('store_id');
            // $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');;
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('stores');
        Schema::dropIfExists('store_owner');
        Schema::dropIfExists('store_branches');
        Schema::dropIfExists('store_locations');
        Schema::dropIfExists('store_departments');

    }
}
