@extends('layouts.frontend')

@section('content')       
    <div class="user-dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 user-dashboard-custom-col">
                    <div class="panel panel-default">
                        <div class="panel-body box-profile">
                            <div class="row">
                                @include('frontend.user-dashboard.partials.user-detail')
                            </div>

                            <div class="row">
                                @include('frontend.user-dashboard.partials.sidebar')
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 user-dashboard-custom-col">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @yield('user-dashboard-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
