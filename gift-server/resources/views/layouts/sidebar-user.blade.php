<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('images/web/avatar.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    {{ Auth::user()->fullName }}
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">CHỨC NĂNG CHÍNH</li>
            <li class="{{ request()->is('user') ? ' active' : '' }}">
                <a href="{{ route('user.dashboard') }}">
                    <i class="fa fa-th"></i> <span>Tổng quan</span>
                </a>
            </li>
            
            <li class="treeview{{ request()->is('user/card/*') ? ' active' : '' }}">
                <a href="#">
                    <i class="fa fa-fw fa-file-picture-o"></i>
                    <span>Quản lý mẫu thiệp</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">Hot</small>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('user/card/list-template') ? 'active' : '' }}"><a href="{{ route('user.card.template') }}"><i class="fa fa-circle-o"></i>Danh sách mẫu thiệp</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Mẫu thiệp đang sử dụng</a></li>
                    {{-- <li class="{{ request()->is('user/type-card/create') ? 'active' : '' }}"><a href="{{ route('user.card.create') }}"><i class="fa fa-circle-o"></i> Sử dụng mẫu thiệp</a></li> --}}
                </ul>
            </li>
            <li class="treeview{{ request()->is('user/type-card/*') ? ' active' : '' }}">
                <a href="#">
                    <i class="fa fa-fw fa-calendar-o"></i>
                    <span>Quản lý ngày lễ</span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('user/type-card/list') ? 'active' : '' }}"><a href="#"><i class="fa fa-circle-o"></i>Danh sách ngày lễ</a></li>
                    <li class="{{ request()->is('user/type-card/create') ? 'active' : '' }}"><a href="#"><i class="fa fa-circle-o"></i>Thêm ngày lễ mới</a></li>
                </ul>
              </li>
            <li>
                <a href="#">
                    <i class="fa fa-fw fa-user"></i> <span>Quản lý tài khoản </span>
                </a>
            </li>

        </ul>
    </section>

</aside>
