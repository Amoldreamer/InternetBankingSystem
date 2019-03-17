<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class FixedController extends Controller
{
    public function index()
    {
        $users = new User;
        
        $id = Auth::user()->id;
    
        $customers = $users->find($id);  
        
        return view('fixed', compact('customers'));
    }
}
