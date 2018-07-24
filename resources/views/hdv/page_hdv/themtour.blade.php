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
            @if(!isset($idt))
            <div class="btn btn-success" style="width: 100%">
                <h2> Thêm Tour</h2>
            </div>
            <div class="panel-body">
                <form action="hdv/tour" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                    <label>Tên tour</label>
                    <span>{{$errors->first('tentour')}}</span>
                    <input type="text" class="form-control" name="tentour"value="{{old('tentour')}}">
                    <br>
                    <label>Địa điểm</label>
                    <select name="diadiem" class="form-control">
                        @foreach($dd as $dc)
                        <option value="{{$dc->id}}">{{$dc->tendiadiem}}</option>
                        @endforeach
                    </select>
                    <br>
                    <label>Số khách tối đa</label>
                    <span>{{$errors->first('sokhachtoida')}}</span>
                    <input type="text" class="form-control" name="sokhachtoida" value="{{old('sokhachtoida')}}">
                    <br>
                    <label>Số ngày đi</label>
                    <span >{{$errors->first('songaydi')}}</span>
                    <input type="text" class="form-control" name="songaydi" value="{{old('songaydi')}}">
                    <br>
                    <label>Gía tour</label>
                    <span>{{$errors->first('giatour')}}</span>
                    <input type="text" class="form-control" name="giatour" value="{{old('giatour')}}">
                    <br>
                    <label>Mô tả</label>
                    <span>{{$errors->first('mota')}}</span>
                    <textarea class="form-control" name="mota" rows="8" class="ckeditor" id="mota">{{old('mota')}}</textarea>
                    <br>
                    <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="hinhanh">
                    <br>
                    <div align="center">
                    <button type="submit" class="btn btn-success">Thêm</button>
                    </div>
                </form>
            </div>
            @else
            <div class="btn btn-success" style="width: 100%">
                <h2> Sửa Tour</h2>
            </div>
            <div class="panel-body">
                <form action="{{route('tour.update', $idt)}}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                    <label>Tên tour</label>
                    <span>{{$errors->first('tentour')}}</span>
                    <input type="text" class="form-control" name="tentour"value="{{$idt->tentour}}">
                    <br>
                    <label>Địa điểm</label>
                    <select name="diadiem" class="form-control">
                        @foreach($dd as $dc)
                        <option value="{{$dc->id}}" @if($idt->diadiem_id == $dc->id) selected="" @endif >{{$dc->tendiadiem}}</option>
                        @endforeach
                    </select>
                    <br>
                    <label>Số khách tối đa</label>
                    <span >{{$errors->first('sokhachtoida')}}</span>
                    <input type="text" class="form-control" name="sokhachtoida" value="{{$idt->sokhachtoida}}">
                    <br>
                    <label>Số ngày đi</label>
                    <span>{{$errors->first('songaydi')}}</span>
                    <input type="text" class="form-control" name="songaydi" value="{{$idt->songaydi}}">
                    <br>
                    <label>Gía tour</label>
                    <span>{{$errors->first('giatour')}}</span>
                    <input type="text" class="form-control" name="giatour" value="{{$idt->giatour}}">
                    <br>
                    <label>Mô tả</label>
                    <span>{{$errors->first('mota')}}</span>
                    <textarea class="form-control" name="mota" rows="8">{{$idt->mota}}</textarea>
                    <br>
                    <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="hinhanh">
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
</div>
<script src="CK/ckeditor.js"></script>
<script> CKEDITOR.replace('mota'); </script>
@endsection