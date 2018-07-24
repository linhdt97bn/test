<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="tẽt" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý Tour <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="hdv/tour">Danh sách Tour của tôi</a></li>
                    <li><a href="hdv/tour/create">Thêm Tour</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý đơn đặt tour <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('dsdontour')}}">Danh sách đơn đặt tour</a></li>
                    <li><a href="{{route('dsdontourmoi')}}">Đơn đặt tour mới</a></li>
                    <li><a href="{{route('dsdontourchapnhan')}}">Đơn đặt đưọc chấp nhận</a></li>
                    <li><a href="{{route('dsdontourthanhtoan')}}">Đơn đặt tour đã thanh toán</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>