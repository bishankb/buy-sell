@extends('layouts.frontend')

@section('content')
    <div class="panel panel-default sell-product-panel">
        <div class="text-center">
            <h3><i class="fa fa-shopping-cart" style="margin-right: 12px;"></i>Sell Your Product</h3>
        </div>
            {!! Form::model(null, ['method' => 'post', 'route' => ['product-section.store'], 'files' => 'true']) !!}
                <div class="panel-body">
                    <h5><strong>Note: </strong>
                            Category: 
                            @if(isset($sub_category)) 
                                {{ $sub_category->category->title }} >  {{ $sub_category->title }}
                            @elseif(isset($category))
                                {{ $category->title }}
                            @endif
                    </h5>                        
                    
                    @include('frontend.product-section._form')
                    
                    <button type="submit" class="btn btn-success save-btn">
                        Next
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection