
{{-- <div class="row" align="center" style="margin-top:80px">


            <div class="panel panel-default">
                <div class="panel-heading">Admin Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
       
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bank.css') }}"/>

<div class="bgimg">
    <div class="centerdiv" style="font-family: Cinzel">

        <h2 >Admin Login</h2>
        <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                {{ csrf_field() }}

            <div style="margin-top:100px" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
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
           
        </form>
    </div>
</div>
    
                
    

