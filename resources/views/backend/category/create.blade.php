@extends('layouts.backend')

@section('title')
    Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Category</h3>
                        <div class="pull-right">
                            <a href="{{ route('categories.index') }}" class="btn btn-success">Back to Listing</a>
                        </div>
                    </div>
                    {!! Form::model(null, ['method' => 'post', 'route' => ['categories.store']]) !!}
                        <div class="box-body">
                        
                            @include('backend.category._form')
                            
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

@section('backend-script')
    <script>
        $(document).ready(function () {
            $('.save').click(function () {
                var category = $('.category');
                category.each(function () {
                    if ($(this).find('.status').prop('checked') == false) {
                        $(this).find('.stat').val(0)
                    } else {
                        $(this).find('.stat').val(1)
                    }
                })
            });
            
            var bulksms = $('#remove-btn');
            if (bulksms.length == 1) {
                $('#remove-btn').hide();
            }
        })
        function add_field() {
            event.preventDefault()
            $('#remove-btn').show();
            var totalCategory = $('.category')
            var category = totalCategory.last();
            var categoryClone = category.clone(false);
            category[0].after(categoryClone[0]);
            categoryClone.find('.title').val(null);
            categoryClone.find('.status').val(1).prop('checked', true);
        }

        function remove_field(){
            event.preventDefault();
            $(event.target).parent().parent().remove();
            var category = $('.category')
            if (category.length==1) {
                $('#remove-btn').hide();
            }
        }
    </script>
@endsection
