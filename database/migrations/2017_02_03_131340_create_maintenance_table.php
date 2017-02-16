<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('maintenance',function (Blueprint $table){
          $table->increments('main_id');

          $table->string('last_maintenance_date',10);
          $table->string('next_maintenance_date',10);
          $table->string('cost_of_maintenance',30);
          $table->string('fault',100);
           $table->integer('vehicleDetails_id')->unsigned()->nullable();
          $table->foreign('vehicleDetails_id')->references('vehicleDetails_id')->on('vehicleDetails');


       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('maintenance');
    }
}
