@extends('layouts.backend')

@section('title')
    Sub-Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Sub Category</h3>
                        <div class="pull-right">
                            <a href="{{ route('sub-categories.index') }}" class="btn btn-success">Back to Listing</a>
                        </div>
                    </div>
                    {!! Form::model(null, ['method' => 'post', 'route' => ['sub-categories.store']]) !!}
                        <div class="box-body">
                        
                            @include('backend.sub-category._form')
                            
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
                var subCategory = $('.sub-category');
                subCategory.each(function () {
                    if ($(this).find('.status').prop('checked') == false) {
                        $(this).find('.stat').val(0)
                    } else {
                        $(this).find('.stat').val(1)
                    }
                })
            });
            
            var subCategory = $('#remove-btn');
            if (subCategory.length == 1) {
                $('#remove-btn').hide();
            }
        })
        function add_field() {
            event.preventDefault()
            $('#remove-btn').show();
            var totalSubCategory = $('.sub-category');
            var subCategory = totalSubCategory.last();
            var subCategoryClone = subCategory.clone(false);
            subCategory[0].after(subCategoryClone[0]);
            subCategoryClone.find('.title').val(null);
            subCategoryClone.find('.status').val(1).prop('checked', true);
        }

        function remove_field(){
            event.preventDefault();
            $(event.target).parent().parent().remove();
            var subCategory = $('.sub-category')
            if (subCategory.length==1) {
                $('#remove-btn').hide();
            }
        }
    </script>
@endsection
