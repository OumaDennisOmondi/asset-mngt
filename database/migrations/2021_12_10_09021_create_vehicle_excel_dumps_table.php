<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleExcelDumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_excel_dumps', function (Blueprint $table) {
            $table->increments('vehicle_excel_dump_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('uploaded_by');
            $table->integer('total_rows');
            $table->integer('first_id');
            $table->integer('last_id');
            $table->string('filename');
            $table->unsignedInteger('vehicle_dept');
            $table->unsignedInteger('vehicle_sub_dept');
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
        Schema::dropIfExists('vehicle_excel_dumps');
    }
}
