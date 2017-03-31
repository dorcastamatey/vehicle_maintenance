<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trekModel extends Model
{
   protected $fillabel=['place_visited','reason_for_visit','departure_time','arrival_time','trek_date'
   ,'driver_id','vehicleDetails_id'];
    protected $table='trek';

    public function vehicleDetailsId(){
        return $this->belongsTo('App\vehicleDetailsModel');
    }
    public function driverId(){
        return $this->belongsTo('App\drivers');
    }
}
