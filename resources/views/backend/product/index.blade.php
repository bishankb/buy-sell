@extends('layouts.backend')

@section('title')
  Product
@endsection

@section('content')
  <div class="container-fluid">
    <div class="alert alert-success" id="status-change-alert">
      Status Changed Sucessfully.
    </div>
    <div class="row">
      <div class="col-md-11">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Products Table</h3>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  @can('add_products')
                    <div class="add-item">
                      <a class="btn btn-default add-button" href="{{route('products.addCategories')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
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
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('products.index') }}">
                                  All
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'status', 'status' => 'Active']) }}">
                              Active
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'status', 'status' => 'Inactive']) }}">
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
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('products.index') }}">
                                Without Deleted
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'deleted-items', 'deleted-items' => 'Only Deleted']) }}">
                              Only Deleted
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'deleted-items', 'deleted-items' => 'All']) }}">
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
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu scrollable-menu">
                          <li>
                              <a href="{{ route('products.index') }}">
                               All
                              </a>
                          </li>
                          @foreach($categories as $category)
                            <li>
                              <a href="{{ route('products.index', ['filter_by' => 'category', 'category' => $category->slug ]) }}">
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
                              <a href="{{ route('products.index') }}">
                               All
                              </a>
                          </li>
                          @foreach($sub_categories as $sub_category)
                            <li>
                              <a href="{{ route('products.index', ['filter_by' => 'sub_category', 'sub_category' => $sub_category->slug ]) }}">
                                {{ $sub_category->title }}
                              </a>
                            </li>
                          @endforeach
                      </ul>
                    </div>

                    <div class="dropdown inline">
                      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        @if(request('sold-items') != null)
                          {{ request('sold-items') }}
                        @else
                          Filter by Sold Items
                        @endif
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('products.index') }}">
                                All
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'sold-items', 'sold-items' => 'Sold Items']) }}">
                              Sold Items
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'sold-items', 'sold-items' => 'Unsold Items']) }}">
                              Unsold Items
                            </a>
                          </li>
                      </ul>
                    </div>

                    <div class="dropdown inline">
                      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        @if(request('featured-items') != null)
                          {{ request('featured-items') }}
                        @else
                          Filter by Featured Items
                        @endif
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('products.index') }}">
                                All
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'featured-items', 'featured-items' => 'Featured Items']) }}">
                              Featured Items
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'featured-items', 'featured-items' => 'UnFeatured Items']) }}">
                              UnFeatured Items
                            </a>
                          </li>
                      </ul>
                    </div>

                    <div class="dropdown inline">
                      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        @if(request('expired-items') != null)
                          {{ request('expired-items') }}
                        @else
                          Filter by Expired Items
                        @endif
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('products.index') }}">
                                All
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'expired-items', 'expired-items' => 'Expired Items']) }}">
                              Expired Items
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('products.index', ['filter_by' => 'expired-items', 'expired-items' => 'Unexpired Items']) }}">
                              Unexpired Items
                            </a>
                          </li>
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
                    @can('edit_products')
                      <th>Images</th>
                    @endcan
                    <th>Sold</th>
                    <th>Feature</th>
                    <th>Expired On</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th class="text-center">Status</th>
                    @if(auth()->user()->can('edit_products') || auth()->user()->can('delete_products'))
                      <th class="text-center">Actions</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @forelse($products as $product)
                    <tr>
                      <td>{{ reversePagination($products, $loop) }}</td>                      
                      <td>{{ str_limit($product->title, $limit = 18, $end = '...') }}</td>
                      @if(isset($product->category->title))
                        <td>{{$product->category->title}}</td>
                      @else
                        <td>Deleted</td>
                      @endif
                      @can('edit_products')
                        <td>
                          <a href="{{route('products.addImages', $product->slug)}}">Manage</a>
                        </td>
                      @endcan
                      @if(auth()->user()->can('edit_products'))
                        <td>
                          @if($product->is_sold == 0)
                            <button class="btn btn-link" data-toggle="modal" data-target="#mark-sold-modal{{$product->slug}}">Unsold</button>
                          @else
                            <button class="btn btn-link" data-toggle="modal" data-target="#mark-unsold-modal{{$product->slug}}">Sold</button>
                          @endif
                        </td>
                        <td>
                          @if($product->is_featured == 0)
                            <button class="btn btn-link" data-toggle="modal" data-target="#mark-featured-modal{{$product->slug}}">Unfeatured</button>
                          @else
                            <button class="btn btn-link" data-toggle="modal" data-target="#mark-unfeatured-modal{{$product->slug}}">Featured</button>
                          @endif
                        </td>
                      @else
                        <td>
                          @if($product->is_sold == 0)
                            Unsold
                          @else
                            Sold
                          @endif
                        </td>
                        <td>
                          @if($product->is_featured == 0)
                            Unfeatured
                          @else
                            Featured
                          @endif
                        </td>
                      @endif
                      <td>
                        @if($product->expiry_period < Carbon\Carbon::now())
                          Expired
                        @else
                          {{$product->expiry_period->format('d M, Y')}}
                        @endif  
                      </td>
                      <td>{{$product->createdBy['name']}}</td>
                      <td>{{$product->updatedBy['name']}}</td>
                      @if(auth()->user()->can('edit_products'))
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" class="changeStatus{{$product->slug}}" @if($product->status == 1) checked @endif>
                            <span class="slider round"></span>
                          </label>
                        </td>
                      @else
                        <td class="text-center">
                          @if($product->status == 1)
                            <span style="font-size: 12px;" class="label label-success">Active</span>
                          @else
                            <span style="font-size: 12px;" class="label label-danger">Inactive</span>
                          @endif
                        </td>
                      @endif
                      @if(auth()->user()->can('edit_products') || auth()->user()->can('delete_products'))
                        <td class="text-center">
                          @can('edit_products')
                            <a class="btn btn-default btn-sm action-button" href="{{ route('products.edit', ['product' => $product]) }}" data-tooltip="Edit"><i class="fa fa fa-edit"></i></a>
                          @endcan
                          @can('delete_products')
                            @if($product->deleted_at == null)
                              <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#delete-modal{{$product->slug}}"><i class="fa fa-trash"></i></button>
                              
                            @else
                              <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#restore-modal{{$product->slug}}"><i class="fa fa-recycle"></i></button>
                              
                              <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#force-delete-modal{{$product->slug}}"><i class="fa fa-trash" style="color: red"></i></button>
                            @endif
                          @endcan
                          @can('edit_products')
                            @if($product->expiry_period < Carbon\Carbon::now())
                              <button class="btn btn-default btn-sm action-button" data-toggle="modal" data-target="#renew-modal{{$product->slug}}"><i class="fa fa-refresh"></i></button>
                            @endif
                          @endcan
                        </td>
                      @endcan
                    </tr>
                  @empty
                    <tr class="text-center">
                      <td colspan="11">No data available in table</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <div class="box-footer text-center">
            {{ $products->appends(request()->input())->links() }}
          </div>
        </div>
      </div>
    </div>
    @foreach($products as $product)
      <form action="{{ route('products.destroy', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <div class="modal fade" id="delete-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.delete-modal')
        </div>
      </form>

      <form action="{{ route('products.restore', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        <div class="modal fade" id="restore-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.restore-modal')
        </div>
      </form>

      <form action="{{ route('products.forceDestroy', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <div class="modal fade" id="force-delete-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.force-delete-modal')
        </div>
      </form>

      <form action="{{ route('products.markSold', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="modal fade" id="mark-sold-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.mark-sold-modal')
        </div>
      </form>

      <form action="{{ route('products.markSold', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="modal fade" id="mark-unsold-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.mark-unsold-modal')
        </div>
      </form>

      <form action="{{ route('products.markFeatured', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="modal fade" id="mark-featured-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.mark-featured-modal')
        </div>
      </form>

      <form action="{{ route('products.markFeatured', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="modal fade" id="mark-unfeatured-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.mark-unfeatured-modal')
        </div>
      </form>

      <form action="{{ route('products.renew', $product->slug) }}" class="pull-xs-right5 card-link" method="POST">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="modal fade" id="renew-modal{{$product->slug}}" role="dialog">
          @include('backend.partials.renew-modal')
        </div>
      </form>
    @endforeach
  </div>
@endsection

@section('backend-script')
  <script type="text/javascript">
    $(document).ready(function(){
      @foreach($products as $product)
        $('.changeStatus'+'{{$product->slug}}').click(function () {
          var productId = {{$product->slug}};
          var val = $(this).prop('checked') == false ? 0 : 1;
          $.ajax({
            type     : "POST",
            headers  : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url      : "{{route('products.changeStatus', '')}}/"+productId,
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
      @endforeach
    });
  </script>
@endsection