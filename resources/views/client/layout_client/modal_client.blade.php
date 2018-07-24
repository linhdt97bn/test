<div class="modal" id="DangKyKhach">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn btn-danger modal-dangky" data-dismiss="modal">X</button>
            <div class="modal-header">  
                <div align="center">Đăng ký khách du lịch</div>
            </div>

            <div class="modal-body">
                @if(Session::has('thanhcongkhach'))
                    <div class="alert alert-success text-center thanhcongkhach">{{Session::get('thanhcongkhach')}}</div>
                @endif
                @if( (count($errors) > 0 && Session::has('loiDangKyKhach')) || Session::has('loiSodienthoai') )
                    <div class="loiDangKyKhach"></div>
                @endif

                <form action="{{route('dang-ky-khach')}}" method="POST" class="form-dangky">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <label>Họ tên</label> 
                        <span>{{$errors->first('hoten')}}</span>
                        <input class="form-control" name="hoten" type="text" value="{{ old('hoten') }}">

                        <label>Email</label> <span id="msgbox"></span>
                        <span>{{$errors->first('email')}}</span>           
                        <input class="form-control" name="email" type="email" value="{{ old('email') }}" id="email">

                        <label>Mật khẩu</label>
                        <span>{{$errors->first('password')}}</span>   
                        <input class="form-control" name="password" type="password">

                        <label>Nhập lại mật khẩu</label>
                        <span>{{$errors->first('passwordAgain')}}</span>   
                        <input class="form-control" name="passwordAgain" type="password">

                        <label>Số điện thoại</label>
                        <span>
                            {{$errors->first('sodienthoai')}}

                            @if(Session::has('loiSodienthoai'))
                                {{Session::get('loiSodienthoai')}}
                            @endif  
                        </span>
                        <input type="text" name="sodienthoai" class="form-control" value="{{ old('sodienthoai') }}">

                        <div align="center"><button type="submit" class="btn btn-lg btn-success btn-block" id="btnKhach" >Đăng ký</button></div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="DangKyHDV">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn btn-danger modal-dangky" data-dismiss="modal">X</button>
            <div class="modal-header">  
                <div align="center">Đăng ký Hướng dẫn viên</div>
            </div>
            <div class="modal-body">
                @if(Session::has('thanhconghdv'))
                    <div class="alert alert-success text-center thanhconghdv">{{Session::get('thanhconghdv')}}</div>
                @endif
                @if( (count($errors) > 0 && Session::has('loiDangKyHDV')) || Session::has('loiSodienthoaiHDV') )
                    <div class="loiDangKyHDV"></div>
                @endif

                <form action="{{route('dang-ky-hdv')}}" method="POST" class="form-dangky">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <label>Họ tên</label> 
                        <span>{{$errors->first('hoten')}}</span>
                        <input class="form-control" name="hoten" type="text" value="{{ old('hoten') }}">

                        <label>Email</label> <span id="msgbox1"></span>
                        <span>{{$errors->first('email')}}</span>
                        <input class="form-control" name="email" type="email" value="{{ old('email') }}" id="email1">

                        <label>Mật khẩu</label>
                        <span>{{$errors->first('password')}}</span>
                        <input class="form-control" name="password" type="password">

                        <label>Nhập lại mật khẩu</label>
                        <span>{{$errors->first('passwordAgain')}}</span>
                        <input class="form-control" name="passwordAgain" type="password">

                        <label>Số điện thoại</label>
                        <span>
                            {{$errors->first('sodienthoai')}}

                            @if(Session::has('loiSodienthoaiHDV'))
                                {{Session::get('loiSodienthoaiHDV')}}
                            @endif 
                        </span>
                        <input type="text" name="sodienthoai" class="form-control" value="{{ old('sodienthoai') }}">

                        <label>Địa chỉ</label>
                        <span>{{$errors->first('diachi')}}</span>
                        <input type="text" name="diachi" class="form-control" value="{{ old('diachi') }}">

                        <div align="center"><button type="submit" class="btn btn-lg btn-success btn-block" id="btnHDV">Đăng ký</button></div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="DangNhap">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn btn-danger modal-dangnhap" data-dismiss="modal">X</button>
            <div class="modal-header">  
                <div align="center">Đăng nhập</div>
            </div>
            <div class="modal-body">
                @if(Session::has('loiLogin'))
                    <div class="alert alert-danger text-center loiLogin">{{Session::get('loiLogin')}}</div>
                @endif
                @if((count($errors) > 0) && (Session::has('loiDangNhap')))
                    <div class="loiDangNhap"></div>
                @endif
                <form action="{{route('dang-nhap')}}" method="POST" class="form-dangnhap">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <label>Email</label>
                        <span>{{$errors->first('email')}}</span>
                        <input class="form-control" name="email" type="email" value="{{ old('email') }}">

                        <label>Mật khẩu</label>
                        <span>{{$errors->first('password')}}</span>
                        <input class="form-control" name="password" type="password">

                        <div align="center">
                            <input type="checkbox" name="ghinho" id="chkGhinho"> <label id="ghinho">Ghi nhớ đăng nhập</label>
                            <button type="submit" class="btn btn-lg btn-success btn-block" id="btnDangNhap">Đăng nhập</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@if(Auth::check())
    @if(isset($cttour))
    <div class="modal" id="DatTour">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn btn-danger modal-dattour" data-dismiss="modal">X</button>
                <div class="modal-header">  
                    <div align="center">Đặt Tour</div>
                </div>
                @if(Session::has('successDatTour'))
                    <div class="alert alert-success text-center successDatTour">{{Session::get('successDatTour')}}</div>
                @endif
                @if(Session::has('loiDonTour'))
                    <div class="alert alert-danger text-center loiDatTour">{{Session::get('loiDonTour')}}</div>
                @endif
                @if((count($errors) > 0 && Session::has('errorDatTour')) || Session::has('loiKhachMax') || Session::has('loiThoiGian'))
                    <div class="loiDatTour"></div>
                @endif

                <div class="modal-body">
                    <form action="{{route('dat-tour', $cttour->id)}}" method="POST" class="form-dattour">
                        <fieldset>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <label>Tên tour</label>
                            <input type="text" class="form-control" readonly="" name="tentour" value="{{$cttour->tentour}}">

                            <label>Địa điểm</label>
                            <input type="text" class="form-control" readonly="" name="tendiadiem" value="{{$cttour->place->tendiadiem}}">
                                
                            <label>Giá tiền</label>
                            <input type="text" class="form-control" readonly="" name="giatour" value="{{$cttour->giatour}}">

                            <label>Thời gian bắt đầu</label>
                            <span>
                                {{$errors->first('thoigianbatdau')}}
                                @if(session('loiThoiGian'))
                                    {{Session::get('loiThoiGian')}}
                                @endif
                            </span>
                            <input type="date" class="form-control" name="thoigianbatdau" value="{{old('thoigianbatdau')}}">
                                
                            <label>Số lượng khách đăng ký</label>
                            <span>
                                {{$errors->first('sokhachdangky')}}
                                @if(session('loiKhachMax'))
                                    {{Session::get('loiKhachMax')}}
                                @endif
                            </span>         
                            <input type="text" class="form-control" name="sokhachdangky"  value="{{old('sokhachdangky')}}">

                            <div align="center"><button type="submit" class="btn btn-lg btn-success btn-block" id="btnDatTour">Đặt tour</button></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
