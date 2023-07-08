@extends('layouts.backend')

@section('title')
  SubCategory
@endsection

@section('content')
  <div class="container-fluid">
    <div class="alert alert-success" id="status-change-alert">
      Status Changed Sucessfully.
    </div>
    <div class="alert alert-success" id="home-visibility-change-alert">
      Home Visibility Changed Sucessfully.
    </div>
    <div class="row">
      <div class="col-md-11">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Sub Categories Table</h3>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  @can('add_sub_categories')
                    <div class="add-item">
                      <a class="btn btn-default add-button" href="{{route('sub-categories.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                  @endcan
                  <div class="filter">
                    <label>&nbsp Filters: </label>
                    <div class="dropdown inline">
                      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                      @if(request('status') != null)
                        {{ request('status') }}
                      @else
                        Filter by Status
                      @endif
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('sub-categories.index') }}">
                                  All
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('sub-categories.index', ['filter_by' => 'status', 'status' => 'Active']) }}">
                              Active
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('sub-categories.index', ['filter_by' => 'status', 'status' => 'Inactive']) }}">
                              Inactive
                            </a>
                          </li>
                      </ul>
                    </div>

                    <div class="dropdown inline">
                      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                      @if(request('deleted-items') != null)
                        {{ request('deleted-items') }}
                      @else
                        Filter by Deleted Items
                      @endif
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('sub-categories.index') }}">
                                Without Deleted
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('sub-categories.index', ['filter_by' => 'deleted-items', 'deleted-items' => 'Only Deleted']) }}">
                              Only Deleted
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('sub-categories.index', ['filter_by' => 'deleted-items', 'deleted-items' => 'All']) }}">
                              All
                            </a>
                          </li>
                      </ul>
                    </div>

                    <div class="dropdown inline">
                      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                      @if(request('category') != null)
                        {{ request('category') }}
                      @else
                        Filter by Categories
                      @endif
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu scrollable-menu">
                          <li>
                              <a href="{{ route('products.index') }}">
                               All
                              </a>
                          </li>
                          @foreach($categories as $category)
                            <li>
                              <a href="{{ route('sub-categories.index', ['filter_by' => 'category', 'category' => $category->slug ]) }}">
                                {{ $category->title }}
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
                    <th>Catgory</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th class="text-center">Home Visibilty</th>
                    <th class="text-center">Status</th>
                    @if(auth()->user()->can('edit_sub_categories') || auth()->user()->can('delete_sub_categories'))
                      <th class="text-center">Actions</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @forelse($sub_categories as $sub_category)
                    <tr>
                      <td>{{ reversePagination($sub_categories, $loop) }}</td>                      
                      <td>{{$sub_category->title}}</td>
                      @if(isset($sub_category->category->title))
                        <td>{{$sub_category->category->title}}</td>
                      @else
                        <td>Deleted</td>
                      @endif
                      <td>{{$sub_category->createdBy['name']}}</td>
                      <td>{{$sub_category->updatedBy['name']}}</td>
                      @if(auth()->user()->can('edit_sub_categories'))
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" class="changeHomeVisibility{{$sub_category->id}}" @if($sub_category->home_visibility == 1) checked @endif>
                            <span class="slider round"></span>
                          </label>
                        </td>

                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" class="changeStatus{{$sub_category->id}}" @if($sub_category->status == 1) checked @endif>
                            <span class="slider round"></span>
                          </label>
                        </td>
                      @else
                        <td class="text-center">
                          @if($sub_category->home_visibility == 1)
                            <span style="font-size: 12px;" class="label label-success">Active</span>
                          @else
                            <span style="font-size: 12px;" class="label label-danger">Inactive</span>
                          @endif
                        </td>

                        <td class="text-center">
                          @if($sub_category->status == 1)
                            <span style="font-size: 12px;" class="label label-success">Active</span>
                          @else
                            <span style="font-size: 12px;" class="label label-danger">Inactive</span>
                          @endif
                        </td>
                      @endif
              
                      @if(auth()->user()->can('edit_sub_categories') || auth()->user()->can('delete_sub_categories'))
                        <td class="text-center">
                          @can('edit_sub_categories')
                            <a class="btn btn-default btn-sm action-button" href="{{ route('sub-categories.edit', $sub_category->id) }}" data-tooltip="Edit"><i class="fa fa fa-edit"></i></a>
                          @endcan
                          @can('delete_sub_categories')
                            @if($sub_category->deleted_at == null)
                              <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#delete-modal{{$sub_category->id}}"><i class="fa fa-trash"></i></button>
                              
                            @else
                              <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#restore-modal{{$sub_category->id}}"><i class="fa fa-recycle"></i></button>
                              
                              <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#force-delete-modal{{$sub_category->id}}"><i class="fa fa-trash" style="color: red"></i></button>
                            @endif
                          @endcan
                        </td>
                      @endif
                    </tr>
                  @empty
                    <tr class="text-center">
                      <td colspan="8">No data available in table</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <div class="box-footer text-center">
            {{ $sub_categories->appends(request()->input())->links() }}
          </div>
        </div>
      </div>
    </div>
    @foreach($sub_categories as $sub_category)
      <form action="{{ route('sub-categories.destroy', $sub_category->id) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <div class="modal fade" id="delete-modal{{$sub_category->id}}" role="dialog">
          @include('backend.partials.delete-modal')
        </div>
      </form>

      <form action="{{ route('sub-categories.restore', $sub_category->id) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        <div class="modal fade" id="restore-modal{{$sub_category->id}}" role="dialog">
          @include('backend.partials.restore-modal')
        </div>
      </form>

      <form action="{{ route('sub-categories.forceDestroy', $sub_category->id) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <div class="modal fade" id="force-delete-modal{{$sub_category->id}}" role="dialog">
          @include('backend.partials.force-delete-modal')
        </div>
      </form>
    @endforeach
  </div>
@endsection

@section('backend-script')
  <script type="text/javascript">
    $(document).ready(function(){
      @foreach($sub_categories as $sub_category)
        $('.changeStatus'+'{{$sub_category->id}}').click(function () {
          var subCategoryId = {{$sub_category->id}};
          var val = $(this).prop('checked') == false ? 0 : 1;
          $.ajax({
            type     : "POST",
            headers  : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url      : "{{route('sub-categories.changeStatus', '')}}/"+subCategoryId,
            data     : {status: val},
            success: function(response){
              if (response.success) {
                $("#status-change-alert").show();
                $('#status-change-alert').delay(3000).fadeOut(1000);
              }
            },
            error: function(data){
              alert("There was some internal error while updating the status.");
              window.location.reload(); 
            },
          });
        });

        $('.changeHomeVisibility'+'{{$sub_category->id}}').click(function () {
          var subCategoryId = {{$sub_category->id}};
          var val = $(this).prop('checked') == false ? 0 : 1;
          $.ajax({
            type     : "POST",
            headers  : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url      : "{{route('sub-categories.changeHomeVisibility', '')}}/"+subCategoryId,
            data     : {home_visibility: val},
            success: function(response){
              if (response.success) {
                $("#home-visibility-change-alert").show();
                $('#home-visibility-change-alert').delay(3000).fadeOut(1000);
              }
            },
            error: function(data){
              alert("There was some internal error while updating the home visibility.");
              window.location.reload(); 
            },
          });
        });
      @endforeach
    });
  </script>
@endsection