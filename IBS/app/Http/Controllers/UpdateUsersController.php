<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UpdateUsersController extends Controller
{
    public function update(){
        $transactions = DB::table('transactions')->get();
        $users = DB::table('users')->get();

        $t = count($transactions);
        $u = count($users);

        for($i=0;$i<$t-1;$i++){

        }
        for($k=0;$k<$u-1;$k++){

        }
        $NewbeneAcct = $transactions[$i]->beneAcct + 1;
        $NewTransaction_id = $users[$k]->id;
                
        if($u > $t){
             DB::table('transactions')->insert([
                ['transaction_id'=>$NewTransaction_id,'beneAcct'=>$NewbeneAcct,'name'=>$users[$k]->name,'saving'=>0,'fixed' =>0,'current' =>0]
             ]);
                    
            }
            return view('admin');
        }
}
