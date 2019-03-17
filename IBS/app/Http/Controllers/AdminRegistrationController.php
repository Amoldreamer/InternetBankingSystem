<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Admin;

class AdminRegistrationController extends Controller
{
    public function insert(Request $request){
        $data = Validator::make($request->all(),[
            "name"=>"required|max:50",
            "email"=>"required|max:50",
            "password"=>"required|max:50",
            "password_confirmation"=>"required|max:50",

        ],[
            "name.required"=>"Name is required",
            "email.required"=>"Email is required",
            "password.required"=>"Password is required",
            "password_confirmation.required"=>"Password confirmaiton is required",
        ])->validate();

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        DB::table('admins')->insert([
            ['name' => $name, 'email' => $email,'password' => $password]
            ]);  
            
        return view('admin');
        
    }
        
}
