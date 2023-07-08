@extends('layouts.backend')

@section('title')
    Users
@endsection

@section('content')
  <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-red">
              <div class="inner">
                <h3>{{$totalProduct}}</h3>
                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="{{route('products.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{$totalUser}}</h3>
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="{{route('users.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-green">
              <div class="inner">
                <h3>{{$totalCategory}}</h3>
                <p>Total Categories</p>
              </div>
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
              <a href="{{route('categories.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{$totalSubCategory}}</h3>
                <p>Total Sub Categories</p>
              </div>
              <div class="icon">
                <i class="fa fa-list-alt"></i>
              </div>
              <a href="{{route('sub-categories.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-green">
              <div class="inner">
                <h3>{{$totalSoldProduct}}</h3>
                <p>Total Sold Product</p>
              </div>
              <div class="icon">
                <i class="fa fa-money"></i>
              </div>
              <a href="{{ route('products.index', ['filter_by' => 'sold-items', 'sold-items' => 'Sold Items']) }}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-red">
              <div class="inner">
                <h3>{{$totalFeaturedProduct}}</h3>
                <p>Total Feature Product</p>
              </div>
              <div class="icon">
                <i class="fa fa-star"></i>
              </div>
              <a href="{{ route('products.index', ['filter_by' => 'featured-items', 'featured-items' => 'Featured Items']) }}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{$totalExpiredProduct}}</h3>
                <p>Total Expired Product</p>
              </div>
              <div class="icon">
                <i class="fa fa-warning"></i>
              </div>
              <a href="{{ route('products.index', ['filter_by' => 'expired-items', 'expired-items' => 'Expired Items']) }}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
          </div>
      </div>
  </div>
@endsection
