<header class="main-header">

    <a href="#" class="logo">

      <span class="logo-mini"><b>T</b>D</span>

      <span class="logo-lg">{{ $web_config->web_name }}</span>
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

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('images/web/avatar.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->fullName }}</span>
            </a>
            <ul class="dropdown-menu">

              <li class="user-header">
                <img src="{{ asset('images/web/avatar.jpg') }}" class="img-circle" alt="User Image">
                <p>
                  {{ Auth::user()->fullName }} - 
                  @if (Auth::user()->isAdmin == 1)
                    Admin
                  @elseif (Auth::user()->isAdmin == 0)
                    Member
                  @endif
                  <small>
                    Tham gia lúc: {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('H:i:s | d/m/Y')}}
                  </small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>