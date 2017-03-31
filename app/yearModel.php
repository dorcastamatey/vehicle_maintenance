<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yearModel extends Model
{
    protected $fillable=['year'];
    protected $table='year_bought';

    public function yearId(){
        return $this->hasOne('App\vehicleDetailsModel');
    }
}