@endif

@if(Auth::check())
<div class="modal" id="SuaThongTin">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn btn-danger modal-suathongtin" data-dismiss="modal">X</button>
            <div class="modal-header">  
                <div align="center">Sửa thông tin cá nhân</div>
            </div>

            <div class="modal-body">
                @if(Session::has('suathanhcong'))
                    <div class="alert alert-success text-center successSuaThongTin">{{Session::get('suathanhcong')}}</div>
                @endif
                @if((count($errors) > 0 && Session::has('loiSuaNguoiDung')) || Session::has('loiNamSinh') || Session::has('loiAnhDaiDien') || Session::has('loiSuaSoDienThoai') )
                    <div class="loiSuaThongTin"></div>
                @endif
                <form action="{{route('sua-thong-tin')}}" method="post" enctype="multipart/form-data" class="form-suathongtin">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <label>Họ tên</label>
                        <span>{{$errors->first('hoten')}}</span>
                        <input type="text" class="form-control" name="hoten" value="{{Auth::user()->hoten}}">

                        <input type="checkbox" name="checkpassword" id="changePassword"><label> Thay đổi mật khẩu</label><br>

                        <label>Mật khẩu mới</label>
                        <span>{{$errors->first('password')}}</span>
                        <input type="password" class="form-control password" name="password" disabled="">

                        <label>Nhập lại mật khẩu</label>
                        <span>{{$errors->first('passwordAgain')}}</span>
                        <input type="password" class="form-control password" name="passwordAgain" disabled="">

                        <label>Ảnh đại diện</label>
                        @if(Session::has('loiAnhDaiDien')) 
                            <span>{{Session::get('loiAnhDaiDien')}}</span>
                        @endif
                        <input type="file" class="form-control" name="anhdaidien" value="{{Auth::user()->anhdaidien}}">

                        <label>Số điện thoại</label>
                        <span>
                            {{$errors->first('sodienthoai')}}
                            @if(Session::has('loiSuaSoDienThoai')) 
                                {{Session::get('loiSuaSoDienThoai')}}
                            @endif
                        </span>
                        <input type="text" class="form-control" name="sodienthoai" value="{{Auth::user()->sodienthoai}}">

                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="diachi" value="{{Auth::user()->diachi}}">

                        <label>Năm sinh</label>
                        @if(Session::has('loiNamSinh')) 
                            <span>{{Session::get('loiNamSinh')}}</span>
                        @endif
                        <input type="text" class="form-control" name="namsinh" value="{{Auth::user()->namsinh}}">

                        <label>Gioi tinh:</label>                                
                        @if(Auth::user()->gioitinh == 1)
                        <input type="radio" name="gioitinh" value="1" style="margin-left: 80px" checked=""> <span>Nam</span>
                        <input type="radio" name="gioitinh" value="0" style="margin-left: 80px"> <span>Nữ</span>
                        @elseif(Auth::user()->gioitinh === 0)
                        <input type="radio" name="gioitinh" value="1" style="margin-left: 80px"> <span>Nam</span>
                        <input type="radio" name="gioitinh" value="0" style="margin-left: 80px" checked=""> <span>Nữ</span>
                        @else
                        <input type="radio" name="gioitinh" value="1" style="margin-left: 80px"> <span>Nam</span>
                        <input type="radio" name="gioitinh" value="0" style="margin-left: 80px"> <span>Nữ</span>
                        @endif

                        <div align="center">
                            <button type="submit" class="btn btn-success" id="btnSuaThongTin">Sửa</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

