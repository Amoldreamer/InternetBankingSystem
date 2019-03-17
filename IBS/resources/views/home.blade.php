@extends('layouts.bank')

@section('home')
<div class="container" align="center" style="margin-top:112px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    
                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
