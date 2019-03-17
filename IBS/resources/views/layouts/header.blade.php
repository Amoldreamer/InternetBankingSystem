<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Banking System</title>


        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}"/>
    </head>
    <body>
            <header >
                    @if(url()->current()=='http://127.0.0.1/IBS/public' || url()->current()=='http://localhost/IBS/public' 
                    || url()->current()=='http://127.0.0.1:8000' || url()->current()=='http://localhost:8000' )
                            <div style="float:right; margin-top:40px;" >
                                    @if (Route::has('login'))
                                        <div id="welcome">
                                            @if (Auth::check())
                                                <a href="{{ url('/home') }}">Home</a>
                                            @else
                                                <a href="{{ url('/login') }}">Customer Login</a>
                                                <a href="{{ url('/admin/login') }}">Admin Login</a>
                                                <a href="{{ url('/register') }}">Register</a>
                                     @endif
                                        </div>
                                    @endif
                                </div>
                    @else 
                        @if(url()->current()!=='http://127.0.0.1/IBS/public/login' && url()->current()!='http://127.0.0.1/IBS/public/register' 
                        && url()->current()!='http://127.0.0.1/IBS/public/admin/login' && url()->current()!='http://127.0.0.1/IBS/public/admin/update_users')
                        <a style="float:right" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                        <div class="dropdown" style="float:right; margin-top:50px;">
                                @if(url()->current()=='http://127.0.0.1/IBS/public/home')
                                    <a><strong>Home</strong></a>
                                @else
                                    <a href="home">Home</a>
                                @endif
                                @if(url()->current()=='http://127.0.0.1/IBS/public/aboutusBank')
                                    <a><strong>About us</strong></a>
                                @else
                                    <a href="aboutusBank">About us</a>
                                @endif
                                @if(url()->current()=='http://127.0.0.1/IBS/public/servicesBank')
                                    <a><strong>Services</strong></a>
                                @else
                                    <a href="servicesBank">Services</a>
                                @endif
                                @if(url()->current()=='http://127.0.0.1/IBS/public/privacyBank')
                                    <a><strong>Privacy</strong></a>
                                @else
                                    <a href="privacyBank">Privacy</a>
                                @endif
                                
                                <div class="accounts">
                                    <button>Accounts</button>
                                    <ul>
                                        <li><a href="saving">Saving Account</a></li>
                                        <li><a href="fixed">Fixed Deposit Account</a></li>
                                        <li><a href="current">Current Account</a></li>
                                        <li><a href="transfer">Transfer Funds</a></li>

                                    </ul>
                                </div>
                                @if(url()->current()=='http://127.0.0.1/IBS/public/contactBank')
                                    <a><strong>Contact</strong></a>
                                @else
                                    <a href="contactBank">Contact</a>
                                @endif
                        </div>
                        @elseif(url()->current()=='http://127.0.0.1/IBS/public/admin/login' || url()->current()=='http://127.0.0.1/IBS/public/admin/update_users')
                        <a style="float:right" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                        <a style="float:right; margin-top:50px;" href="update_users">Update Users</a>
                        @endif
                     @endif
                </header>