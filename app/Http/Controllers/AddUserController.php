<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Http\Requests\AddUserRequest;
use Illuminate\Support\Facades\Input;
class AddUserController extends Controller
{
    public function addUser(AddUserRequest $request){

        $name = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');


        $add =new User();
        $add->name=$name;
        $add->email=$email;
        $add->password=bcrypt($password);
        $add->save();
        return redirect()->back()->with('message','Success');

    }
}
