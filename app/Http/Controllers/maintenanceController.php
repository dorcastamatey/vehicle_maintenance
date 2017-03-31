<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maintenanceModel;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class maintenanceController extends Controller
{
    public function addMaintenance(Request $request){
        $last=Input::get('last_date');
        $next=Input::get('next_date');
        $cost=Input::get('cost');
        $fault=Input::get('fault');
        $vehicle=Input::get('vehicle_id');

        $add =new maintenanceModel();
        $add->last_maintenance_date=$last;
        $add->next_maintenance_date=$next;
        $add->cost_of_maintenance=$cost;
        $add->fault=$fault;
        $add->vehicleDetails_id=$vehicle;
        $add->save();
        return redirect()->back()->with('message','Success');
    }
    public function viewMaintenance(){
        $maintain= maintenanceModel::all();
       // var_dump($maintain);
        return view('forms.viewMaintenance',compact('maintain'));
    }
}
