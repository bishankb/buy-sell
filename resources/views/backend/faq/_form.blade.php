<div class="form-group required {{ $errors->has('faq') ? ' has-error' : '' }} clearfix ">
    {!! Form::label('faq', 'Faq', ['class' => 'control-label']) !!}

    {!! Form::text('faq', null, ['class' => 'form-control', 'required' => 'required' ]) !!}

    @if ($errors->has('faq'))
        <span class="help-block">
            <strong>{{ $errors->first('faq') }}</strong>
        </span>
    @endif
</div>


<div class="form-group required {{ $errors->has('answer') ? ' has-error' : '' }} clearfix">
    {!! Form::label('answer', 'Answer', ['class' => 'control-label']) !!}

    {!! Form::textarea('answer', null, ['class' => 'form-control custom-textarea', 'id' => 'custom-textarea', 'required' => 'required']) !!}

    @if ($errors->has('answer'))
        <span class="help-block">
            <strong>{{ $errors->first('answer') }}</strong>
        </span>
    @endif
</div>

<div class="form-group required {{ $errors->has('status') ? ' has-error' : '' }} clearfix ">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div>
        <label class="switch">
            @if(isset($faq->status))
                <input type="checkbox" name="status" @if($faq->status == 1) checked @endif>
            @else
                <input type="checkbox" name="status" checked>
            @endif
            <span class="slider round"></span>
        </label>
    </div>
    
    @if ($errors->has('status'))
        <span class="help-block">
            <strong>{{ $errors->first('status') }}</strong>
        </span>
    @endif
</div>


