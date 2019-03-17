<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use Validator;
use DB;
class TrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transfer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $transaction_id = $id;
        // $transfer=Transaction::find($transaction_id);
        // echo $transfer;
       $transfers = DB::select('select * from transactions where transaction_id=?',[$transaction_id]);

        $data = Validator::make($request->all(),[
            "firstName"=>"required|max:50",
            "lastName"=>"required|max:50",
            "beneBank"=>"required|max:255",
            "beneAcct"=>"required|max:50",
            "amount"=>"required|max:50"
        ],[
            "firstName.required"=>"First name is required",
            "lastName.required"=>"Last name is required",
            "beneBank.required"=>"Beneficiary bank is required",
            "beneAcct.required"=>"Beneficiary account is required",
            "amount.required"=>"Amount is required"
        ])->validate();


        $receiver = $request->beneAcct;

        $transferAmount = $request->amount;

        foreach($transfers as $transfer)
        $saving = $transfer->saving-$transferAmount;

        DB::update('update transactions set saving=? where transaction_id=?',[$saving,$id]);

        $balances = DB::select('select * from transactions where beneAcct=?',[$receiver]);
            foreach($balances as $balance){
                 $balance->saving = $balance->saving + $transferAmount;
            }
        DB::update('update transactions set saving=? where beneAcct=?',[$balance->saving,$receiver]);
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
