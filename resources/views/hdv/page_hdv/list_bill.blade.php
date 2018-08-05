@extends('hdv.layout_hdv.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid"> 	
        @if(isset($bill))
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn đặt tour</small>
                </h1>
            </div>
            <div class="clear"></div>
            @if(Session::has('disagree_success'))
                <div class="alert alert-success text-center">{{ Session::get('disagree_success') }}</div>
            @elseif(Session::has('agree_success'))
                <div class="alert alert-success text-center">{{ Session::get('agree_success') }}</div>
            @elseif(Session::has('confirm_finish'))
                <div class="alert alert-success text-center">{{Session::get('confirm_finish')}}</div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên tour</th>
                        <th>Email khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng đơn</th>
                        <th>Quản lý</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $dst)
                        @foreach($dst->bill as $dsb)
                            <tr align="center" class="newbill">
                                <td><a href="{{ route('chi-tiet', $dsb->tour->id) }}">{{ $dsb->tour->tour_name }}</a></td>
                                <td>{{ $dsb->users->email }}</td>
                                <td>{{ number_format($dsb->total_price) }} VNĐ</td>
                                @if($dsb->status == 0) 
                                    <td>Đơn mới</td> 
                                @elseif($dsb->status == 1) 
                                    <td>Được chấp nhận</td>
                                @elseif($dsb->status == 2) 
                                    <td>Bị từ chối</td>
                                @elseif($dsb->status == 3) 
                                    <td> Đã thanh toán</td> 
                                @elseif($dsb->status == 4) 
                                    <td>Đã hoàn tất</td>  
                                @endif 

                                @if($dsb->status == 0)
                                    <td>
                                        <form action="{{ route('edit-bill.update', $dsb->id) }}" method="post" onclick="return chapnhan()">
                                            @method('put')
                                            <input type="hidden" name="status" value="1">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i>Chấp nhận</button>
                                        </form>

                                        <button class="btn btn-danger" data-toggle="modal" data-target="#tu-choi-{{ $dsb->id }}"><i class="glyphicon glyphicon-remove"></i>Từ chối</button>

                                        <div class="modal tu-choi" id="tu-choi-{{ $dsb->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    @if(count($errors)>0)
                                                        <div class="alert alert-danger text-center">{{ $errors->first('response') }}</div>
                                                    @endif
                                                    <form action="{{ route('edit-bill.update', $dsb->id) }}" method="post">
                                                        @method('put')
                                                        <input type="hidden" name="status" value="2">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                        <label>Lý do từ chối</label>
                                                        <input type="text" name="response" class="form-control" rows="5"></textarea>

                                                        <div align="center"><button type="submit" class="btn btn-danger">Gửi</button></div>  
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                @elseif($dsb->status == 3)
                                    <td>
                                        <form action="{{ route('edit-bill.update', $dsb->id) }}" method="post" onclick="return xacnhan()">
                                            @method('put')
                                            <input type="hidden" name="status" value="4">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-info">Hoàn tất</button>    
                                        </form>
                                    </td>
                                @else
                                    <td></td>
                                @endif

                                <td>
                                    <button class="btn btn-success" data-toggle="modal" data-target="#chi-tiet-{{ $dsb->id }}">Chi tiết</button>

                                    <div class="modal" id="chi-tiet-{{ $dsb->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="alert alert-success text-center"><h1>ĐƠN ĐẶT TOUR</h1></div>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <tr>
                                                        <th>Tên tour</th>
                                                        <td>{{ $dsb->tour->tour_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email khách hàng</th>
                                                        <td>{{ $dsb->tour->users->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Số điện thoại khách hàng</th>
                                                        <td>{{ $dsb->tour->users->phone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Địa chỉ</th>
                                                        <td>{{ $dsb->tour->users->address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Số người lớn</th>
                                                        <td>{{ $dsb->adult_number }} người</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Số trẻ nhỏ</th>
                                                        <td>{{ $dsb->child_number }} người</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng tiền</th>
                                                        <td>{{ number_format($dsb->total_price) }} VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ngày đặt tour</th>
                                                        <td>{{ date('d/m/Y', strtotime($dsb->created_at)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ngày khởi hành</th>
                                                        <td>{{ date('d/m/Y', strtotime($dsb->time_start)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Yêu cầu khác</th>
                                                        <td>{{ $dsb->request }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Trả lời</th>
                                                        <td>{{ $dsb->response }}</td>
                                                    </tr>
                                                </table>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        function chapnhan(){
            return confirm("Bạn chắc chắn chấp nhận đơn này?");
        }

        function xacnhan(){
            return confirm('Bạn chắc chắn hoàn tất đơn này?');
        }
    </script>
@endsection