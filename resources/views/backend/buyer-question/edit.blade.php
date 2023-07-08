@extends('layouts.backend')

@section('title')
	Buyer Question
@endsection

@section('content')
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Buyer Question</h3>
                        <div class="pull-right">
                            <a href="{{ route('buyer-questions.index') }}" class="btn btn-success">Back to Listing</a>
                        </div>
                    </div>
                    {!! Form::model($buyer_question, ['method' => 'patch', 'route' => ['buyer-questions.update', $buyer_question->question_id], 'class' => 'reply-form']) !!}
	                    <div class="box-body">
	                        <table  class="reply-table">
								<tbody>
									<tr>
										<td class="td-header">Product:</td>
										<td>
											<a href="{{ route('product.show', $buyer_question->product->slug) }}" class="red-color underline">
												{{ $buyer_question->product->title }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="td-header">Asked By:</td>
										<td>{{ $buyer_question->askedBy->name }}</td>
									</tr>
									<tr>
										<td class="td-header">Asked On:</td>
										<td>{{ $buyer_question->created_at->format('d M, Y') }}</td>
									</tr>
								</tbody>
							</table>
							<div class="form-group required {{ $errors->has('question') ? ' has-error' : '' }}">
						      	<label for="question" class="control-label">Buyer's query:</label>
								{!! Form::textarea('question', null, ['class' => 'form-control', 'minlength' => 2, 'maxlength' => 256, 'required' => 'required', 'id' => 'comment', 'rows' => 3]) !!}
						      	 @if ($errors->has('question'))
					                <span class="help-block">
					                    <strong>{{ $errors->first('question') }}</strong>
					                </span>
					            @endif
						    </div>
							@isset($buyer_question->answer)
								<div class="form-group {{ $errors->has('answer') ? ' has-error' : '' }}">
							      	<label for="answer" class="control-label">Seller Answer: <span class="font-13">(Clear the message to delete the seller answer)</span></label>
									{!! Form::textarea('answer', null, ['class' => 'form-control', 'minlength' => 2, 'maxlength' => 256, 'id' => 'comment', 'rows' => 3]) !!}
							      	 @if ($errors->has('answer'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('answer') }}</strong>
						                </span>
						            @endif
							    </div>
							@endisset
							@isset($buyer_question->answer2)
							    <div class="form-group {{ $errors->has('answer2') ? ' has-error' : '' }}">
							      	<label for="answer2" class="control-label">Your Answer: <span class="font-13">(Clear the message to delete your answer)</span></label>
									{!! Form::textarea('answer2', null, ['class' => 'form-control', 'minlength' => 2, 'maxlength' => 256, 'id' => 'comment', 'rows' => 3]) !!}
							      	 @if ($errors->has('answer2'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('answer2') }}</strong>
						                </span>
						            @endif
							    </div>
							@endisset
	                   	</div>
	                    <div class="box-footer">
	                        <button type="submit" class="btn btn-success">
					    		Update
					    	</button>
	                    </div>
	                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

