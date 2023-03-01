<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ $web_config->web_name }} 
            <span style="margin-top: 5px"><small>Thiết kế</small> và Chia sẻ</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item{{ request()->is('/') ? ' active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Trang chủ</a></li>
                <li class="nav-item{{ request()->is('about') ? ' active' : '' }}"><a href="{{ route('about') }}" class="nav-link">Về chúng tôi</a></li>
                <li class="nav-item{{ request()->is('template/*') ? ' active' : '' }}"><a href="#" class="nav-link">Mẫu thiệp</a></li>
                <li class="nav-item{{ request()->is('blog/*') ? ' active' : '' }}"><a href="#" class="nav-link">Blog</a></li>
                <li class="nav-item{{ request()->is('contact') ? ' active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Liên hệ</a></li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->fullName }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ env('APP_FRONTEND_URL') }}" target="_blank">Trang chức năng</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item{{ request()->is('login') ? ' active' : '' }}"><a href="{{ route('login') }}" class="nav-link">Đăng nhập</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>