<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class CurrentController extends Controller
{
    public function index()
    {
        $users = new User;
        
        $id = Auth::user()->id;
    
        $customers = $users->find($id);  
        
        return view('current', compact('customers'));
    }
}
