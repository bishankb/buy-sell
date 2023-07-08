@extends('layouts.user-dashboard')

@section('user-dashboard-content')
	<div class="user-dashboard-body">
	    <h5 class="header-section">
	    	Change your Password
	    </h5>
	    {!! Form::model(null, ['class' => 'lg-form-field', 'method' => 'patch', 'route' => ['my-account.updatePassword']]) !!}
	    	<div class="row">
			    <div class="col-md-12">
			        <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }} clearfix ">
			            {!! Form::label('password', 'New Password', ['class' => 'control-label']) !!}

			            {!! Form::password('password', ['class' => 'form-control', 'required' => 'required' ]) !!}

			            @if ($errors->has('password'))
			                <span class="help-block">
			                    <strong>{{ $errors->first('password') }}</strong>
			                </span>
			            @endif
			        </div>
			    </div>

			    <div class="col-md-12">
			        <div class="form-group required {{ $errors->has('password_confirmation') ? ' has-error' : '' }} clearfix ">
			            {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label']) !!}

			            {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required' ]) !!}

			            @if ($errors->has('password_confirmation'))
			                <span class="help-block">
			                    <strong>{{ $errors->first('password_confirmation') }}</strong>
			                </span>
			            @endif
			        </div>
			    </div>
			</div>
			
			<div class="text-center">
			    {!! Form::submit('Update', ['class' => 'btn btn-success save-btn']) !!}
			</div>
		{!! Form::close() !!}
	</div>
@endsection
