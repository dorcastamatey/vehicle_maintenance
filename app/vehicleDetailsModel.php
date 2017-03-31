<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicleDetailsModel extends Model
{
    protected $fillable=['model','reg_no','year','vehicle_name','vehicle_id','year_id'];

    protected  $table = 'vehicledetails';

    public function vehicleNameId(){
        return $this->belongsTo('App\vehicleNameModel');
    }
    public function yearModel(){
        return $this->belongsTo('App\yearModel');
    }

    public function trekId(){
        return $this->hasOne('App\trekModel');

    }
        public function maintenanceId(){

        return $this->hasOne('App\maintenanceModel');
    }
}
