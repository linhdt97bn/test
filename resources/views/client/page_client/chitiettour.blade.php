@extends('client.layout_client.master_client')

@section('content')
<section id="content">
    @if($cttour)
        @if($cttour->status != 0)
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="postcontent nobottommargin clearfix">     
                    <div class="single-post nobottommargin">
                        <div class="entry clearfix">
                            <div class="entry-title">
                                <h1>{{$cttour->tour_name}}</h1>
                            </div>

                            <ul class="entry-meta clearfix">
                                <li><a><i class="icon-calendar3"></i> {{date('d M Y', strtotime($cttour->created_at))}}</a></li>
                                <li><a><i class="icon-user"></i> {{$cttour->users->email}}</a></li>
                                <li><a><i class="icon-comments"></i> {{$cttour->comment->count()}} Comments</a></li>		
                            </ul>
                            <ul class="entry-meta clearfix">
                                <li><a>Số ngày tham quan: {{$cttour->roadmap->count()}} ngày</a></li>
                                <li><a>Số khách tối đa: {{$cttour->customer_max}} người</a></li>
                            </ul>

                            <div class="entry-image">
                                <a><img src="upload/{{$cttour->image_tour}}" alt="Blog Single"></a>
                            </div>

                            <div class="entry-content notopmargin">
                                <?php $i = 1; ?>
                                @foreach($cttour->roadmap as $roadmap)
                                    <div class="timeline-title" style="box-sizing: border-box; font-size: 20px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">
                                        Ngày {{$i++}}: 
                                        @foreach($roadmap->roadmap_place as $roadmap_place)
                                            {{$roadmap_place->place->place_name}},
                                        @endforeach
                                    </div>
                                    {!! $roadmap->description !!}
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
                                    <li><a href="#thongtinhdv" data-toggle="tab" id="tthdv">Hướng dẫn viên</a></li>
                                    <li><a href="#comments" data-toggle="tab" id="bl">Bình luận</a></li>
                                    <li><a href="#danhgia" data-toggle="tab" id="dg">Đánh giá</a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="thongtinhdv" class="text-center">
                            <img src="upload/{{$cttour->users->avatar}}" height="200" width="200">
                            <div class="clear"></div>
                            <span>Họ tên: {{$cttour->users->name}}</span>
                            <span>Email: {{$cttour->users->email}}</span>
                            <span>Địa chỉ: 
                                @if($cttour->users->address != "") 
                                    {{$cttour->users->address}} 
                                @else 
                                    Chưa cập nhật
                                @endif
                            </span>
                            <span>Số điện thoại: {{$cttour->users->phone}}</span>
                            <span>Giới tính: 
                                @if($cttour->users->gender == 1) 
                                    Nam
                                @elseif($cttour->users->gender === 0)
                                    Nữ
                                @else
                                    Chưa cập nhật
                                @endif
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
