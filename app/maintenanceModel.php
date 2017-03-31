<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maintenanceModel extends Model
{
   protected $fillable=['last_maintenance_date','next_maintenance_date',
   'cost_of_maintenance','fault','vehicleDetails_id'];
    protected $table='maintenance';

    public function vehicleDetailsId(){
        return $this->belongsTo('App\vehicleDetailsModel');
    }
}
