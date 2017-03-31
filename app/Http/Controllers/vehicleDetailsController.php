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
       $vehicle=Input::get('vehicle_name');
       $vehicle_id=Input::get('vehicle_id');
       $year_id=Input::get('year_id');
       $year=Input::get('year_bought');

       $add= new vehicleDetailsModel;
       $add->model=$model;
       $add->reg_no=$reg_no;
       $add->vehicle_id=$vehicle_id;
       $add->vehicle_name=$vehicle;
       $add->year_id=$year_id;
       $add->year=$year;
       $add->save();
       return redirect()->back()->with('message','Success');



   }
    public function viewVehicleDetails(){
        $details=vehicleDetailsModel::all();
        //var_dump($details);
        return view('forms.viewVehicleDetails',compact('details'));
    }
}
