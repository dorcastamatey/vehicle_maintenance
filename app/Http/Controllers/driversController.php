<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drivers;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class driversController extends Controller
{
    public function addDriver(Request $request){
        $firstName =Input::get('first_name');
        $lastName=Input::get('last_name');

        $add = new drivers;
        $add->first_name=$firstName;
        $add->last_name=$lastName;
        $add->save();
        return redirect()->back()->with('message','Success');

    }
    public function displayDriver(){
        //connect to model to get all drivers

      // var_dump($driver);
        $driver = drivers::all();


//        return View::make('forms.viewDriver')
//            ->with('driver', $driver);
        //connect to the form to display all drivers
       return view('forms.viewDriver',compact('driver'));
    }


    public function editDriver($id){
//        $edit=drivers::find($id);

        //connect to the form and edit it
        //$driver=drivers::find($id);
       $driver=drivers::where('driver_id',$id)->first();
        //return $driver;

      return view('forms.edit',compact('driver'));
    }
    public function updateDriver(Request $request,$id){
        $driver=drivers::where('driver_id',$id)->first();
        //drivers::find($id)->updateDriver($request->all());
        $driver->updateDriver($request->all());
        return redirect('/forms/viewDriver');



    }
}
