@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="col-md-2 col-xs-2 col-ms-2"></div>
    <div class="col-md-8 col-xs-8 col-ms-8">
        <div class="panel panel-default" style="width: 80%; margin-top: 20px" >
            
                @if(session('thanhcong'))
                    <div class="alert alert-success">
                        {{Session::get('thanhcong')}}
                    </div>
                @endif
                @if(!isset($dd))
                <div class="btn btn-success" style="width: 100%">
                    <h2> Thêm địa điểm</h2>
                </div>
                <div class="panel-body">
                    <form action="{{route('diadiem.store')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                        <label>Địa điểm</label>
                        <span>{{$errors->first('tendiadiem')}}</span>
                        <input type="text" class="form-control" name="tendiadiem">
                        <br>
                        <div align="center">
                            <button type="submit" class="btn btn-success">Thêm</button>
                        </div>
                    </form>
                </div>
                @else
                <div class="btn btn-success" style="width: 100%">
                    <h2> Sửa địa điểm</h2>
                </div>          
                <div class="panel-body">
                    <form action="{{route('diadiem.update',$dd->id)}}" method="post">
                        @method('put')
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                        <label>Địa điểm</label>
                        <span>{{$errors->first('tendiadiem')}}</span>
                        <input type="text" class="form-control" name="tendiadiem" value="{{$dd->tendiadiem}}">
                        <br>
                        <div align="center">
                        <button type="submit" class="btn btn-success">Sửa</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection