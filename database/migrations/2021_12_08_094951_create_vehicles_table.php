<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicle_id');
            $table->string('license_plate', 100);
            $table->string('model', 255)->nullable();
            $table->string('color', 100)->nullable();
            $table->string('make', 255)->nullable();

            $table->unsignedInteger('store_id');
            $table->foreign('store_id')->references('store_id')->on('stores')->nullOnDelete();


            $table->unsignedInteger('location');
            $table->foreign('loaction')->references('state_id')->on('states')->nullOnDelete();

            $table->string('lp_country');
            $table->year('year');
            $table->string('unit', 255)->nullable();
            $table->unsignedInteger('client_id');

            $table->unsignedInteger('axle_id');
            $table->foreign('axle_id')->references('axle_id')->on('axles')->nullOnDelete();

            $table->interger('tag_id')->default(4);
            $table->foreign('tag_id')->references('tag_id')->on('tag_types')->nullOnDelete();

            $table->string('toll_tag', 50)->nullable();
            $table->string('vin_no', 20)->nullable();
            
            $table->string('asset_type', 50)->nullable();
            $table->string('equipment_id', 50)->nullable();
            $table->string('owner', 255)->nullable();
            $table->string('program', 255)->nullable();
            $table->string('purchase_type', 50)->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();

            $table->unsignedInteger('vehicle_status_id');
            $table->foreign('vehicle_status_id')->references('vehicle_status_id')->on('vehicle_statuses')->nullOnDelete();

            $table->tinyint('other_status')->nullable();
            $table->unsignedInteger('dept_id');
           // $table->timestamp('dump_date')->nullable(); replace with created_at
            $table->unsignedInteger('sub_dept_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
