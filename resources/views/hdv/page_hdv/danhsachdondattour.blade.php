@extends('hdv.layout_hdv.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
    	@if(isset($bill))
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn đặt tour</small>
                </h1>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên tour</th>
                        <th>Email khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Số khách tham quan</th>
                        <th>Tổng tiền</th>
                        <th>Ngày tạo đơn</th>
                        <th>Ngày khởi hành</th>
                        <th>Tình trạng đơn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $dst)
                        @foreach($dst->bill as $dsb)
                            <tr class="odd gradeX">
                                <td>{{$dsb->tour->tentour}}</td>
                                <td>{{$dsb->users->email}}</td>
                                <td>{{$dsb->users->sodienthoai}}</td>
                                <td>{{$dsb->sokhachdangky}}</td>
                                <td>{{number_format($dsb->tongtien)}}</td>
                                <td>{{$dsb->created_at}}</td>
                                <td>{{$dsb->thoigianbatdau}}</td> 
                                @if($dsb->tinhtrangdon == 0) 
                                <td style="color: blue">Đơn mới</td> 
                                @elseif($dsb->tinhtrangdon == 1) 
                                <td>Được chấp nhận</td>
                                @elseif($dsb->tinhtrangdon == 2) 
                                <td style="color: red">Bị từ chối</td>
                                @elseif($dsb->tinhtrangdon == 3) 
                                <td style="color: green"> Đã thanh toán</td> 
                                @elseif($dsb->tinhtrangdon == 4) 
                                <td style="color: #00FA9A">Đã hoàn tất</td>  
                                @endif  
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        @elseif(isset($newbill))
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn đặt tour mới</small>
                </h1>
            </div>
            @if(Session::has('thongbao'))
                <div class="alert alert-success thongbao">{{Session::get('thongbao')}}</div>
            @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên tour</th>
                        <th>Email khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Số khách tham quan</th>
                        <th>Tổng tiền</th>
                        <th>Ngày tạo đơn</th>
                        <th>Ngày khởi hành</th>
                        <th colspan="2">Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newbill as $dst)
                        @foreach($dst->bill as $dsb)
                        	@if($dsb->tinhtrangdon == 0) 
                            <tr align="center">
                                <td>{{$dsb->tour->tentour}}</td>
                                <td>{{$dsb->users->email}}</td>
                                <td>{{$dsb->users->sodienthoai}}</td>
                                <td>{{$dsb->sokhachdangky}}</td>
                                <td>{{number_format($dsb->tongtien)}}</td>
                                <td>{{date('Y-m-d',strtotime($dsb->created_at))}}</td>
                                <td>{{$dsb->thoigianbatdau}}</td> 
                                <td>
                                    <form action="{{route('chapnhan',$dsb->id)}}" method="post" onclick="return chapnhan()">
                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                           <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i>Chấp nhận</button>    
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('tuchoi',$dsb->id)}}" method="post" onclick="return tuchoi()">
                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                           <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>Từ chối</button>    
                                    </form>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        @elseif(isset($billtt))
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn đặt tour đã thanh toán</small>
                </h1>
            </div>
            @if(Session::has('thongbao'))
                <div class="alert alert-success thongbao">{{Session::get('thongbao')}}</div>
            @endif

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên tour</th>
                        <th>Email khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Số khách tham quan</th>
                        <th>Tổng tiền</th>
                        <th>Ngày khởi hành</th>
                        <th>Xác nhận hoàn tất </th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($billtt as $dst)
                        @foreach($dst->bill as $dsb)
                            @if($dsb->tinhtrangdon == 3) 
                            <tr align="center">
                                <td>{{$dsb->tour->tentour}}</td>
                                <td>{{$dsb->users->email}}</td>
                                <td>{{$dsb->users->sodienthoai}}</td>
                                <td>{{$dsb->sokhachdangky}}</td>
                                <td>{{number_format($dsb->tongtien)}}</td>
                                <td>{{$dsb->thoigianbatdau}}</td> 
                                <td>
                                    <form action="{{route('xacnhanditour',$dsb->id)}}" method="post" onclick="return xacnhan()">
                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                           <button type="submit" class="btn btn-primary">Xác nhận</button>    
                                    </form>
                                </td> 
                                <td><a href="hdv/edit-bill/{{$dsb->id}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a></td>
                                <td>
                                    <form action="{{route('xoatour',$dsb->id)}}" method="post" onclick="return xacnhanxoa()">
                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                           <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i></button>    
                                    </form>
                                </td> 
                            </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn đặt tour được chấp nhận</small>
                </h1>
            </div>
            @if(Session::has('thongbao'))
                <div class="alert alert-success thongbao">{{Session::get('thongbao')}}</div>
            @endif

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên tour</th>
                        <th>Email khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Số khách tham quan</th>
                        <th>Tổng tiền</th>
                        <th>Ngày khởi hành</th>
                        <th>Xác nhận thanh toán</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($billcn as $dst)
                        @foreach($dst->bill as $dsb)
                            @if($dsb->tinhtrangdon == 1) 
                            <tr align="center">
                                <td>{{$dsb->tour->tentour}}</td>
                                <td>{{$dsb->users->email}}</td>
                                <td>{{$dsb->users->sodienthoai}}</td>
                                <td>{{$dsb->sokhachdangky}}</td>
                                <td>{{number_format($dsb->tongtien)}}</td>
                                <td>{{$dsb->thoigianbatdau}}</td> 
                                <td>
                                    <form action="{{route('xacnhantt',$dsb->id)}}" method="post" onclick="return xacnhantt()">
                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                           <button type="submit" class="btn btn-primary">Xác nhận</button>    
                                    </form>
                                </td> 
                                <td><a href="hdv/edit-bill/{{$dsb->id}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a></td>
                                <td>
                                    <form action="{{route('xoatour',$dsb->id)}}" method="post" onclick="return xacnhanxoa()">
                                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                           <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i></button>    
                                    </form>
                                </td>                               
                            </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>       
        @endif
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        function chapnhan(){
            return confirm("Bạn chắc chắn chấp nhận đơn này?");
        }

        function tuchoi(){
            return confirm("Bạn chắc chắn từ chối đơn này?");
        }
        function xacnhantt(){
            return confirm("Bạn có chắc chắn đơn này đã thanh toán?");
        }
        function xacnhan(){
            return confirm('Bạn chắc chắn hoàn tất đơn này?');
        }
        function xacnhanxoa(){
            return confirm("Bạn có chắc chắn xóa đơn này?");
        }
    </script>
@endsection