@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">      
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Bình luận</small>
                </h1>
            </div>
            @if(session('thongbao'))
                <div class="alert alert-success thongbao">
                    {{session('thongbao')}}
                </div>
            @endif   
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>Tên tour</th>
                        <th>Email bình luận</th>
                        <th>Bình luận</th>
                        <th>Trả lời</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($tour as $to)
                        @if($to->comment->count()>0)
                            <tr class="odd gradeX">
                                <?php $flag = true; ?>
                                @foreach($to->comment as $bl)
                                   @if($bl->parent_id ==0 )
                                        @if($flag == true ) 
                                            <td><a href="{{route('chi-tiet',$to->id)}}">{{$to->tentour}}</a></td>
                                            <?php $flag = false; ?>
                                        @else
                                            <td></td>
                                        @endif
                                        <td>{{$bl->users->email}}</td>
                                        <td>{{$bl->noidung}}</td>
                                        <td></td>
                                        <td>
                                            @if($bl->trangthaibinhluan == 0)
                                                <div style="color: red"> Ẩn </div>
                                            @else
                                                <form action="admin/anbinhluan/{{$bl->id}}" method="post" onclick="return an()">
                                                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                       <button type="submit" class="btn btn-primary">Hiện </button>    
                                                </form>
                                            @endif
                                        </td></tr>
                                        @foreach($to->comment as $tl)
                                            @if($tl->parent_id == $bl->id && $bl->trangthaibinhluan == 1)
                                                <tr class="odd gradeX">
                                                    <td></td>
                                                    <td>{{$tl->users->email}}</td>
                                                    <td></td>
                                                    <td>{{$tl->noidung}}</td>
                                                    <td>
                                                        @if($tl->trangthaibinhluan == 0)
                                                            <div style="color: red"> Ẩn </div>
                                                        @else
                                                            <form action="admin/anbinhluan/{{$tl->id}}" method="post" onclick="return an()">
                                                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                   <button type="submit" class="btn btn-primary">Hiện </button>    
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        function an(){
            return confirm('Bạn có chắc chắn muốn ẩn bình luận này?')
        }
    </script>
@endsection