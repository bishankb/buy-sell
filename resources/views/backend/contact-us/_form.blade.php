<div class="row">
     <div class="col-md-6">
        <div class="form-group {{ $errors->has('name1') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('name1', 'Name 1', ['class' => 'control-label']) !!}

            {!! Form::text('name1', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('name1'))
                <span class="help-block">
                    <strong>{{ $errors->first('name1') }}</strong>
                </span>
            @endif
        </div>
    </div>

   <div class="col-md-6">
        <div class="form-group {{ $errors->has('name2') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('name2', 'Name 2', ['class' => 'control-label']) !!}

            {!! Form::text('name2', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('name2'))
                <span class="help-block">
                    <strong>{{ $errors->first('name2') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
     <div class="col-md-6">
        <div class="form-group {{ $errors->has('phone1') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('phone1', 'Phone Number 1', ['class' => 'control-label']) !!}

            {!! Form::text('phone1', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('phone1'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone1') }}</strong>
                </span>
            @endif
        </div>
    </div>

   <div class="col-md-6">
        <div class="form-group {{ $errors->has('phone2') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('phone2', 'Phone Number 2', ['class' => 'control-label']) !!}

            {!! Form::text('phone2', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('phone2'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone2') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('fax') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('fax', 'Fax', ['class' => 'control-label']) !!}

            {!! Form::text('fax', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('fax'))
                <span class="help-block">
                    <strong>{{ $errors->first('fax') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}

            {!! Form::email('email', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('facebook') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('facebook', 'Facebook', ['class' => 'control-label']) !!}

            {!! Form::text('facebook', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('facebook'))
                <span class="help-block">
                    <strong>{{ $errors->first('facebook') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('google_plus') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('google_plus', 'Google Plus', ['class' => 'control-label']) !!}

            {!! Form::text('google_plus', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('google_plus'))
                <span class="help-block">
                    <strong>{{ $errors->first('google_plus') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
     <div class="col-md-6">
        <div class="form-group {{ $errors->has('twitter') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('twitter', 'Twitter', ['class' => 'control-label']) !!}

            {!! Form::text('twitter', null, ['class' => 'form-control' ]) !!}

            @if ($errors->has('twitter'))
                <span class="help-block">
                    <strong>{{ $errors->first('twitter') }}</strong>
                </span>
            @endif
        </div>
    </div>  
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('map_embedded_link') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('map_embedded_link', 'Map Link (Put width= "100%" and height = "400"', ['class' => 'control-label']) !!}

            {!! Form::textarea('map_embedded_link', null, ['class' => 'form-control', 'rows' => "5" ]) !!}

            @if ($errors->has('map_embedded_link'))
                <span class="help-block">
                    <strong>{{ $errors->first('map_embedded_link') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>