@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    @if(session('edit_place_success'))
        <div class="alert alert-success text-center">
            {{ Session::get('edit_place_success') }}
        </div>
    @elseif(session('edit_province_success'))
        <div class="alert alert-success text-center">
            {{ Session::get('edit_province_success') }}
        </div>
    @endif
    @if(count($errors)> 0)
        <div class="alert alert-danger text-center">
            {{ $errors->first('tendiadiem') }}
        </div>
    @endif
    <div class="col-md-8 col-xs-8 col-ms-8 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
        @if(isset($province))
            <div class="panel panel-default edit-place"> 
                <div class="btn btn-success">Sửa địa điểm</div>          
                <div class="panel-body">
                    <form action="{{route('diadiem.update', $place->id)}}" method="post">
                        @method('put')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <label>Tỉnh</label>
                        <select name="province" class="form-control">
                            @foreach($province as $prv)
                                @if($place->parent_id == $prv->id)
                                    <option value="{{$prv->id}}" selected="">{{$prv->place_name}}</option>
                                @else
                                    <option value="{{$prv->id}}">{{$prv->place_name}}</option>
                                @endif
                            @endforeach
                        </select>

                        <label>Địa điểm</label>
                        <input type="text" class="form-control" name="tendiadiem" value="{{$place->place_name}}">

                        <div align="center">
                            <button type="submit" class="btn btn-success">Sửa</button>
                        </div>
                    </form>
                </div>    
            </div>
        @else
            <div class="panel panel-default edit-province"> 
                <div class="btn btn-success">Sửa tỉnh</h2></div>          
                <div class="panel-body">
                    <form action="{{route('diadiem.update',$place->id)}}" method="post">
                        @method('put')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <label>Tỉnh</label>
                        <input type="text" class="form-control" name="tendiadiem" value="{{$place->place_name}}">

                        <div align="center">
                            <button type="submit" class="btn btn-success">Sửa</button>
                        </div>
                    </form>
                </div>    
            </div>
        @endif
    </div>
</div>
@endsection