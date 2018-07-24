@extends('hdv.layout_hdv.index')
@section('trang-chu')
@endsection()
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Tour của tôi</small>
                </h1>
            </div>
            @if(session('thongbao'))
            <div class="alert alert-success thongbao">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên tour</th>
                        <th>Địa điểm</th>
                        <th>Số khách tối đa</th>
                        <th>Số ngày đi</th>
                        <th>Gía tour</th>
                        <th>Hình ảnh</th>
                        <th>Sửa</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tour as $dst)  
                        <tr class="odd gradeX">
                            <td><a href="{{route('chi-tiet',$dst->id)}}">{{$dst->tentour}}</a></td>
                            <td>{{$dst->place->tendiadiem}}</td>
                            <td>{{$dst->sokhachtoida}}</td>
                            <td>{{$dst->songaydi}}</td>
                            <td>{{number_format($dst->giatour)}}</td>
                            @if(strlen($dst->hinhanh)>0)  
                                <td><img src="upload/{{$dst->hinhanh}}" width="60" height="60"></td>
                            @else
                                <td></td>
                            @endif
                            <td><a href="{{route('tour.edit',$dst->id)}} ">
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>
                            </a></td>
                            <td>
                                @if($dst->trangthaitour == 1)
                                <form action="{{route('anhienTour',$dst->id)}}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <button type="submit" onclick="return antour()" class="btn btn-success">Hiện</button>
                                </form>
                                @else
                                <form action="{{route('anhienTour',$dst->id)}}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <button type="submit" onclick="return hientour()" class="btn btn-danger">Ẩn</button>
                                </form>                                
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    function antour(){
        return confirm("Bạn có chắc muốn ẩn tour này?")
    }
    function hientour(){
        return confirm("Bạn chắc chắn muốn hiện tour này?")
    }
</script>
@endsection