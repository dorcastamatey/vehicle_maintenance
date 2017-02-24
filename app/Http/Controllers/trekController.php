<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trekModel;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class trekController extends Controller
{
    public function addTrek(Request $request){
        $place=Input::get('place_visited');
        $departure=Input::get('time_departed');
        $arrival=Input::get('time_arrived');
        $reason=Input::get('reason');
        $trekDate=Input::get('date');
        $driver=Input::get('id');
        $vehicle=Input::get('Vid');

        $add= new trekModel();
        $add->place_visited=$place;
        $add->reason_for_visit=$reason;
        $add->departure_time=$departure;
        $add->arrival_time=$arrival;
        $add->trek_date=$trekDate;
        $add->driver_id=$driver;
        $add->vehicleDetails_id=$vehicle;
        $add->save();
        return redirect()->back()->with('message','Success');
    }
}
