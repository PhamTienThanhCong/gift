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
            <li class="{{ request()->is('template/*') ? ' active' : '' }}">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Tổng quan</span>
                </a>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-fw fa-files-o"></i>
                  <span>Quản lý loại thiệp</span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i>Danh sách các thể loại</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i>Thêm thể loại mới</a></li>
              </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-file-picture-o"></i>
                    <span>Quản lý mẫu thiệp</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">Hot</small>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Tạo mẫu thiệp</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i>Danh sách mẫu thiệp</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i>Mẫu thiệp đang sử dụng</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-fw fa-newspaper-o"></i> <span>Quản lý blog</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-fw fa-edit"></i> <span>seting web</span>
                </a>
            </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Chỉnh sửa trang web</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> home</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> about</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> contact</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> developer</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Yêu cầu </span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-yellow">Quan tâm</small>
                    </span>
                </a>
            </li>

            <li class="{{ request()->is('template/*') ? ' active' : '' }}">
              <a href="#">
                  <i class="fa fa-fw fa-users"></i> <span>Quản lý người dùng</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-red">Private</small>
                  </span>
              </a>  
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-fw fa-user"></i> <span>Quản lý tài khoản </span>
                </a>
            </li>

        </ul>
    </section>

</aside>
