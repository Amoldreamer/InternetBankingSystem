@extends('layouts.bank')

@section('transfer')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/transfer.css') }}"/>

<body>
        
    <h2 >Transfer Funds</h2>
    <form method="post" action="transfer/{{Auth::user()->id}}">
            {{ csrf_field() }}
            {{method_field("PUT")}}

            <input type="text" name="firstName" placeholder="Firstname">
            <input type="text" name="lastName" placeholder="Lastname">
            <input type="text" name="beneBank" placeholder="Beneficiary Bank Name">
            <input type="text" name="beneAcct" placeholder="Beneficiary Account Number">
            <input type="integer" name="amount" placeholder="Transfer amount">
            <input type="submit" name="transfer" value="transfer">

    </form>
    @if($errors->any())
        <ul>
          <div style="margin-left:100px; margin-top:100px;">
          @foreach($errors->all() as $error)
            <li style="list-style: none"><a style="color:red">{{$error}}</a></li>
          @endforeach
        </ul>
      </div>
      @endif
</body>
@endsection