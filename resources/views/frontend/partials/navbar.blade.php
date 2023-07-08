<div class="header" id="myHeader">
	<div class="top-header">
		<div class="container">
			<div class="top-header-left">
				<ul class="support">
					<li><a href="#"><label> </label></a></li>
					<li><a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i>Home</span></a></li>
				</ul>
			</div>
			<div class="top-header-right">
			 	<ul class="support">
					<li><a href="#"><label> </label></a></li>
					<li><a href="{{ route('frontend.faq') }}"><i class="fa fa-question-circle"></i>FAQ</span></a></li>
				</ul>
				<ul class="support" style="margin-left: 25px;">
					<li><a href="#"><label> </label></a></li>
					<li><a href="{{ route('contact-us.index') }}"><i class="fa fa-phone"></i>Contact Us</span></a></li>
				</ul>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>		
		</div>
	</div>
	<div class="bottom-header">
		<div class="container">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="{{ route('frontend.home') }}"><img src="{{ asset('/images/logo.png') }}" alt=" " /></a>
				</div>
				<div class="mobile-login-section">
						@if (Auth::user())
							<ul class="login notify-bell">
		                        <li class="dropdown notification-btn">
						      		<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav_notification">
		                                <i class="fa fa-bell" aria-hidden="true"></i>
		              					@if(Auth::user()->unreadNotifications->count())
		                                    <b class="badge badge-custom" style="">{{ Auth::user()->unreadNotifications->count() }}</b>
		                                @endif
		                            </a>
		                            <ul class="dropdown-menu notify-drop custom-dropdown">
		                                <div class="notify-drop-title">
		                                    <div class="row">
		                                        <div class="col-md-6 col-sm-6 col-xs-6"><strong>Notification(s)</strong></div>
		                                        @if(Auth::user()->unreadNotifications->count() >0)
		                                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
		                                                <a href="#" class="rIcon allRead"
		                                                   data-tooltip="tooltip" data-placement="bottom" title="Mark as Read">
		                                                    <i class="fa fa-dot-circle-o"></i>
		                                                </a>
		                                            </div>
		                                        @endif
		                                    </div>
		                                </div>
		                                <div class="drop-content">
		                                    @foreach(Auth::user()->unreadNotifications->take(10) as $unreadNotification) 
		                                        @if(isset($unreadNotification->data['message']))
								                    <li>
								                    	<div class="col-md-12 col-sm-12 col-xs-12 pd-12">
		                                    				<div style="width: 100%;">
		                                    					@if(isset($unreadNotification->data['url']))
										                      	  <a style="padding: 0 !important;" href="{{ url($unreadNotification->data['url']). '?' . http_build_query(['notify_id' => $unreadNotification->id])}}">
										                        		<p>{{ $unreadNotification->data['message'] }}</p
										                        			>
										                        	</a>
										                        @endif
										                    </div>
										                </div>
								                    </li>
								               	@endif
		                                    @endforeach
		                                </div>
		                                <div class="notify-drop-footer text-center" style="clear: both;">
		                                    <a href="{{ route('notification.view-notification') }}">
		                                        <i class="fa fa-eye"></i> See All
		                                    </a>
		                                </div>
		                            </ul>
		                        </li>
							</ul>
							<ul class="login">
						      	<li class="dropdown">
						      		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						      			@if(isset( Auth::user()->profile->image->filename))
		                					<img src="/storage/media/user/{{ Auth::user()->id }}/thumbnail/{{ Auth::user()->profile->image->filename }}" alt="User Image" class="user-image">
						      			@else 
						      				<span> <i class="fa fa-user"></i></span>
						      			@endif
						      		</a>
						      		<span class="caret"></span></a>
							        <ul class="dropdown-menu custom-dropdown">
										@can('view_dashboards')
											<li>
											    <a href="{{ route('backend.dashboard') }}" target="__blank">Dashboard</a>
											</li>
										@endcan
							        	<li><a href="{{ route('my-account.index') }}">My Account</a></li>
							          	<li>
											<a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>
							        </ul>
								</li>
							</ul>

						@else
							<ul class="login" style="margin-left: 22px; width: 8%">
								<li><a href="{{ route('login') }}"><span> <i class="fa fa-lock"></i></span></a></li>
							</ul>
						@endif
						<div class="account">
							<a href="{{ route('product-section.addCategories') }}">
								<span> <i class="fa fa-shopping-cart"></i></span>
							</a>
						</div>
				</div>
				<div class="search">
					{!! Form::model(null, ['method' => 'get', 'route' => ['product.search']]) !!}
						@if(Request('search_product'))
							<input type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" name="search_product" value="{{Request('search_product')}}" required>
						@else 
							<input type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" name="search_product" required placeholder="Search Product">
						@endif
						<input type="submit"  value="SEARCH">
					{!! Form::close() !!}

				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="login-section">					
				@if (Auth::user())
					<ul class="login" style="width: 30px;">
                        <li class="dropdown notification-btn">
				      		<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav_notification">
                                <i class="fa fa-bell" aria-hidden="true"></i>
              					@if(Auth::user()->unreadNotifications->count())
                                    <b class="badge badge-custom" style="">{{ Auth::user()->unreadNotifications->count() }}</b>
                                @endif
                            </a>
                            <ul class="dropdown-menu notify-drop custom-dropdown">
                                <div class="notify-drop-title">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"><strong>Notification(s)</strong></div>
                                        @if(Auth::user()->unreadNotifications->count() >0)
                                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                                <a href="{{ route('notification.mark-read') }}" class="rIcon allRead"
                                                   data-tooltip="tooltip" data-placement="bottom" title="Mark as Read">
                                                    <i class="fa fa-dot-circle-o"></i>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="drop-content">
                                    @foreach(Auth::user()->unreadNotifications->take(10) as $unreadNotification) 
                                        @if(isset($unreadNotification->data['message']))
						                    <li>
						                    	<div class="col-md-12 col-sm-12 col-xs-12 pd-12">
                                    				<div style="width: 100%;">
                                    					@if(isset($unreadNotification->data['url']))
								                        	<a style="padding: 0 !important;" href="{{ url($unreadNotification->data['url']). '?' . http_build_query(['notify_id' => $unreadNotification->id])}}">
								                        		<p>{{ $unreadNotification->data['message'] }}</p>

								                        	</a>                    	
								                        @endif
								                    </div>
								                </div>
						                    </li>
						               	@endif
                                    @endforeach
                                </div>
                                <div class="notify-drop-footer text-center" style="clear: both;">
		                            <a href="{{ route('notification.view-notification') }}">
                                        <i class="fa fa-eye"></i> See All
                                    </a>
                                </div>
                            </ul>
                        </li>
					</ul>

					<ul class="login">
				      	<li class="dropdown">
				      		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				      			@if(isset( Auth::user()->profile->image->filename))
                					<img src="/storage/media/user/{{ Auth::user()->id }}/thumbnail/{{ Auth::user()->profile->image->filename }}" alt="User Image" class="user-image">
				      			@else 
				      				<span> <i class="fa fa-user"></i></span>
				      			@endif
						        {{ str_limit(auth()->user()->name, $limit = 7, $end = '...')  }}
				      		</a>
				      		<span class="caret"></span></a>
					        <ul class="dropdown-menu custom-dropdown">
								@can('view_dashboards')
									<li>
									    <a href="{{ route('backend.dashboard') }}" target="__blank">Dashboard</a>
									</li>
								@endcan
					        	<li><a href="{{ route('my-account.index') }}">My Account</a></li>
					          	<li>
									<a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
					        </ul>
						</li>
					</ul>
				@else
					<ul class="login">
						<li><a href="{{ route('login') }}"><span> <i class="fa fa-lock"></i></span>LOGIN</a></li> |
						<li ><a href="{{ route('register') }}">SIGNUP</a></li>
					</ul>
				@endif
				<div class="account">
					<a href="{{ route('product-section.addCategories') }}">
						<span> <i class="fa fa-shopping-cart"></i></span>
						Sell Your Product
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
</div>

