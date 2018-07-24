@extends('hdv.layout_hdv.index')
@section('content')
<div id="page-wrapper">
   <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-8 col-sm-offset-2">
        <div class="panel panel-default" style="margin-top: 20px" >
            @if(session('thanhcong'))
                <div class="alert alert-success">
                    {{Session::get('thanhcong')}}
                </div>
            @endif
            @if(session('loi'))
                <div class="alert alert-danger">
                    {{Session::get('loi')}}
                </div>
            @endif
            <div class="btn btn-success" style="width: 100%">
                <h2>Sửa đơn tour</h2>
            </div>
            <div class="panel-body">
                <form action="hdv/edit-bill/{{$bill->id}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                    <label>Tên tour</label>
                    <input type="text" class="form-control" name="tentour" value="{{$bill->tour->tentour}}" readonly="">
                    <br>
                    <label>Email đăng ký</label>
                    <input type="text" class="form-control" name="email" value="{{$bill->users->email}} " readonly="">
                    <br>
                    <label>Số khách đăng ký</label>
                    <span >{{$errors->first('sokhachdangky')}}</span>
                    <input type="text" class="form-control" name="sokhachdangky" value="{{$bill->sokhachdangky}}">
                    <br>
                    <label>Thời gian bắt đầu</label>
                    <span>{{$errors->first('thoigianbatdau')}}</span>
                    <input type="text" class="form-control" name="thoigianbatdau" value="{{$bill->thoigianbatdau}} ">
                    <br>
                    <div align="center">
                    <button type="submit" class="btn btn-success">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection