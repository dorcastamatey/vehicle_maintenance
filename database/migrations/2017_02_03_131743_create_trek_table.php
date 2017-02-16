<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('trek',function (Blueprint $table){
        $table->increments('trek_id');
        $table->string('place_visited',100);
        $table->string('reason_for_visit',100);
        $table->string('departure_time',10);
        $table->string('arrival_time',10);
        $table->string('trek_date',10);
        $table->integer('driver_id')->unsigned()->nullable();
        $table->foreign('driver_id')->references('driver_id')->on('drivers');
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
       Schema::drop('trek');
    }
}