<div class="modal" id="QuyDinh">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="btn btn-danger modal-suathongtin" data-dismiss="modal">X</button>
            <div class="modal-header">  
                <div align="center">Quy định</div>
            </div>

            <div class="modal-body">
                <fieldset>
                    <p>Khách hàng cần đăng nhập trước khi đặt tour</p>

                    <p>Website sử dụng hình thức thanh toán qua Paypal để thanh toán Online</p>

                    <p>Sau khi đăng ký hướng dẫn viên, cần liên hệ với admin để được xét cấp quyền mở tour</p>

                    <p>Khách hàng có thể chỉnh sửa đơn đặt tour của mình nếu hướng dẫn viên của tour đó chưa xác nhận</p>

                    <p>Chức năng đánh giá: Chỉ những khách hàng đã đi tour mới có quyền đánh giá</p>

                    <p>Chức năng bình luận: Cần đăng nhập mới có thể bình luận</p>

                    <p>Khách hàng sau khi hoàn tất việc đi tour có thể đăng ký tiếp tục đi tour đó</p>

                    <p>Khi đăng ký với tư cách là hướng dẫn viên, sẽ không có quyền đặt tour</p>

                    <span style="color: blue; float: right; margin-right: 20px">ADMIN</span>
                </fieldset>
            </div>
        </div>
    </div>
</div>
