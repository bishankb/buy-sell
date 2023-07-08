@extends('layouts.frontend')

@section('content')

	@include('frontend.partials.featured-products')
	
	<div class=" single_top">
	  	<div class="single_grid">
			<div class="col-md-4 col-sm-6 col-xs-12 image-slider">
				@if(count($product->images) > 0)
					<ul id="etalage">
						@foreach($product->images as $image)
							<li>
								<a href="/storage/media/product/{{ $product->id }}/{{ $image->filename }}" data-width="2048" data-height="1365">
									<img class="etalage_thumb_image" src="/storage/media/product/{{ $product->id }}/{{ $image->filename }}" alt=" "/>

									<img class="etalage_source_image" src="/storage/media/product/{{ $product->id }}/{{ $image->filename }}" alt=" "/>

								</a>
							</li>
						@endforeach
					</ul>
				@else 
					<img src="{{ asset('images/no-image.jpg') }}" alt=" " class="img-responsive" style="margin-bottom: 55px;" />
				@endif
				<div class="clearfix"> </div>		
			</div> 
			
			<div class="col-md-8 col-sm-6 col-xs-12 product-info">
				@if($product->is_sold == 1)
					<div class="product-general-sold">
						<h3>Sorry!!! This product has already been sold.</h3>
					</div>
				@endif
				<div class="cart-a">
					<div class="product-name">{{ $product->title }}</div>
					<h5 class="now-get get-cart-in">
						<span class="label label-danger">Total Views: {{ $product->getViews() }}</span>
					</h5>

					<div class="clearfix"></div>
				</div>
				<div class="cart-b">
					<div class="left-n ">Rs. {{ nepaliCurrencyFormat($product->price) }} @if($product->is_negotiable == 1) <span style="font-size: 18px;">(Negotiable)</span> @endif</div>
					<h5 class="now-get get-cart-in">
						<span class="label label-success">{{ \App\Product::ConditionType[$product->condition_type] }}</span>
					</h5>

					<div class="clearfix"></div>
				</div>
				<div class="row product-general">
					<div class="col-md-6">
						<div class="product-detail">
							<h6>General Detail</h6>
							@isset($product->category)
								<li>
									<i class="fa fa-list"></i>
									<span class="detail-title">Category:</span> {{ $product->category->title }}
								</li>
							@endisset
							@isset($product->subCategory)
								<li>
									<i class="fa fa-list-alt"></i>
									<span class="detail-title">SubCategory:</span> {{ $product->subCategory->title }}
								</li>
							@endisset
							<li>
								<i class="fa fa-clock-o"></i>
								<span class="detail-title">Posted On:</span> {{ $product->created_at->format('d M, Y') }}
							</li>
							<li>
								<i class="fa fa-times-circle-o"></i>
								<span class="detail-title">Expried On:</span>
								@if($product->expiry_period < Carbon\Carbon::now())
									<span style="color: red">Expired</span>
								@else
									{{$product->expiry_period->format('d M, Y')}}
								@endif  
							</li>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-detail">
							<h6>Seller Detail</h6>
							<li>
								<i class="fa fa-user"></i>										
								<span class="detail-title">Seller Name: </span> {{ $product->createdBy->name }}
							</li>
							@if(isset($product->createdBy->profile->address) || isset($product->createdBy->profile->city) || isset($product->createdBy->profile->country))
								<li>
									<i class="fa fa-location-arrow"></i>										
									<span class="detail-title">Location: </span>{{ $product->createdBy->profile->address }}, {{ $product->createdBy->profile->city->name }}, {{ $product->createdBy->profile->country->name }}
								</li>
							@endif
							<li>
								<i class="fa fa-envelope"></i>										
								<span class="detail-title">Email:</span> {{ $product->createdBy->email }}
							</li>
							@isset($product->createdBy->profile->phone1)
								<li>
									<i class="fa fa-phone"></i>										
									<span class="detail-title">Phone:</span> {{ $product->createdBy->profile->phone1 }}
								</li>
							@endisset
							@isset($product->createdBy->profile->phone2)
								<li>
									<i class="fa fa-phone"></i>										
									<span class="detail-title">Secondary Phone:</span> {{ $product->createdBy->profile->phone2 }}
								</li>
							@endisset
						</div>
					</div>
				</div>
				<br>
				<div class="product-general-description">
					<h6>Description:</h6>
					<p>{!! $product->description !!}</p>
				</div>
				<br>
				
				<div class="share">
					<h6>Share Product :</h6>
					<ul class="share_nav">
						<li>
							<a href="https://www.facebook.com/sharer/sharer.php?u=obsnepal.com/view-product/{{$product->slug}}&display=popup" title="Share on Facebook" target="__blank">
								<img src="{{ asset('images/facebook.png') }}" title="facebook">
							</a>
						</li>
						<li>
							<a href="https://twitter.com/intent/tweet?url={{ Request::fullUrl() }}" title="Share on Twitter" target="__blank">
								<img src="{{ asset('images/twitter.png') }}" title="Twiiter">
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/share?url={{ Request::fullUrl() }}" title="Share on Google+" target="__blank">
								<img src="{{ asset('images/gpluse.png') }}" title="Google+">
							</a>
						</li>
					</ul>
				</div>
			</div>
	  	    <div class="clearfix"> </div>
	  	</div>
	  	<br>

	  	<div class="row">
	      	<div class="col-md-12">
	          	<div class="panel panel-primary panel-single">
				    <div class="panel-heading">
				    	<h5><i class="fa fa-money"></i>Pricing Detail</h5>
				    </div>
				     <div class="panel-body">
				     	<div class="product-detail">
				     		<table>
				     			<tr>
				     				<td class="td-detail-header">
				     					<span class="other-detail ">Price: </span>
				     				</td>
				     				<td class="td-detail">Rs. {{ nepaliCurrencyFormat($product->price) }}</td>
				     			</tr>
				     			<tr>
				     				<td class="td-detail-header">
				     					<span class="other-detail">Negotiable: </span>
				     				</td>
				     				<td class="td-detail">{{ $product->is_negotiable == 1 ? 'Yes' : 'No' }}</td>
				     			</tr>
				     			@isset($product->usedFor_period)
					     			<tr>
					     				<td class="td-detail-header">
					     					<span class="other-detail ">Used For: </span>
					     				</td>
					     				<td class="td-detail">{{ $product->usedFor_period }} {{ \App\Product::TimePeriod[$product->usedFor_period_type] }}</td>
					     			</tr>
					     		@endisset
				     		</table>
						</div>
				     </div>
			    </div>
			</div>
		</div>

		@if($product->has_home_delivery == 1 || isset($product->delivery_area) || isset($product->delivery_charge))
			<div class="row">
		      	<div class="col-md-12">
		          	<div class="panel panel-primary panel-single">
					    <div class="panel-heading">
					    	<h5><i class="fa fa-plane"></i>Delivery Detail</h5>
					    </div>
					     <div class="panel-body">
					     	<div class="product-detail">
					     		<table>
					     			<tr>
					     				<td class="td-detail-header">
					     					<span class="other-detail ">Home Delivery: </span>
					     				</td>
					     				<td class="td-detail">{{ $product->has_home_delivery == 1 ? 'Yes' : 'No' }}</td>
					     			</tr>
					     			@isset($product->delivery_area)
						     			<tr>
						     				<td class="td-detail-header">
						     					<span class="other-detail ">Delivery Area: </span>
						     				</td>
						     				<td class="td-detail">{{ \App\Product::DeliveryArea[$product->delivery_area] }}</td>
						     			</tr>
						     		@endisset
					     			@isset($product->delivery_charge)
						     			<tr>
						     				<td class="td-detail-header">
						     					<span class="other-detail ">Delivery Charge: </span>
						     				</td>
						     				<td class="td-detail">Rs. {{ $product->delivery_charge }}</td>
						     			</tr>
						     		@endisset
					     		</table>
							</div>
					     </div>
				    </div>
				</div>
			</div>
		@endif

		@if(isset($product->manufacturer) ||
			isset($product->warranty_type) ||
			isset($product->warranty_period) ||
			isset($product->warranty_period_type) ||
			isset($product->kilometer_run) ||
			isset($product->make_year) ||
			isset($product->color) ||
			isset($product->location) ||
			isset($product->size) ||
			isset($product->quantity)
		)
			<div class="row">
		      	<div class="col-md-12">
		          	<div class="panel panel-primary panel-single">
					    <div class="panel-heading">
					    	<h5><i class="fa fa-info-circle"></i>Product Detail</h5>
					    </div>
					     <div class="panel-body">
					     	<div class="product-detail">
					     		<table>
					     			@isset($product->manufacturer)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Manufacturer: </span>
						     				</td>
						     				<td class="td-detail">{{ $product->manufacturer }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->warranty_type)
						     			<tr>
						     				<td class="td-detail-header">
										<span class="other-detail ">Warranty Type: </span>
						     				</td>
						     				<td class="td-detail">{{ \App\Product::WarrantyTypes[$product->warranty_type] }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->warranty_period_type)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Warranty Period: </span>
						     				</td>
						     				<td class="td-detail">{{ $product->warranty_period }} {{ \App\Product::TimePeriod[$product->warranty_period_type] }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->kilometer_run)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Kilometer Run: </span>
						     				</td>
						     				<td class="td-detail">{{ nepaliCurrencyFormat($product->kilometer_run) }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->make_year)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Make Year: </span> 
						     				</td>
						     				<td class="td-detail">{{ $product->make_year }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->color)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Color: </span> 
						     				</td>
						     				<td class="td-detail">{{ $product->color }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->location)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Location: </span> 
						     				</td>
						     				<td class="td-detail">{{ $product->location }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->size)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Size: </span>
						     				</td>
						     				<td class="td-detail">{{ $product->size }}</td>
						     			</tr>
						     		@endisset

						     		@isset($product->quantity)
						     			<tr>
						     				<td class="td-detail-header">
												<span class="other-detail ">Quantity: </span>
						     				</td>
						     				<td class="td-detail">{{ $product->quantity }}</td>
						     			</tr>
						     		@endisset
					     		</table>
							</div>
					     </div>
				    </div>
				</div>
			</div>
		@endif

		@isset($product->features)
			<div class="row">
		      	<div class="col-md-12">
		          	<div class="panel panel-primary panel-single">
					    <div class="panel-heading">
					    	<h5><i class="fa fa-star"></i>Feature</h5>
					    </div>
					     <div class="panel-body product-features">
						     	{!! $product->features !!}
					     </div>
				    </div>
				</div>
			</div>
		@endisset

		<div class="row">
	      	<div class="col-md-12">
	          	<div class="panel panel-primary panel-single question-panel">
				    <div class="panel-heading">
				    	<h5>
				    		<i class="fa fa-question-circle"></i>Discussion
				    		@if(count($product->buyerQuestions) > 4) 
					    		<span style="float: right;">
					    			<i class="fa fa-plus"></i><a href="{{ route('buyer-question.readMore', $product->slug) }}" class="read-more">Read All</a>
					    		</span>
					    	@endif
				    	</h5>
				    </div>
				    <div class="panel-body">
				     	@forelse($buyer_questions as $buyer_question)
					     	<div class="product-question">
					     		<div class="question-section">
					     			<span class="question">
					     				Q. {{ $buyer_question->question }}
					     			</span>
					     			<span class="asked-by">
					    				Asked By: {{ $buyer_question->askedBy->name }}
					    			</span>
					     		</div>
					     		@isset($buyer_question->answer)
									<div class="question-section">
						     			<span class="question">
						     				A. {{ $buyer_question->answer }}
						     			</span>
						     			<span class="asked-by">
						    				Answered By: {{ $buyer_question->product->createdBy->name }} (Seller)
						    			</span>
						     		</div>
						     	@endisset
						     	@isset($buyer_question->answer2)
									<div class="question-section">
						     			<span class="question">
						     				A2. {{ $buyer_question->answer2 }}
						     			</span>
						     			<span class="asked-by">
						    				Answered By: {{ env('APP_NAME') }}  (Admin)
						    			</span>
						     		</div>
						     	@endisset
					     	</div>
					    @empty
					    	<h5 class="no-querries">No querries has been asked yet.</h5>
						@endif
						@if (Auth::user())
							@if($product->created_by != Auth::user()->id)
						     	<form class="question-form" method="POST" action="{{ route('buyer-question.store') }}">
						     		@csrf
						     		<input type="hidden" name="product_slug" value="{{ $product->slug }}">
								    <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
								      	<label for="question">Ask Your Question:</label>
								      	{!! Form::textarea('question', null, ['class' => 'form-control', 'minlength' => 2, 'maxlength' => 256, 'required' => 'required', 'id' => 'comment', 'rows' => 5]) !!}
								      	 @if ($errors->has('question'))
							                <span class="help-block">
							                    <strong>{{ $errors->first('question') }}</strong>
							                </span>
							            @endif
								    </div>

								    <div class="text-center">
								    	<button type="submit" class="btn btn-success">
								    		<i class="fa fa-check"></i>Submit
								    	</button>
								    </div>
								</form>

								<div class="alert alert-danger question-warning">
								  	<strong>Warning!</strong>
								  	<li>Do not use any obscene/abusive words which may hurt the feelings of other users. Such posts will be deleted immediately, and your account will be banned.</li>
									<li>Only post comment regarding this ad. Do not advertise about other ads, product or website.</li>
								</div>
							@endif
						@else
							Please <a style="color: #E74C3C;" href="{{ route('login') }}">Login</a> To Post Your Query
						@endif
				     </div>
			    </div>
			</div>
		</div>
		
		<br> 	    	

		@if(count($related_products) > 0)
			<div class="related-products">
			    <h3>Related Products</h3>

			    <ul id="relatedProductSlider">
			    	@foreach($related_products as $related_product)
						<li>
							<a href="{{ route('product.show', $related_product->slug) }}">
								@if(!empty($related_product->images->first()))
				     				<img src="/storage/media/product/{{ $related_product->id }}/thumbnail/{{ $related_product->images->first()->filename }}"/>
				     			@else
				     				<img src="{{ asset('images/no-image.jpg') }}" alt=" " />
				     			@endif
				     		</a>
							<div class="grid-flex">
								<a href="{{ route('product.show', $related_product->slug) }}">
									{{ $related_product->title }}
								</a>
								<p>Rs. {{ nepaliCurrencyFormat($related_product->price) }}</p>
								<span>({{ \App\Product::ConditionType[$related_product->condition_type] }})</span>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		@endif
    </div>
