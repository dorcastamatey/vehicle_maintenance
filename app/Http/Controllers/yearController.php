<?php

namespace App\Http\Controllers;
use App\yearModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use App\Http\Requests;

class yearController extends Controller
{
    public function addYear(Request $request){
   /*$year=Input::get('year');
   $add=new yearModel;
   $add->year=$year;
   $add->save();
  return redirect()->back()->with('message','Success');
   */

   $data = $request->all();
        $insert = yearModel::create($data);
        if($insert){
            return redirect()->back()->with('message','Success');
        }
        return redirect()->back()->withError('Error');

}
//    public function viewYear(){
//        $year=yearModel::all();
//
//
//return view('forms.input_forms',compact('year'));
//}
}
