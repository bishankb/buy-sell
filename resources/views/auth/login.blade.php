@extends('layouts.frontend')

@section('content')
    <div class="account_grid">
        <div class="row">
            <div class="panel panel-primary panel-login">
                <div class=" login-right">
                    <h3>Login to Buy and Sell</h3>
                    <p>If you have an account with us, please log in.</p>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group required {{ $errors->has('email') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">Email Address</span>
                            <input  id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">Password</span>
                            <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 
                             @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <a class="forgot" href="{{route('password.request')}}">Forgot Your Password?</a>
                        <div class="text-center">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                    </div>   
                    <div class=" login-left">
                        <h3>NEW USERS</h3>
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        <a class="acount-btn" href="/register">Create an Account</a>
                    </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection