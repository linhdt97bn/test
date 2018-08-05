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
            </li>
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý Tour<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="hdv/tour">Danh sách Tour của tôi</a></li>
                    <li><a href="hdv/tour/create">Thêm Tour</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('list-bill') }}"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý đơn đặt tour</a>
            </li>
        </ul>
    </div>
</div>