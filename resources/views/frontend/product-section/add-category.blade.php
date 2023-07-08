@extends('layouts.frontend')

@section('content') 
    <div class="panel panel-default sell-product-panel">
        <div class="text-center">
            <h3><i class="fa fa-shopping-cart" style="margin-right: 12px;"></i>Sell Your Product</h3>
        </div>
        {!! Form::model(null, ['method' => 'post', 'route' => ['product-section.redirectProductForm']]) !!}
            <div class="panel-body">
                <h5><strong>Note: </strong>Select Category and SubCategory First</h5>
                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }} clearfix">
                    {!! Form::label('category_id', 'Select Category', ['class' => 'control-label']) !!}

                        {!! Form::select('category', $categories, null,['id'=>'category_id', 'class' => 'form-control', 'placeholder' => 'Select the category']) !!}

                    @if ($errors->has('category'))
                        <span class="help-block">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('sub_category') ? ' has-error' : '' }} clearfix">
                    {!! Form::label('sub_category', 'Select Sub-Category', ['class' => 'control-label']) !!}

                        <select name="sub_category" id="sub_category_id" class="form-control" placeholder="Select the category first">
                            <option value>Select the category first</option>
                        </select>

                    @if ($errors->has('sub_category'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sub_category') }}</strong>
                        </span>
                    @endif
                </div>
                
                <button type="submit" class="btn btn-success save-btn">
                    Next
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('frontend-script')
    <script type="text/javascript">
        $('#category_id').change(function(event){
            var categoryId = event.target.value;
            var subCategoryId = $('#sub_category_id');

            $.ajax({
                url: "{{ route('product-section.getSubCategories', '') }}/" + categoryId,
                success: function (response) {
                    subCategoryId.empty();
                    if (response.sub_categories.length > 0) {
                        $.each(response.sub_categories, function (index, element) {
                            subCategoryId.append("<option value='" + element.id + "'>" + element.title + " </option>")
                        })
                    }
                    else {
                        subCategoryId.append("<option value=''>No Sub Category in this category</option>")
                    }
                },
                error: function(data){
                  alert("There was some internal error while showing the sub categories.");
                  window.location.reload(); 
                },
            });
        });
    </script>
@endsection