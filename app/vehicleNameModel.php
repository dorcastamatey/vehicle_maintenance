<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicleNameModel extends Model
{
    protected $fillable=['vehicle_name'];
    protected $table='vehiclename';


    public function vehicleDetailsId(){
        return $this->hasOne('App\vehicleDetailsModel');
    }




}
