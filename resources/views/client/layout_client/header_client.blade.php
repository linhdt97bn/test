<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">

            <div id="logo">
                <a class="standard-logo"><img src="upload/covietnam.png"></a>
            </div>

            <nav id="primary-menu">
                <ul>
                    <li class="current"><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                    <li class="current"><a data-toggle="modal" data-target="#QuyDinh">Quy định</a></li>
                    <li class="current"><a>Liên hệ</a></li>

                    <li class="current"><a>Địa điểm</a>
                        <ul>
                            @foreach ($diadiem as $province)
                                @if ($province->parent_id == 0)
                                <li>
                                    <a>{{$province->place_name}}</a>
                                    <ul>
                                        @foreach ($diadiem as $place)
                                            @if ($place->parent_id == $province->id)
                                                <li><a href="{{route('tour-dia-diem', $place->id)}}">{{$place->place_name}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    @if(Auth::check())
                        <li class="current">
                            <a><i class="glyphicon glyphicon-bell"></i> {{ Auth::user()->unreadNotifications->count() }}</a>
                            <ul class="notification">   
                                @if(Auth::user()->unreadNotifications->count())
                                    @foreach(Auth::user()->unreadNotifications as $noti)
                                        @if($noti->data['bill']['status'] == 0)
                                            <li id="notification-{{ $noti->id }}">
                                                <a href="{{ route('list-bill') }}">Khách hàng đặt tour</a>
                                            </li>
                                        @elseif($noti->data['bill']['status'] == 1)
                                            <li id="notification-{{ $noti->id }}">
                                                <a href="{{ route('chi-tiet', $noti->data['bill']['tour_id']) }}">1 đơn tour được đồng ý</a>
                                            </li>
                                        @elseif($noti->data['bill']['status'] == 2)
                                            <li id="notification-{{ $noti->id }}">
                                                <a href="{{ route('chi-tiet', $noti->data['bill']['tour_id']) }}">1 đơn tour bị từ chối</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @else 
                                    <li><a>No notification</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="current">
                            <a class="user">
                                <img src="upload/{{Auth::user()->avatar}}" height="60" width="60"> 
                                {{Auth::user()->name}}
                            </a>
                            <ul>    
                                <li><a data-toggle="modal" data-target="#SuaThongTin">Sửa thông tin cá nhân</a></li>
                                @if(Auth::user()->role == 1)
                                    <li><a href="{{ route('lich-su') }}">Lịch sử đặt tour</a></li>
                                @elseif(Auth::user()->role == 2)
                                    <li><a href="{{ route('trang-chu-hdv') }}">Quản lý tour</a></li>
                                @elseif(Auth::user()->role == 3)
                                    <li><a href="{{route('trang-chu-admin')}}">Trang quản lý</a></li>
                                @endif
                            </ul>
                        </li>  
                        <li class="current"><a href="{{route('dang-xuat')}}">Đăng xuất</a></li>
                    @else
                        <li class="current"><a data-toggle="modal" data-target="#DangKy">Đăng ký</a></li>
                        <li class="current"><a data-toggle="modal" data-target="#DangNhap">Đăng nhập</a></li>
                    @endif
                </ul>

                <div id="top-search">
                    <a id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="{{ route('tim-kiem') }}" method="get">
                        <input type="text" id="timkiem" name="timkiem" class="form-control" placeholder="Nhập thông tin tìm kiếm">
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>
<div id="divtimkiem">
    <ul id="dsketqua">
    </ul>
</div>
