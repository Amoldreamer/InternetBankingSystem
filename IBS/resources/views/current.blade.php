@extends('layouts.bank')

@section('current')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bank.css') }}"/>

<div id="saving">
    <h2>Account Balance</h2>
    <h3>Balance: $
        {{$customers['current']}}<h3>
</div>
@endsection