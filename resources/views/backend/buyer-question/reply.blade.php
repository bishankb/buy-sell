@extends('layouts.backend')

@section('title')
    Reply Message
@endsection

@section('content')
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ env('APP_NAME') }} 's reply</h3>
                        <div class="pull-right">
                            <a href="{{ route('buyer-questions.index') }}" class="btn btn-success">Back to Listing</a>
                        </div>
                    </div>
                    {!! Form::model($buyer_question, ['method' => 'patch', 'route' => ['buyer-questions.sendReply', $buyer_question->question_id], 'class' => 'reply-form']) !!}
	                    <div class="box-body">
	                        <table  class="reply-table">
								<tbody>
									<tr>
										<td class="td-header">Product:</td>
										<td>
											@if(isset($buyer_question->product->title))
												<a href="{{ route('product.show', $buyer_question->product->slug) }}" class="red-color underline">
													{{ $buyer_question->product->title }}
												</a>
											@else
												<i>Deleted</i>
											@endif
										</td>
									</tr>
									<tr>
										<td class="td-header">Asked By:</td>
										@if(isset($buyer_question->askedBy->name))
											<td>{{ $buyer_question->askedBy->name }}</td>
										@else
											<i>Deleted</i>
										@endif
									</tr>
									<tr>
										<td class="td-header">Asked On:</td>
										<td>{{ $buyer_question->created_at->format('d M, Y') }}</td>
									</tr>
									<tr>
										<td class="td-header">Buyer's Query:</td>
										<td class="small-height">{{ $buyer_question->question }}</td>
									</tr>
									@isset($buyer_question->answer)
										<tr>
											<td class="td-header">Seller Answer:</td>
											<td class="small-height">{{ $buyer_question->answer }}</td>
										</tr>
									@endisset
									@isset($buyer_question->answer2)
										<tr>
											<td class="td-header">Your Answer:</td>
											<td class="small-height">{{ $buyer_question->answer2 }}</td>
										</tr>
									@endisset
								</tbody>
							</table>
							<br>
							@if($buyer_question->answer2 == null)
							    <div class="form-group {{ $errors->has('answer2') ? ' has-error' : '' }}">
							      	<label for="answer2">Your Answer:</label>
									{!! Form::textarea('answer2', null, ['class' => 'form-control', 'minlength' => 2, 'maxlength' => 256, 'required' => 'required', 'id' => 'comment', 'rows' => 5]) !!}
							      	 @if ($errors->has('answer2'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('answer2') }}</strong>
						                </span>
						            @endif
							    </div>
						    @endif
	                   	</div>
						@if($buyer_question->answer2 == null)
		                    <div class="box-footer">
		                        <button type="submit" class="btn btn-success">
						    		Submit
						    	</button>
		                    </div>
		                @endif
	                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

