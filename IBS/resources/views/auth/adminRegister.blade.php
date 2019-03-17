<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bank.css') }}"/>
<div class="bgimg">
    <div class="centerdiv" style="font-family: Cinzel">
        <img src="pictures/user-128.png" id="profilepic">
        <h2 >Admin Register</h2>
        <form class="form-horizontal" method="POST" action="adminRegister">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <br>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <br>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                    <br>
                    <div class="form-group">

                                <input id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation" required>
                        </div>
            <br>
            <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                </div>
          
        </form>
    </div>
</div>