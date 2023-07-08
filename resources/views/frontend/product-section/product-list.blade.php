@extends('layouts.frontend')

@section('content')

	@include('frontend.partials.featured-products')

	<div class="women-product">
		<div class=" w_content">
			<div class="women">
				<h4>
					@isset($productViewTypeTitle)
						<div><b style="font-size: 15px;">{{ $productViewTypeTitle }}</b></div><br><br>
					@endisset
					<span>{{ count($products) }} Product(s) found</span> 
				</h4>
				<ul class="w_nav">
					<li>Sort : </li>
						@if(Route::currentRouteName() == 'product.index')
					     	<li>
					     		<a class="@if(request('status') == 'popular') active @endif" href="{{ route('product.index', ['productViewType' => request('productViewType'), 'sort_by' => 'status', 'status' => 'popular']) }}">popular</a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'recent') active @endif" href="{{ route('product.index', ['productViewType' => request('productViewType'), 'filter_by' => 'status', 'status' => 'recent']) }}">recent</a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'old') active @endif" href="{{ route('product.index', ['productViewType' => request('productViewType'), 'filter_by' => 'status', 'status' => 'old']) }}">old </a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'low-high') active @endif" href="{{ route('product.index', ['productViewType' => request('productViewType'), 'filter_by' => 'status', 'status' => 'low-high']) }}">price: Low - High </a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'high-low') active @endif" href="{{ route('product.index', ['productViewType' => request('productViewType'), 'filter_by' => 'status', 'status' => 'high-low']) }}">
					     		price: High - Low </a>
					     	</li>
					    @else 
					    	<li>
					     		<a class="@if(request('status') == 'popular') active @endif" href="{{ route(Route::currentRouteName(), array_merge(Request::all(), ['filter_by' => 'status', 'status' => 'popular'])) }}">popular</a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'recent') active @endif" href="{{ route(Route::currentRouteName(), array_merge(Request::all(), ['filter_by' => 'status', 'status' => 'recent'])) }}">recent</a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'old') active @endif" href="{{ route(Route::currentRouteName(), array_merge(Request::all(), ['filter_by' => 'status', 'status' => 'old'])) }}">old </a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'low-high') active @endif" href="{{ route(Route::currentRouteName(), array_merge(Request::all(), ['filter_by' => 'status', 'status' => 'low-high'])) }}">price: Low - High </a>
					     	</li> |
					     	<li>
					     		<a class="@if(request('status') == 'high-low') active @endif" href="{{ route(Route::currentRouteName(), array_merge(Request::all(), ['filter_by' => 'status', 'status' => 'high-low'])) }}">
					     		price: High - Low </a>
					     	</li>
					    @endif
			     </ul>
			     <div class="clearfix"> </div>	
			</div>
		</div>
		
		<div class="grid-product">
			@if(count($products) > 0)
				@foreach($products as $product)
				  	<div class="col-md-4 col-sm-4 col-xs-6 custom-col-xs">
				  		<div class="item-list-grid">
							<div class="content_box">
								<a href="{{ route('product.show', $product->slug) }}">
									<div class="left-grid-view grid-view-left">
										@if(!empty($product->images->first()))
				   		     				<img src="/storage/media/product/{{ $product->id }}/thumbnail/{{ $product->images->first()->filename }}" class="watch-right" alt=" ">
				   		     			@else
				   		     				<img src="{{ asset('images/no-image.jpg') }}" class="watch-right" alt=" ">
				   		     			@endif
				   		     			@if(\App\Product::ConditionType[$product->condition_type] == 'Brand New')
				   		     				<div class="brand-new"> </div>
				   		     			@endif
				   		     			
				   		     			@if($product->is_sold == 1)
											<div class="sold-overlay">
												<img src="{{ asset('images/soldout.png')}}">
											</div>
										@endif
									</div>
								</a>
							</div>
							<h4>
								<a href="{{ route('product.show', $product->slug) }}">
									{{ str_limit($product->title, $limit = 20, $end = '...') }}
								</a>
							</h4>
							<p>
								{{ str_limit($product->description, $limit = 100, $end = '...') }}
							</p>
							<li>
								<span class="item-price">Rs. {{ nepaliCurrencyFormat($product->price) }}</span>
								<span class="item-type">({{ \App\Product::ConditionType[$product->condition_type] }})</span>
							</li>
							<li><span class="item-seller">Seller: </span>{{ $product->createdBy->name }}</li>
							<li><span class="item-date">Posted On: </span>{{ $product->created_at->format('d M, Y') }}</li>
						</div>
					</div>
				@endforeach
				<div class="clearfix"> </div>
				<div class="text-center">
					{{ $products->appends(request()->input())->links() }}
				</div>
			@else
				<div class="panel panel-default">
					<div class="panel-body">
						Sorry !!! No Items Found
					</div>
				</div>
			@endif
		</div>
	</div>

	<div class="sub-cate">
		@if(isset($subCategories) && count($subCategories) > 0)
			<div class=" top-nav rsidebar span_1_of_left all-subcategory" style="margin-bottom: 30px;">
				<h3 class="cate">SUB CATEGORIES</h3>
				 <ul class="menu">
				 	@foreach($subCategories as $subCategory)
						<li class="item1" style="position: relative;">
							<a href="{{ route('product.index', $subCategory->slug) }}">{{ $subCategory->title }}</a>
						</li>
					@endforeach
				</ul>
			</div>
		@endisset

		<div class=" top-nav rsidebar">
			<h3 class="cate">FILTER</h3>
			{!! Form::model(null, ['method' => 'get', 'route' => ['product.filter'], 'class' => 'item-filter']) !!}
				<div class="form-group">
					<label for="title">Search:</label>
                    <input type="text" name="title" @if(Request('title')) value="{{ Request('title') }}" @elseif(Request('search_product')) value="{{ Request('search_product') }}" @endif class="form-control" placeholder="Title">
				</div>

				<div class="form-group">
					<label for="category">Category:</label>
                    <select name="category" class="form-control">
                  		<option value>Select Category</option>
                    	@foreach($categories as $category)
                    		@if(Request('category'))
                                <option value = "{{ $category->slug}}" @if(Request('category') == $category->slug) selected @endif>{{ $category->title }}</option>
                            @else
                    			<option value="{{ $category->slug}}">{{ $category->title }}</option>   
                            @endif
                    	@endforeach
                    </select>
				</div>
				<div class="form-group">
					<label for="sel1">Location:</label>
					 <select name="city" class="form-control">
                    	<option value>Select City</option>
                    	@foreach($cities as $city)
                    		@if(Request('city'))
                                <option value = "{{ $city->name}}" @if(Request('city') == $city->name) selected @endif>{{ $city->name }}</option>
                            @else
                    			<option value="{{ $city->name}}">{{ $city->name }}</option>   
                            @endif
                    	@endforeach
                    </select>
				</div>
				<div class="form-group">
					<label for="sel1">Condition:</label>
					{!! Form::select('condition_type', $condition_types, null,['id'=>'condition_type', 'class' => 'form-control', 'placeholder' => 'Select the condition']) !!}
				</div>
				<div class="form-group">
					<label for="sel1">Price:</label>
					<div class="price-range">
						{!! Form::text('min_price', null, ['class' => 'form-control', 'placeholder' => 'Min Price']) !!}
						{!! Form::text('max_price', null, ['class' => 'form-control max-price', 'placeholder' => 'Max Price']) !!}
					</div>
				</div>

				<div class="form-group">
					<label class="checkbox-inline">
						<input type="checkbox" name="sold_product" @if(Request('sold_product') == 'on') checked @endif>Include Sold Products
					</label>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-danger filter-button">Filter</button>
				</div>
			{!! Form::close() !!}
		</div>
			
		<h5>
		    <a class="view-all all-product" href="{{ route('product.index', 'all-products') }}">VIEW ALL PRODUCTS<span> </span></a>
		</h5>
	</div>
@endsection

@section('frontend-script')
	$(document).ready(function(){
		$("#featuredProductSlider").flexisel({
			visibleItems: 5,
			animationSpeed: 400,
			infinite: true,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			visibleItems: 2
	    		}, 
	    		landscape: { 
	    			changePoint:640,
	    			visibleItems: 3
	    		},
	    		tablet: { 
	    			changePoint:768,
	    			visibleItems: 4
	    		}
	    	}
	    });
	});
@endsection
