<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="logo">
                <a class="standard-logo"><img src="upload/covietnam.png"></a>
            </div>

            <nav id="primary-menu">
                <ul>
                    <li class="current"><a href="{{ route('trang-chu') }}">{{ trans('i18n.button.home') }}</a></li>
                    <li class="current"><a data-toggle="modal" data-target="#QuyDinh">{{ trans('i18n.button.rule') }}</a></li>
                    <li class="current"><a>{{ trans('i18n.button.contact') }}</a></li>

                    <li class="current"><a>{{ trans('i18n.button.place') }}</a>
                        <ul>
                            @foreach ($diadiem as $province)
                                @if ($province->parent_id == 0)
                                <li>
                                    <a>{{$province->place_name}}</a>
                                    <ul>
                                        @foreach ($diadiem as $place)
                                            @if ($place->parent_id == $province->id)
                                                <li><a href="{{ route('tour-dia-diem', $place->id) }}">{{$place->place_name}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    @if(Auth::check())
                        <notification v-bind:notifications="notifications"></notification>
                        <li class="current">
                            <a class="user">
                                <img src="upload/{{ Auth::user()->avatar }}" height="60" width="60"> 
                                {{ Auth::user()->name }}
                            </a>
                            <ul>    
                                <li><a data-toggle="modal" data-target="#SuaThongTin">{{ trans('i18n.button.edit_profile') }}</a></li>
                                @if(Auth::user()->role == 1)
                                    <li><a href="{{ route('lich-su') }}">{{ trans('i18n.button.bill_log') }}</a></li>
                                @elseif(Auth::user()->role == 2)
                                    <li><a href="{{ route('trang-chu-hdv') }}">{{ trans('i18n.button.tour_manage') }}</a></li>
                                @elseif(Auth::user()->role == 3)
                                    <li><a href="{{ route('trang-chu-admin') }}">{{ trans('i18n.button.page_manage') }}</a></li>
                                @endif
                            </ul>
                        </li>  
                        <li class="current"><a href="{{ route('dang-xuat') }}">{{ trans('i18n.button.logout') }}</a></li>
                    @else
                        <li class="current"><a data-toggle="modal" data-target="#DangKy">{{ trans('i18n.button.register') }}</a></li>
                        <li class="current"><a data-toggle="modal" data-target="#DangNhap">{{ trans('i18n.button.login') }}</a></li>
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
