<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li> 
            <li>
                <a href=""><i class="glyphicon glyphicon-user"></i> Quản lí người dùng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('list-user',1)}}">Danh sách khách hàng</a>
                    </li>
                    <li>
                        <a href="{{route('list-user',2)}}">Danh sách hướng dẫn viên</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="glyphicon glyphicon-th-list"></i>Thống kê<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('thongke-doanhthu')}}">Thống kê doanh thu</a>
                    </li>
                    <li>
                        <a href="{{route('thongke-donhang')}}">Thống kê đơn hàng</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>          
            <li>
                <a href=""><i class="glyphicon glyphicon-pencil"></i>Quản lí bình luận<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('dsbinhluan')}}">Danh sách bình luận</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>                       
            <li>
                <a href=""><i class="glyphicon glyphicon-road"></i>Quản lí địa điểm du lịch<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('diadiem.index')}}">Danh sách địa điểm du lịch</a>
                    </li>
                    <li>
                        <a href="{{route('diadiem.create')}}">Thêm địa điểm du lịch</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>                           
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->