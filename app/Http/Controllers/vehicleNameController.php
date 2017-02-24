<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicleNameModel;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class vehicleNameController extends Controller
{
    public function addVehicle(Request $request){
        $name=Input::get('name');

        $add = new vehicleNameModel;

        $add->vehicle_name=$name;
        $add->save();


return redirect('input_forms')->with('message','Success');
    }
}
