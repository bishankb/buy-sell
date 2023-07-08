@extends('layouts.backend')

@section('title')
    Faq
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Faq</h3>
                        <div class="pull-right">
                            <a href="{{ route('faqs.index') }}" class="btn btn-success">Back to Listing</a>
                        </div>
                    </div>
                    {!! Form::model($faq, ['method' => 'patch', 'route' => ['faqs.update', $faq->id]]) !!}
                        <div class="box-body">
                        
                            @include('backend.faq._form')
                            
                        </div>
                        <div class="box-footer">
                            {!! Form::submit('Save', ['class' => 'btn btn-success save']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
