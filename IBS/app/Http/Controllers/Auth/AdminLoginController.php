<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Admin;
use DB;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' =>['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        //Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $email = $request->email;

        // //Attempt to log the user in
        // if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
        //     //if successful, then redirect to their intended location
        //     return redirect()->intended(route('admin.dashboard'));
        // }

        $petani = DB::table('admins')->where('email','=',$email)->get();
            foreach($petani as $petan)

            if($request->password == $petan->password)
            return view('admin');

        //if unsuccessful, then redirect back to the login with the form data
        // return redirect()->back()->withInput ($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
