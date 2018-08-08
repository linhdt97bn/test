@extends('hdv.layout_hdv.index')

@section('content')
<div id="page-wrapper">
    <div class="col-md-8 col-sm-8 col-xs-8 col-sm-offset-2">
        @if(session('success_add_tour'))
            <div class="alert alert-success text-center">{{ Session::get('success_add_tour') }}</div>
        @elseif(session('success_edit_tour'))
            <div class="alert alert-success text-center">{{ Session::get('success_edit_tour') }}</div>
        @elseif(session('error_image'))
            <div class="alert alert-danger text-center">{{ Session::get('error_image') }}</div>
        @endif

        @if(!isset($edit_tour))
            <div class="panel panel-default add-tour">
                <div class="btn btn-success">{{ trans('i18n.button.add_tour') }}</div>
                <div class="panel-body">
                    <form action="{{ route('tour.store') }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                        <label>{{ trans('i18n.label.tour_name') }}</label>
                        <span>{{ $errors->first('tentour') }}</span>
                        <input type="text" class="form-control" name="tentour"value="{{ old('tentour') }}">

                        <label>{{ trans('i18n.label.tour_price') }}</label>
                        <span>{{ $errors->first('giatour') }}</span>
                        <input type="text" class="form-control" name="giatour" value="{{ old('giatour') }}">

                        <label>{{ trans('i18n.label.image') }}</label>
                        <span>{{ $errors->first('hinhanh') }}</span>
                        <input type="file" class="form-control" name="hinhanh">

                        <label>{{ trans('i18n.label.customer_max_name') }}</label>
                        <span>{{ $errors->first('sokhachtoida') }}</span>
                        <input type="text" class="form-control" name="sokhachtoida" value="{{ old('sokhachtoida') }}">

                        <label>{{ trans('i18n.label.total_day_name') }}</label>
                        <select class="form-control songaydi" name="songaydi">
                            @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                       
                        <label>{{ trans('i18n.label.roadmap') }}</label>
                        <span>{{$errors->first('ngay1')}}</span>
                        <div class="lotrinhdi">        
                            <div class="lotrinh" id="lotrinh1">
                                <label class="ngaydi">{{ trans('i18n.label.day', ['day' => 1]) }}</label>
                                <label class="dd1">{{ trans('i18n.button.place') }}</label>
                                <select class="form-control diadiem" id="diadiem1">
                                    @foreach($diadiem as $dd)
                                        <option value="{{$dd->id}}">{{$dd->place_name}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="place_1" id="place_1">

                                <label>{{ trans('i18n.label.description') }}</label>
                                <textarea class="form-control ckeditor" name="ngay1" rows="8"></textarea>
                            </div>
                        </div>

                        <div align="center">
                            <button type="submit" class="btn btn-success">{{ trans('i18n.button.add') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="panel panel-default edit-tour">
                <div class="btn btn-success">{{ trans('i18n.button.edit_tour') }}</div>
                <div class="panel-body">
                    <form action="{{route('tour.update', $edit_tour->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 

                        <label>{{ trans('i18n.label.tour_name') }}</label>
                        <span>{{$errors->first('tentour')}}</span>
                        <input type="text" class="form-control" name="tentour"value="{{$edit_tour->tour_name}}">

                        <label>{{ trans('i18n.label.tour_price') }}</label>
                        <span>{{$errors->first('giatour')}}</span>
                        <input type="text" class="form-control" name="giatour" value="{{$edit_tour->price}}">

                        <label>{{ trans('i18n.label.image') }}</label>
                        <span>{{$errors->first('hinhanh')}}</span>
                        <input type="file" class="form-control" name="hinhanh" value="{{$edit_tour->image_tour}}">

                        <label>{{ trans('i18n.label.customer_max_name') }}</label>
                        <span>{{$errors->first('sokhachtoida')}}</span>
                        <input type="text" class="form-control" name="sokhachtoida" value="{{$edit_tour->customer_max}}">

                        <div align="center">
                            <button type="submit" class="btn btn-success">{{ trans('i18n.button.edit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="script"></div>
@endsection