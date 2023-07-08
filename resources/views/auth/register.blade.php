@extends('layouts.frontend')

@section('content')
    <div class="account_grid">
        <div class="row">
            <div class="panel panel-primary panel-login">
                <div class=" login-right">
                    <h3>Join us for Buy and Sell</h3>
                    <p>Please fill your form.</p>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group required {{ $errors->has('name') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">Full Name</span>
                            <input  id="name" type="text" placeholder="Email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

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

                        <div class="form-group required {{ $errors->has('password_confirmation') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">Confirm Password</span>
                            <input id="password_confirmation" type="password" placeholder="Password" name="password_confirmation" class="form-control" required> 
                        </div>

                        <div class="form-group {{ $errors->has('phone1') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">Phone Number</span>
                            <input  id="phone1" type="text" placeholder="Phone Number" class="form-control{{ $errors->has('phone1') ? ' is-invalid' : '' }}" name="phone1" value="{{ old('phone1') }}">
                            @if ($errors->has('phone1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone1') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group required {{ $errors->has('address') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">Address</span>
                            <input  id="address" type="text" placeholder="Address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group required {{ $errors->has('city') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">City</span>
                            <select name = "city" class="form-control">
                                <option disabled selected>Please select an option</option>
                                @foreach($cities as $city)
                                    @if(old('city') != null)
                                        <option value = "{{ $city->id }}" @if($city->id == old('city')) selected @endif>
                                            {{$city->name}}
                                        </option>
                                    @else
                                        <option value = "{{ $city->id }}">
                                            {{$city->name}}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>

                         <div class="form-group required {{ $errors->has('country') ? ' has-error' : '' }} clearfix ">
                            <span class="login-field control-label">Country</span>
                            <select name = "country" class="form-control">
                                <option disabled selected>Please select an option</option>
                                @foreach($countries as $country)
                                    @if(old('country') != null)
                                        <option value = "{{ $country->id }}" @if($country->id == old('country')) selected @endif>
                                            {{$country->name}}
                                        </option>
                                    @else
                                        <option value = "{{ $country->id }}">
                                            {{$country->name}}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('country'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                    </div>   
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection