@extends('layouts.backend')

@section('title')
  Buyer Question
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Buyer Questions Table</h3>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <div class="filter">
                    <label>&nbsp Filters: </label>
                      <div class="dropdown inline">
                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                          @if(request('category') != null)
                            {{ request('category') }}
                          @else
                            Filter by Categories
                          @endif
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu scrollable-menu">
                            <li>
                                <a href="{{ route('buyer-questions.index') }}">
                                 All
                                </a>
                            </li>
                            @foreach($categories as $category)
                              <li>
                                <a href="{{ route('buyer-questions.index', ['filter_by' => 'category', 'category' => $category->slug ]) }}">
                                  {{ $category->title }}
                                </a>
                              </li>
                            @endforeach
                        </ul>
                      </div>

                      <div class="dropdown inline">
                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                          @if(request('sub_category') != null)
                            {{ request('sub_category') }}
                          @else
                            Filter by Sub-Categories
                          @endif
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu scrollable-menu">
                            <li>
                                <a href="{{ route('buyer-questions.index') }}">
                                 All
                                </a>
                            </li>
                            @foreach($sub_categories as $sub_category)
                              <li>
                                <a href="{{ route('buyer-questions.index', ['filter_by' => 'sub_category', 'sub_category' => $sub_category->slug ]) }}">
                                  {{ $sub_category->title }}
                                </a>
                              </li>
                            @endforeach
                        </ul>
                      </div>
                    </div>
                  <div class="search">
                    <form>
                      <div class="input-group input-group-sm">
                        <input type="text" name="search-item" value="{{ request('search-item') }}" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Question</th>
                    <th>Asked By</th>
                    <th>Asked On</th>
                    <th>Reply</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($buyer_questions as $buyer_question)
                    <tr @if($buyer_question->answer2 == null) class="font-bold" @endif>
                      <td>{{ reversePagination($buyer_questions, $loop) }}</td>                      
                      <td>
                        @if(isset($buyer_question->product->title))
                          <a href="{{ route('product.show', $buyer_question->product->slug) }}" target="__blank">{{$buyer_question->product->title}}</a>
                        @else
                          <i>Deleted</i>
                        @endif
                      </td>
                      <td>
                        @if(isset($buyer_question->product->category->title))
                          {{$buyer_question->product->category->title}}
                        @else
                          <i>Deleted</i>
                        @endif
                      </td>
                      <td>
                        {{ $buyer_question->question }}
                      </td>
                      <td>
                        @if(isset($buyer_question->askedBy->name))
                          {{$buyer_question->askedBy->name}}
                        @else
                          <i>Deleted</i>
                        @endif
                      </td>
                      <td>
                        {{$buyer_question->created_at->format('d M, y')}}
                      </td>
                      <td>
                        @if($buyer_question->answer2 == null)
                          <a href="{{ route('buyer-questions.reply', $buyer_question->question_id) }}" class="red-color">Reply</a>
                        @else
                          <a href="{{ route('buyer-questions.reply', $buyer_question->question_id) }}" class="red-color">Replied</a>
                        @endif
                      </td>
                      @if(auth()->user()->can('edit_buyer_questions') || auth()->user()->can('delete_buyer_questions'))
                        <td class="text-center">
                          @can('edit_buyer_questions')
                            <a class="btn btn-default btn-sm action-button" href="{{ route('buyer-questions.edit', $buyer_question->question_id) }}" data-tooltip="Edit"><i class="fa fa fa-edit"></i></a>
                          @endcan
                          @can('delete_buyer_questions')
                            <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#delete-modal{{$buyer_question->question_id}}"><i class="fa fa-trash"></i></button>
                          @endcan
                        </td>
                      @endif
                    </tr>
                  @empty
                    <tr>
                      <td colspan="7">
                        <div class="text-center">No data available in table</div>
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <div class="box-footer text-center">
            {{ $buyer_questions->appends(request()->input())->links() }}
          </div>
        </div>
      </div>
    </div>
    @foreach($buyer_questions as $buyer_question)
      <form action="{{ route('buyer-questions.destroy', $buyer_question->question_id) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <div class="modal fade" id="delete-modal{{$buyer_question->question_id}}" role="dialog">
          @include('backend.partials.delete-modal')
        </div>
      </form>
    @endforeach
  </div>
@endsection