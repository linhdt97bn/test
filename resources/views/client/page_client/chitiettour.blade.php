@extends('client.layout_client.master_client')

@section('content')
<section id="content">
    @if($cttour)
        @if($cttour->status != 0)
        <div class="content-wrap">
            @if(count($errors) > 0 && Session::has('edit_roadmap'))
                <div class="alert alert-danger text-center">
                    @foreach($errors->all() as $err)
                        {{ $err }}<br>
                    @endforeach
                </div>
            @elseif(count($errors) > 0 && Session::has('add_roadmap'))
                <div class="alert alert-danger text-center">
                    @foreach($errors->all() as $err)
                        {{ $err }}<br>
                    @endforeach
                </div>
            @endif
                <div class="container clearfix">
                    <div class="postcontent nobottommargin clearfix">     
                        <div class="single-post nobottommargin">
                            <div class="entry clearfix">
                                <div class="entry-title">
                                    <h1>
                                        {{ $cttour->tour_name }}
                                        @if(Auth::check())
                                            @if($cttour->users_id == Auth::user()->id)
                                                <input type="hidden" name="_token" id="tokenRoadmap" value="{{csrf_token()}}">
                                                <input type="hidden" name="tour_id" id="tour_id" value="{{$cttour->id}}">
                                                <button class="add-roadmap btn btn-success">
                                                    Thêm lộ trình cho tour
                                                </button>  
                                            @endif
                                        @endif
                                    </h1>   
                                </div>  
                                <div id="add-roadmap"></div>  

                                <ul class="entry-meta clearfix">
                                    <li><a><i class="icon-calendar3"></i> {{ date('d M Y', strtotime($cttour->created_at)) }}</a></li>
                                    <li><a><i class="icon-user"></i> {{ $cttour->users->email }}</a></li>
                                    <li><a><i class="icon-comments"></i> {{ $cttour->comment->count() }} Comments</a></li>		
                                </ul>
                                <ul class="entry-meta clearfix">
                                    <li><a>Số ngày tham quan: {{ $cttour->roadmap->count() }} ngày</a></li>
                                    <li><a>Số khách tối đa: {{ $cttour->customer_max }} người</a></li>
                                </ul>

                                <div class="entry-image">
                                    <a><img src="upload/{{ $cttour->image_tour }}" alt="Blog Single"></a>
                                </div>

                                <div class="entry-content notopmargin">
                                    <?php $i = 1; ?>
                                    @foreach($cttour->roadmap as $roadmap)
                                        <div id="roadmap-{{ $roadmap->id }}">
                                            <div class="timeline-title" style="float: left">
                                                Ngày {{$i++}}: 
                                                <?php $string = ''; ?>
                                                @foreach($roadmap->roadmap_place as $roadmap_place)
                                                    <?php 
                                                        $string .= $roadmap_place->place->place_name.', '; 
                                                    ?>          
                                                @endforeach
                                                {{ rtrim($string, ', ') }}
                                            </div>
                                            @if(Auth::check())
                                                @if($cttour->users_id == Auth::user()->id)
                                                    <button id="edit-roadmap-{{$roadmap->id}}" class="edit-roadmap btn btn-success">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                    </button>
                                                    <button id="delete-roadmap-{{$roadmap->id}}" class="delete-roadmap btn btn-danger">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                @endif
                                            @endif
                                            <div class="clear"></div>
                                            <div class="description-tour">
                                                {!! $roadmap->description !!}
                                            </div>
                                        </div>                
                                    @endforeach
                                </div>  
                            </div>

                            <div class="post-navigation clearfix text-center">
                                @if(Auth::check())
                                    <?php $co = true ?>
                                    @foreach($cttour->bill as $bll)
                                        @if(($bll->tinhtrangdon == 0 || $bll->tinhtrangdon == 1 || $bll->tinhtrangdon == 3) && $bll->users_id == Auth::user()->id)
                                            <?php $co = false ?>
                                            @break;
                                        @endif
                                    @endforeach

                                    @if($co == false)
                                        <a><em>Bạn đã đặt tour này</em></a>
                                    @else
                                        @if(Auth::user()->role == 1)
                                            <em>{{number_format($cttour->price)}} VNĐ</em><a data-toggle="modal" data-target="#DatTour"><i class="icon-shopping-cart"></i></a>
                                        @endif
                                    @endif
                                @else
                                    <em>{{number_format($cttour->price)}} VNĐ</em><a data-toggle="modal" data-target="#DangNhap"><i class="icon-shopping-cart"></i></a>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-sm-12">			
                                    <ul class="nav nav-tabs">	
                                        <li><a href="#danhgia" data-toggle="tab" id="dg">Đánh giá</a></li>	
                                        <li><a href="#comments" data-toggle="tab" id="bl">Bình luận</a></li>
                                        <li><a href="#thongtinhdv" data-toggle="tab" id="tthdv">Hướng dẫn viên</a></li>               
                                    </ul>
                                </div>
                            </div>

                            <div id="thongtinhdv" class="text-center">
                                <img src="upload/{{$cttour->users->avatar}}" height="200" width="200">
                                <div class="clear"></div>
                                <span>Họ tên: {{ $cttour->users->name }}</span>
                                <span>Email: {{ $cttour->users->email }}</span>
                                <span>Địa chỉ: {{ $cttour->users->address ? $cttour->users->address : "Chưa cập nhật" }}</span>
                                <span>Số điện thoại: {{$cttour->users->phone}}</span>
                                <span>
                                    Giới tính: {{ $cttour->users->gender ? "Nam" : ($cttour->users->gender === 0 ? "Nữ" : "Chưa cập nhật") }}
                                </span>
                                <span><a href="{{route('tour_hdv', $cttour->users->id)}}">Xem các tour khác của hướng dẫn viên</a></span>
                            </div>
                            @include('client.page_client.binhluan')
                            @include('client.page_client.danhgia')
                        </div>
                    </div>    
                    @include('client.page_client.tourlienquan')    
                </div>
            </div>
        @else
            <div class="container-fluid vertical-middle center clearfix">
                <div class="error404">404</div>
                    <div class="heading-block nobottomborder">
                        <h1 class="title">Tour đã bị xóa</h4>
                    </div>
                </div>
            </div>
        @endif  
    @else
        <div class="container-fluid vertical-middle center clearfix">
            <div class="error404">404</div>
                <div class="heading-block nobottomborder">
                    <h1 class="title">Không tìm thấy tour mà bạn yêu cầu</h4>
                </div>
            </div>
        </div>
    @endif
</section>
@endsection
