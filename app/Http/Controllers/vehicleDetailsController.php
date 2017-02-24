<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicleDetailsModel;
use App\Http\Requests;

use Illuminate\Support\Facades\Input;

class vehicleDetailsController extends Controller
{
   public function addVehicleDetails(Request $request){
       $model=Input::get('model_name');
       $reg_no=Input::get('Registration_number');
       $vehicle=Input::get('vehilce_name');
       $year=Input::get('year_bought');

       $add= new vehicleDetailsModel;
       $add->model=$model;
       $add->reg_no=$reg_no;
       $add->vehicle_id=$vehicle;
       $add->year_id=$year;
       $add->save();
       return redirect()->back()->with('message','Success');



   }
}
