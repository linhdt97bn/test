<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">

            <div id="logo">
                <a class="standard-logo"><img src="upload/covietnam.png"></a>
            </div>

            <nav id="primary-menu">
                <ul>
                    <li class="current"><a href="{{route('trang-chu')}}"><div>Trang chủ</div></a></li>
                    <li class="current"><a data-toggle="modal" data-target="#QuyDinh"><div>Quy định</div></a></li>
                    <li class="current"><a><div>Liên hệ</div></a></li>

                    <li class="current"><a><div>Địa điểm</div></a>
                        <ul>
                            @foreach($diadiem as $dd)
                                <li><a href="{{route('tour-dia-diem', $dd->id)}}"><div>{{$dd->tendiadiem}}</div></a></li>
                            @endforeach
                        </ul>
                    </li>

                    @if(Auth::check())
                        <li class="current">
                            <a class="user">
                                <img src="upload/{{Auth::user()->anhdaidien}}" height="60" width="60"> 
                                {{Auth::user()->hoten}}
                            </a>
                            <ul>    
                                <li><a data-toggle="modal" data-target="#SuaThongTin"><div>Sửa thông tin cá nhân</div></a></li>
                                @if(Auth::user()->quyen == 1)
                                    <li><a href="{{route('lich-su')}}"><div>Lịch sử đặt tour</div></a></li>
                                @elseif(Auth::user()->quyen == 2)
                                    <li><a href="{{route('trang-chu-hdv')}}"><div>Quản lý tour</div></a></li>
                                @elseif(Auth::user()->quyen == 3)
                                    <li><a href="{{route('trang-chu-admin')}}"><div>Trang quản lý</div></a></li>
                                @endif
                            </ul>
                        </li>  
                        <li class="current"><a href="{{route('dang-xuat')}}"><div>Đăng xuất</div></a></li>
                    @else
                        <li class="current"><a><div>Đăng ký</div></a>
                            <ul>
                                <li><a data-toggle="modal" data-target="#DangKyKhach">Đăng ký khách du lịch</a></li>
                                <li><a data-toggle="modal" data-target="#DangKyHDV"><div>Đăng ký hướng dẫn viên</div></a></li>
                            </ul>
                        </li>
                        <li class="current"><a data-toggle="modal" data-target="#DangNhap"><div>Đăng nhập</div></a></li>
                    @endif
                </ul>

                <div id="top-search">
                    <a id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="{{ route('tim-kiem') }}" method="get">
                        <input type="hidden" id="hiddenSearch" name="_token" value="{{csrf_token()}}">
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
