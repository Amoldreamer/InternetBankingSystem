@extends('layouts.bank')


@section('body')
<head>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bank.css') }}"/>

</head>
    <div id="outerbox">
        <div id="sliderbox">
                <img src="{{URL::to('/')}}/pictures/01.jpg" style="width:1400px; height: 400px">
                <img src="{{URL::to('/')}}/pictures/02.jpg" style="width:1400px; height: 400px">
                <img src="{{URL::to('/')}}/pictures/03.jpg" style="width:1400px; height: 400px">
                <img src="{{URL::to('/')}}/pictures/04.jpg" style="width:1400px; height: 400px">
                <img src="{{URL::to('/')}}/pictures/05.jpg" style="width:1400px; height: 400px">
        </div>
    </div>


@endsection