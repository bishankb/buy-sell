<div class="form-group required {{ $errors->has('name') ? ' has-error' : '' }} clearfix ">
    {!! Form::text('name', null, ['class' => 'form-control input-lg', 'minlength' => 2, 'required' => 'required', 'placeholder' => 'Enter your name']) !!}

    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group required {{ $errors->has('email') ? ' has-error' : '' }} clearfix ">
            {!! Form::email('email', null, ['class' => 'form-control input-lg', 'minlength' => 2, 'maxlength' => 256, 'required' => 'required', 'placeholder' => 'Enter your email']) !!}

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group required {{ $errors->has('phone') ? ' has-error' : '' }} clearfix ">
            {!! Form::text('phone', null, ['class' => 'form-control input-lg', 'minlength' => 5, 'maxlength' => 20, 'placeholder' => 'Enter your phone number' ]) !!}

            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group required {{ $errors->has('subject') ? ' has-error' : '' }} clearfix ">
            {!! Form::text('subject', null, ['class' => 'form-control input-lg', 'minlength' => 2, 'maxlength' => 256, 'required' => 'required', 'placeholder' => 'Enter subject' ]) !!}

            @if ($errors->has('subject'))
                <span class="help-block">
                    <strong>{{ $errors->first('subject') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="form-group required {{ $errors->has('message') ? ' has-error' : '' }} clearfix ">
    {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '4', 'minlength' => 5, 'maxlength' => 256, 'required' => 'required',  'placeholder' => 'Enter your message']) !!}

    @if ($errors->has('message'))
        <span class="help-block">
            <strong>{{ $errors->first('message') }}</strong>
        </span>
    @endif
</div>