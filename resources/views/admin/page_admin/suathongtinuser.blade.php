@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="col-md-2 col-xs-2 col-ms-2"></div>
    <div class="col-md-8 col-xs-8 col-ms-8">
        <div class="panel panel-default" style="width: 80%; margin-top: 20px" >
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{Session::get('thongbao')}} 
                    </div>
                @endif
                @if(session('loi'))
                    <div class="alert alert-danger">
                        {{Session::get('loi')}} 
                    </div>
                @endif
                <div class="btn btn-success" style="width: 100%">
                    <h2>Sửa thông tin</h2>
                </div>
                <div class="panel-body">
                <form action="admin/edit-user/{{$dsk->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <label>Họ tên</label>
                    <span>{{$errors->first('hoten')}}</span>
                    <input type="text" class="form-control" name="hoten" value="{{$dsk->hoten}}">
                    <br>

                    <input type="checkbox" name="checkpassword" id="changePassword"><label> Thay đổi mật khẩu</label><br>

                    <label>Mật khẩu mới</label>
                    <span>{{$errors->first('password')}}</span>
                    <input type="password" class="form-control password" name="password" disabled="">
                    <br>

                    <label>Xác nhận mật khẩu mới</label>
                    <span>{{$errors->first('passwordAgain')}}</span>
                    <input type="password" class="form-control password" name="passwordAgain" disabled="">
                    <br>

                    <label>Ảnh đại diện</label>
                    @if(Session::has('loianh')) 
                        <span>{{Session::get('loianh')}}</span>
                    @endif
                    <input type="file" class="form-control" name="anhdaidien" value="{{$dsk->anhdaidien}}">
                    <br>

                    <label>Số điện thoại</label>
                    <span>{{$errors->first('sodienthoai')}}</span>
                    <input type="text" class="form-control" name="sodienthoai" value="{{$dsk->sodienthoai}}">
                    <br>

                    <label>Địa chỉ</label>
                    <span>{{$errors->first('diachi')}}</span>
                    <input type="text" class="form-control" name="diachi" value="{{$dsk->diachi}}">
                    <br>

                    <label>Năm sinh</label>
                    <span>{{$errors->first('namsinh')}}</span>
                    <input type="text" class="form-control" name="namsinh" value="{{$dsk->namsinh}}">
                    <br>

                    <label>Giới tính:</label> 
                    <span>{{$errors->first('gioitinh')}}</span>                               
                    @if($dsk->gioitinh == 1)
                    <input type="radio" name="gioitinh" value="1" style="margin-left: 80px" checked=""> Nam
                    <input type="radio" name="gioitinh" value="0" style="margin-left: 80px"> Nữ
                    @elseif($dsk->gioitinh == '0')
                    <input type="radio" name="gioitinh" value="1" style="margin-left: 80px"> Nam
                    <input type="radio" name="gioitinh" value="0" style="margin-left: 80px" checked=""> Nữ
                    @else
                    <input type="radio" name="gioitinh" value="1" style="margin-left: 80px"> Nam
                    <input type="radio" name="gioitinh" value="0" style="margin-left: 80px"> Nữ
                    @endif
                    <br>

                    <div align="center">
                        <button type="submit" class="btn btn-success">Sửa</button>
                    </div>
                </form>
                </div>
        </div>
    </div>
</div>
@endsection