<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicleNameModel;
use App\yearModel;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class vehicleNameController extends Controller
{
    public function addVehicleName(Request $request){
        $name=Input::get('name');

        $add = new vehicleNameModel;

        $add->vehicle_name=$name;
        $add->save();


//return redirect('input_forms')->with('message','Success');
return redirect()->back()->with('message','Success');
    }

    public function viewVehicleName(){
        $vehicle= vehicleNameModel::all();
        $year=yearModel::all();


//       var_dump($vehicle);

   return view('/forms.input_forms', compact('vehicle','year'));

}
}
