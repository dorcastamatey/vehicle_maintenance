<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('vehicleDetails',function(Blueprint $table){
          $table->increments('vehicleDetails_id');
          $table->string('model',30);
          $table->string('reg_no',20);
          $table->string('year',10);
         
          $table->integer('vehicle_id')->unsigned()->nullable();
          $table->foreign('vehicle_id')->references('vehicleName_id')->on('vehicleName');
          $table->integer('year_id')->unsigned()->nullable();
          $table->foreign('year_id')->references('year_id')->on('year_bought');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicleDetails');
    }
}
