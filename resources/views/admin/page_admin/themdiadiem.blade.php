@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="text-center">
        <button id="add-province" class="btn btn-success">Thêm tỉnh</button>
        <button id="add-place" class="btn btn-danger">Thêm địa điểm</button>
    </div>
    @if(session('add_place_success'))
        <div class="alert alert-success text-center">
            {{ Session::get('add_place_success') }}
        </div>
    @elseif(session('add_province_success'))
        <div class="alert alert-success text-center">
            {{ Session::get('add_province_success') }}
        </div>
    @endif
    @if(count($errors)> 0)
        <div class="alert alert-danger text-center">
            {{ $errors->first('tendiadiem') }}
        </div>
    @endif
    <div class="col-md-8 col-xs-8 col-ms-8 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
        <div class="panel panel-default add-place">          
            <div class="btn btn-success">Thêm địa điểm</div>
            <div class="panel-body">
                <form action="{{ route('diadiem.store') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                    <label>Tỉnh</label>
                    <select name="province" class="form-control">
                        @foreach($province as $prv)
                            <option value="{{ $prv->id }}">{{ $prv->place_name }}</option>
                        @endforeach
                    </select>

                    <label>Địa điểm</label>
                    <input type="text" class="form-control" name="tendiadiem">

                    <div align="center">
                        <button type="submit" class="btn btn-success">Thêm</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default add-province">          
            <div class="btn btn-success">Thêm tỉnh</div>
            <div class="panel-body">
                <form action="{{ route('diadiem.store') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <label>Tỉnh</label>
                    <input type="text" class="form-control" name="tendiadiem">

                    <div align="center">
                        <button type="submit" class="btn btn-success">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection