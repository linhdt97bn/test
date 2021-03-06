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
                <div class="clear"></div>
                @if(session('delete_user_success'))
                    <div class="alert alert-success text-center">
                        {{session('delete_user_success')}}
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
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dskhach as $dsk)
                            <tr class="odd gradeX" >
                                <td>{{ $dsk->name }}</td>
                                <td>{{ $dsk->email }}</td>
                                @if($dsk->gender == 1)
                                    <td>Nam</td>
                                @elseif($dsk->gender === 0)
                                    <td>Nữ</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{ $dsk->phone }}</td>
                                <td>{{ $dsk->address }}</td> 
                                <td>         
                                @if($dsk->bill->count() == 0)
                                    <form action="{{ route('xoa-user', $dsk->id) }}" method="post">
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
                <div class="clear"></div>
                @if(session('permit_success'))
                    <div class="alert alert-success text-center">
                        {{session('permit_success')}}
                    </div>
                @elseif(session('delete_user_success'))
                    <div class="alert alert-success text-center">
                        {{session('delete_user_success')}}
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
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dshdv as $dsh)
                            <tr class="odd gradeX" >
                                <td>{{ $dsh->name }}</td>
                                <td>{{ $dsh->email }}</td>
                                <td>{{ $dsh->phone }}</td>
                                <td>{{ $dsh->address }}</td>              

                                @if($dsh->status == "" || $dsh->status == 1)
                                    <td>
                                        <form action="{{ route('cnhdv1', $dsh->id) }}" method="post" onclick="return chapnhan()">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-primary">Chưa có quyền</button>    
                                        </form>
                                    </td>
                                @else
                                    <td>Đã có quyền</td>
                                @endif
                                <td>
                                    @if($dsh->tour->count() == 0)
                                        <form action="{{ route('xoa-user',$dsh->id) }}" method="post">
                                            @method('delete')
                                            {{ csrf_field() }}
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
    </script>
@endsection