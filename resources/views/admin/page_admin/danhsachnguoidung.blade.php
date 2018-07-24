@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">       
        <div class="row">
            @if(isset($dskhach))
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Khách hàng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success thongbao">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dskhach as $dsk)
                        <tr class="odd gradeX" >
                            <td>{{$dsk->hoten}}</td>
                            <td>{{$dsk->email}}</td>
                            @if($dsk->gioitinh == 1)
                                <td>Nam</td>
                            @elseif($dsk->gioitinh == 0)
                                <td>Nữ</td>
                            @else
                                <td></td>
                            @endif
                            <td>{{$dsk->sodienthoai}}</td>
                            <td>{{$dsk->diachi}}</td> 
                            <td><a href="admin/edit-user/{{$dsk->id}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a></td>
                            <td>                  
                            @if($dsk->bill->count() == 0 && $dsk->comment->count() == 0)
                                <form action="{{route('xoa-user',$dsk->id)}}" method="post">
                                    @method('delete')
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger" onclick="return xoa();"><i class="fa fa-trash-o  fa-fw"></i></button>
                                </form>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($dshdv))
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Hướng dẫn viên</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
                @if(session('thongbao'))
                <div class="alert alert-success thongbao">
                    {{session('thongbao')}}
                </div>
                @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Quyền tạo tour</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dshdv as $dsh)
                        <tr class="odd gradeX" >
                            <td>{{$dsh->hoten}}</td>
                            <td>{{$dsh->email}}</td>
                            <td>{{$dsh->sodienthoai}}</td>
                            <td>{{$dsh->diachi}}</td>              

                            @if($dsh->trangthai == "" || $dsh->trangthai == 1)
                            <td>
                                <form action="{{route('cnhdv1',$dsh->id)}}" method="post" onclick="return chapnhan()">
                                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                                       <button type="submit" class="btn btn-primary">Chưa có quyền</button>    
                                </form>
                            </td>
                            @else
                            <td >Đã có quyền</td>
                            @endif
                            <td><a href="admin/edit-user/{{$dsh->id}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a></td>
                            <td>
                            @if($dsh->tour->count() == 0 && $dsh->comment->count() == 0)
                                <form action="{{route('xoa-user',$dsh->id)}}" method="post">
                                    @method('delete')
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger" onclick="return xoaHdv()"><i class="fa fa-trash-o  fa-fw"></i></button>
                                </form>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>    
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        function xoa(){
            return confirm('Bạn có chắc chắc muốn xóa khách hàng này?')
        }
        function xoaHdv(){
            return confirm('Bạn có chắc chắn muốn xóa hướng dẫn viên này?')
        }
        function chapnhan(){
            return confirm('Bạn có chắc chắn cấp quyền cho hướng dẫn viên này?')
        }
        // $(document).ready(function(){
        //     $('.thongbao').setTimeout(slideUp(),3000);
        // })
    </script>
@endsection