@extends('client.layout_client.master_client')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container">
            @if(isset($tour_place))
                <div class="row">
                    <?php $j = 0; ?>
                    @foreach($tour_place as $t_p)
                        <?php $j += 0.1; ?>
                        <div class="col-md-3 col-sm-4 wow zoomIn" data-wow-delay="<?php echo $j; ?>s">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="{{route('chi-tiet', $t_p->id)}}">
                                        <img src="upload/{{$t_p->roadmap->tour->image_tour}}" width="360" height="250" class="img-responsive">
                                        <span class="price">{{number_format($t_p->roadmap->tour->price)}}<sup>VNĐ</sup></span>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3>{{$t_p->roadmap->tour->tour_name}}</h3>
                                    <div class="rating">
                                        @for($k = 0; $k < 5; $k++)
                                            @if($k < $t_p->roadmap->tour->rate->avg('sodiem'))
                                                <i class="icon-smile voted"></i>
                                            @else
                                                <i class="icon-smile"></i>
                                            @endif
                                        @endfor
                                        <span>({{$t_p->roadmap->tour->rate->count()}} lượt đánh giá)</span>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @elseif(isset($tour_hdv))
                <div class="row">
                    <?php $j = 0; ?>
                    @foreach($tour_hdv as $t_hdv)
                        <?php $j += 0.1; ?>
                        <div class="col-md-3 col-sm-4 wow zoomIn" data-wow-delay="<?php echo $j; ?>s">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="{{route('chi-tiet', $t_hdv->id)}}">
                                        <img src="upload/{{$t_hdv->image_tour}}" width="360" height="250" class="img-responsive">
                                        <span class="price">{{number_format($t_hdv->price)}}<sup>VNĐ</sup></span>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3>{{$t_hdv->tour_name}}</h3>
                                    <div class="rating">
                                        @for($k = 0; $k < 5; $k++)
                                            @if($k < $t_hdv->rate->avg('sodiem'))
                                                <i class="icon-smile voted"></i>
                                            @else
                                                <i class="icon-smile"></i>
                                            @endif
                                        @endfor
                                        <span>({{$t_hdv->rate->count()}} lượt đánh giá)</span>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center paginate">{{$tour_hdv->links()}}</div>
            @elseif(isset($tour_search))
            <div class="row">
                <?php $j = 0; ?>
                @foreach($tour_search as $t_s)
                    <?php $j += 0.1; ?>
                    <div class="col-md-3 col-sm-4 wow zoomIn" data-wow-delay="<?php echo $j; ?>s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="{{route('chi-tiet', $t_s->id)}}">
                                    <img src="upload/{{$t_s->image_tour}}" width="360" height="250" class="img-responsive">
                                    <span class="price">{{number_format($t_s->price)}}<sup>VNĐ</sup></span>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3>{{$t_s->tour_name}}</h3>
                                <div class="rating">
                                    @for($k = 0; $k < 5; $k++)
                                        @if($k < $t_s->rate->avg('sodiem'))
                                            <i class="icon-smile voted"></i>
                                        @else
                                            <i class="icon-smile"></i>
                                        @endif
                                    @endfor
                                    <span>({{$t_s->rate->count()}} lượt đánh giá)</span> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row text-center paginate">{{$tour_search->links()}}</div>
            @endif
        </div>
    </div>
</section>
@endsection
