@extends('layouts.frontend')

@section('content')
    <div class="account_grid">
        <div class="row">
            <div class="panel panel-primary panel-login">
                <div class=" login-right">
                    <h3>
                       Activated
                    </h3>
                    <i class="fa fa-envelope fa-4x" aria-hidden="true"></i><br><br><br>
                    <p>Your account has been activated !!!</p>
                    <p>Please login to continue.</p>
                    <p>Click <a href="/login" style="color: blue">here</a> to go to login page.</p>
                </div>   
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

