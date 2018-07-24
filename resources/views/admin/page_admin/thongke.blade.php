@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            @if(isset($bill))
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Đơn hàng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr >
                        <th>Tên tour</th>
                        <th>Email khách</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian khởi hành</th>
                        <th>Ngày đặt tour</th>
                        <th>Tình trạng đơn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $dsb)
                        <tr class="odd gradeX" >
                            <td><a href="{{route('chi-tiet',$dsb->tour_id)}}">{{$dsb->tour->tentour}}</a></td>
                            <td>{{$dsb->users->email}}</td>
                            <td>{{number_format($dsb->tongtien)}}</td>
                            <td>{{$dsb->thoigianbatdau}}</td>
                            <td><?php echo date('Y-m-d', strtotime($dsb->created_at)) ?></td>
                            @if($dsb->tinhtrangdon == 0) 
                            <td style="color: blue">Đơn mới</td> 
                            @elseif($dsb->tinhtrangdon == 1) 
                            <td>Đưọc chấp nhận</td>
                            @elseif($dsb->tinhtrangdon == 2) 
                            <td style="color: red"> Bị từ chối</td>
                            @elseif($dsb->tinhtrangdon == 3) 
                            <td style="color: green"> Đã thanh toán</td> 
                            @elseif($dsb->tinhtrangdon == 3) 
                            <td style="color: green"><i class="glyphicon glyphicon-ok"></i> Đã thanh toán</td>  
                            @elseif($dsb->tinhtrangdon == 4) 
                                <td style="color: #00FA9A"> Hoàn tất</td>   
                            @endif  
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($doanhthu))
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Doanh thu</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Hướng dẫn viên</th>
                        <th>ID đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Số tiền HDV nhận đưọc</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sum = 0 ?>
                    @foreach($doanhthu as $dt)
                        <tr class="odd gradeX">
                            <td>{{$dt->tour->users->email}}</td>
                            <td>{{$dt->id}}</td>
                            <td>{{number_format($dt->tongtien)}}</td>
                            <td>{{number_format($dt->tongtien * 9/10)}}</td>
                            <?php $sum += $dt->tongtien ?>                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="font-size: 20px">Tổng doanh thu: <b style="color: red"><?php echo number_format($sum).' VND' ?></b></div>
            @endif
        </div>
    </div>
</div>
@endsection