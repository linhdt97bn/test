@extends('hdv.layout_hdv.index')
@section('content')
<div id="page-wrapper">
    <div class="col-md-8 col-sm-8 col-xs-8 col-sm-offset-2">
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

        @if(!isset($edit_tour))
            <div class="panel panel-default add-tour">
                <div class="btn btn-success">Thêm Tour</div>
                <div class="panel-body">
                    <form action="hdv/tour" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                        <label>Tên tour</label>
                        <span>{{$errors->first('tentour')}}</span>
                        <input type="text" class="form-control" name="tentour"value="{{old('tentour')}}">

                        <label>Giá tour</label>
                        <span>{{$errors->first('giatour')}}</span>
                        <input type="text" class="form-control" name="giatour" value="{{old('giatour')}}">

                        <label>Hình ảnh</label>
                        <span>{{$errors->first('hinhanh')}}</span>
                        <input type="file" class="form-control" name="hinhanh">

                        <label>Số khách tối đa</label>
                        <span>{{$errors->first('sokhachtoida')}}</span>
                        <input type="text" class="form-control" name="sokhachtoida" value="{{old('sokhachtoida')}}">

                        <label>Số ngày đi</label>
                        <select class="form-control songaydi" name="songaydi">
                            @for($i = 1; $i <= 5; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                       
                        <label>Lộ trình</label>
                        <span>{{$errors->first('ngay1')}}</span>
                        <div class="lotrinhdi">        
                            <div class="lotrinh" id="lotrinh1">
                                <label class="ngaydi">Ngày 1</label>
                                <label class="dd1">Địa điểm</label>
                                <select class="form-control diadiem" id="diadiem1">
                                    @foreach($diadiem as $dd)
                                        <option value="{{$dd->id}}">{{$dd->place_name}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="place_1" id="place_1">

                                <label>Mô tả</label>
                                <textarea class="form-control ckeditor" name="ngay1" rows="8"></textarea>
                            </div>
                        </div>

                        <div align="center">
                            <button type="submit" class="btn btn-success">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="panel panel-default edit-tour">
                <div class="btn btn-success">Sửa Tour</div>
                <div class="panel-body">
                    <form action="{{route('tour.update', $edit_tour->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                        <label>Tên tour</label>
                        <span>{{$errors->first('tentour')}}</span>
                        <input type="text" class="form-control" name="tentour"value="{{$edit_tour->tour_name}}">

                        <label>Giá tour</label>
                        <span>{{$errors->first('giatour')}}</span>
                        <input type="text" class="form-control" name="giatour" value="{{$edit_tour->price}}">

                        <label>Hình ảnh</label>
                        <span>{{$errors->first('hinhanh')}}</span>
                        <input type="file" class="form-control" name="hinhanh" value="{{$edit_tour->image_tour}}">

                        <label>Số khách tối đa</label>
                        <span>{{$errors->first('sokhachtoida')}}</span>
                        <input type="text" class="form-control" name="sokhachtoida" value="{{$edit_tour->customer_max}}">

                        <div align="center">
                            <button type="submit" class="btn btn-success">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="script"></div>
@endsection