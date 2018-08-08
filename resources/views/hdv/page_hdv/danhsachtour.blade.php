@extends('hdv.layout_hdv.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('i18n.label.list') }}
                    <small>{{ trans('i18n.label.my_tour') }}</small>
                </h1>
            </div>
            <div class="clear"></div>
            @if(session('success_hide_tour'))
                <div class="alert alert-success text-center">{{ session('success_hide_tour') }}</div>
            @elseif(session('success_show_tour'))
                <div class="alert alert-success text-center">{{ session('success_show_tour') }}</div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('i18n.label.tour_name') }}</th>
                        <th>{{ trans('i18n.label.customer_max_name') }}</th>
                        <th>{{ trans('i18n.label.total_day_name') }}</th>
                        <th>{{ trans('i18n.label.tour_price') }}</th>
                        <th>{{ trans('i18n.label.image') }}</th>
                        <th>{{ trans('i18n.button.edit') }}</th>
                        <th>{{ trans('i18n.label.status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tour as $dst)  
                        <tr class="odd gradeX">
                            <td><a href="{{ route('chi-tiet', $dst->id) }}">{{ $dst->tour_name }}</a></td>
                            <td>{{ $dst->customer_max }}</td>
                            <td>{{ $dst->roadmap->count() }}</td>
                            <td>{{ number_format($dst->price) }}</td>
                            <td>
                                @if(strlen($dst->image_tour) > 0)
                                    <img src="upload/{{ $dst->image_tour }}" width="60" height="60">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('tour.edit', $dst->id) }} ">
                                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>
                                </a>
                            </td>
                            <td>
                                @if($dst->status == 1)
                                    <form action="{{ route('anhienTour', $dst->id) }}" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" onclick="return antour()" class="btn btn-success">{{ trans('i18n.button.show') }}</button>
                                    </form>
                                @else
                                    <form action="{{ route('anhienTour', $dst->id) }}" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" onclick="return hientour()" class="btn btn-danger">{{ trans('i18n.button.hide') }}</button>
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