@endsection

@section('frontend-script')
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,
				source_image_width: 900,
				source_image_height: 1200,
				show_hint: false,
				click_callback: function(image_anchor, instance_id){
					var index = $( '[href="' + image_anchor + '"]' ).first().parents('li').index();
					$.fancybox(allimages, { index: index });
				}
			});

			var allimages = [];
			$('.etalage_source_image').each(function(){
				allimages.push({ href:$(this).attr('src') });
			});

			$("#relatedProductSlider").flexisel({
				visibleItems: 5,
	            itemsToScroll: 1,
	            animationSpeed: 800,
	            infinite: true,
	            navigationTargetSelector: null,
	            autoPlay: {
	                enable: true,
	                interval: 3000,
	                pauseOnHover: true
	            },
	            responsiveBreakpoints: { 
	                portrait: { 
	                    changePoint:480,
	                    visibleItems: 1,
	                    itemsToScroll: 1
	                }, 
	                landscape: { 
	                    changePoint:640,
	                    visibleItems: 2,
	                    itemsToScroll: 2
	                },
	                tablet: { 
	                    changePoint:768,
	                    visibleItems: 3,
	                    itemsToScroll: 3
	                }
	            },
		    });

			$("#featured-div").css("visibility", "visible");
			$("#featuredProductSlider").flexisel({
				visibleItems: 4,
		        itemsToScroll: {{ config('product.feature_item_scroll') }},
	            animationSpeed: 800,
	            infinite: true,
	            navigationTargetSelector: null,
	            autoPlay: {
	                enable: true,
	                interval: 3000,
	                pauseOnHover: true
	            },
	            responsiveBreakpoints: { 
	                portrait: { 
	                    changePoint:480,
	                    visibleItems: 1,
	                    itemsToScroll: 1
	                }, 
	                landscape: { 
	                    changePoint:640,
	                    visibleItems: 2,
	                    itemsToScroll: 2
	                },
	                tablet: { 
	                    changePoint:769,
	                    visibleItems: 3,
	                    itemsToScroll: 3
	                }
	            },
		    });

		});
	</script>
@endsection

