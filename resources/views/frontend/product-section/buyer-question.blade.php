@extends('layouts.frontend')

@section('content')
	
	@include('frontend.partials.featured-products')

	<div class=" single_top">
		<div class="row">
	      	<div class="col-md-12">
	      		<h3 class="buyer-question-title">Product: {{ $product->title }}</h3>
	          	<div class="panel panel-primary panel-single question-panel">
				    <div class="panel-heading">
				    	<h5>
				    		<i class="fa fa-question-circle"></i>Discussion
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
										{!! Form::textarea('question', null, ['class' => 'form-control', 'minlength' => 2, 'maxlength' => 256, 'required' => 'required', 'id' => 'comment', 'rows' => 5]) !!}								      	 @if ($errors->has('question'))
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
		<div class="text-center">
			{{ $buyer_questions->appends(request()->input())->links() }}
		</div>
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
