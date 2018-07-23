@extends('client.layout_client.master_client')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container">
            @if(isset($tourdd))
                <div class="row">
                    <?php $j = 0; ?>
                    @foreach($tourdd as $tdd)
                        <?php $j += 0.1; ?>
                        <div class="col-md-3 col-sm-4 wow zoomIn" data-wow-delay="<?php echo $j; ?>s">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="{{route('chi-tiet', $tdd->id)}}">
                                        <img src="upload/{{$tdd->hinhanh}}" width="360" height="250" class="img-responsive">
                                        <span class="price">{{number_format($tdd->giatour)}}<sup>VND</sup></span>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3>{{$tdd->tentour}}</h3>
                                    <div class="rating">
                                        @for($k = 0; $k < 5; $k++)
                                            @if($k < $tdd->rate->avg('sodiem'))
                                                <i class="icon-smile voted"></i>
                                            @else
                                                <i class="icon-smile"></i>
                                            @endif
                                        @endfor
                                        <span>({{$tdd->rate->count()}} lượt đánh giá)</span>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center paginate">{{$tourdd->links()}}</div>
            @elseif(isset($tourhdv))
                <div class="row">
                    <?php $j = 0; ?>
                    @foreach($tourhdv as $thdv)
                        <?php $j += 0.1; ?>
                        <div class="col-md-3 col-sm-4 wow zoomIn" data-wow-delay="<?php echo $j; ?>s">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="{{route('chi-tiet', $thdv->id)}}">
                                        <img src="upload/{{$thdv->hinhanh}}" width="360" height="250" class="img-responsive">
                                        <span class="price">{{number_format($thdv->giatour)}}<sup>VND</sup></span>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3>{{$thdv->tentour}}</h3>
                                    <div class="rating">
                                        @for($k = 0; $k < 5; $k++)
                                            @if($k < $thdv->rate->avg('sodiem'))
                                                <i class="icon-smile voted"></i>
                                            @else
                                                <i class="icon-smile"></i>
                                            @endif
                                        @endfor
                                        <span>({{$thdv->rate->count()}} lượt đánh giá)</span>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center paginate">{{$tourhdv->links()}}</div>
            @endif
        </div>
    </div>
</section>
@endsection
