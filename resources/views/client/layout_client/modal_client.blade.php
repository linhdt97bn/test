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
