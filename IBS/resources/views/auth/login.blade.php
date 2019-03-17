
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bank.css') }}"/>
<div class="bgimg">
    <div class="centerdiv" style="font-family: Cinzel">
        <img src="pictures/user-128.png" id="profilepic">
        <h2 >Customer Login</h2>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" name="email" class="form-control" placeholder="E-mail Address" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" name="password" class="form-control" placeholder="password" required>
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>
            <div>
                <button type="submit">LOGIN</button>
            </div>
            <h2 style="margin-top:10px">OR</h2>
             <button style="margin-top:-40px"><a style="color:white;text-decoration:none;font-family:cinzel" href="{{ url('/register') }}">Register</a></button>
        </form>
    </div>
</div>
    
                
    

