@extends('client.layout_client.master_client')

@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container">
            @if(isset($tour))
                <div class="row">
                    <?php $j = 0; ?>
                    @foreach($tour as $tr)
                        <?php $j += 0.1; ?>
                        <div class="col-md-3 col-sm-4 wow zoomIn" data-wow-delay="<?php echo $j; ?>s">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="{{route('chi-tiet', $tr->id)}}">
                                        <img src="upload/{{$tr->hinhanh}}" width="360" height="250" class="img-responsive">
                                        <span class="price"> {{number_format($tr->giatour)}} <sup>VND</sup></span>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3>{{$tr->tentour}}</h3>
                                    <div class="rating">
                                        @for($k = 0; $k < 5; $k++)
                                            @if($k < $tr->rate->avg('sodiem'))
                                                <i class="icon-smile voted"></i>
                                            @else
                                                <i class="icon-smile"></i>
                                            @endif
                                        @endfor
                                        <span>({{$tr->rate->count()}} luot danh gia)</span>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center paginate">{{$tour->links()}}</div>
            @endif
        </div>
    </div>
</section>
@endsection
