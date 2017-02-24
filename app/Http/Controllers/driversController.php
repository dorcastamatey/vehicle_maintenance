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
        $nerds = Nerd::all();

        // load the view and pass the nerds
        return View::make('nerds.index')
            ->with('nerds', $nerds);
        return view('nerds.index',compact('nerds'));
    }
}
