<header class="main-header">
    <a href="{{ route('frontend.home') }}" target="__blank" class="logo">
      <span class="logo-lg"><b>{{ env('APP_NAME')}}</b></span>
    </a>
    <nav class="navbar navbar-static-top">
       <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              @if(Auth::user()->unreadNotifications->count())
                <span class="label label-warning">{{ Auth::user()->unreadNotifications->count() }}</span>
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

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(isset( Auth::user()->profile->image->filename))
                <img src="/storage/media/user/{{ Auth::user()->id }}/thumbnail/{{ Auth::user()->profile->image->filename }}" alt="User Image" class="user-image">
              @else
                <img src="{{asset('images/user-no-image.jpg')}}" alt="User Image" class="user-image">
              @endif
              <span class="hidden-xs">
                {{ str_limit(auth()->user()->name, $limit = 12, $end = '...')  }}
              </span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                @if(isset( Auth::user()->profile->image->filename))
                  <img src="/storage/media/user/{{ Auth::user()->id }}/{{ Auth::user()->profile->image->filename }}" alt="User Image" class="img-circle">
                @else
                  <img src="{{asset('images/user-no-image.jpg')}}" class="img-circle" alt="User Image">
                @endif
                <p>
                  {{ auth()->user()->name }}
                  <small>{{ auth()->user()->email }}</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"  target="_blank">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>
