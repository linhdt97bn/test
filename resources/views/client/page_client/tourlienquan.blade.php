<div class="sidebar nobottommargin col_last clearfix">
    <div class="sidebar-widgets-wrap" style="margin-top: 160px">
        <div class="widget clearfix">		
            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
                <ul class="tab-nav clearfix">
                    <li><a>Tour liên quan</a></li>
                </ul>
                <div class="tab-container">
                    <div class="tab-content clearfix" id="tabs-1">
                        <div id="popular-post-list-sidebar">
                            <?php $i = 0; ?>
                            @foreach($tour_lien_quan as $tlq)
                                @if($cttour->id == $tlq->id)
                                    @continue
                                @endif
                                <?php
                                    $i++;
                                    if($i > 6){
                                        break;
                                    }
                                ?>
                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a class="nobg"><img class="rounded-circle" src="upload/{{$tlq->image_tour}}" alt=""></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="{{route('chi-tiet', $tlq->id)}}">{{$tlq->tour_name}}</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>{{ number_format($tlq->price) }} VNĐ</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget clearfix">
            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
                <ul class="tab-nav clearfix">
                    <li><a>Tour mới</a></li>
                </ul>
                <div class="tab-container">
                    <div class="tab-content clearfix" id="tabs-2">
                        <div id="popular-post-list-sidebar">
                            @foreach($tourmoi as $tm)
                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a class="nobg"><img class="rounded-circle" src="upload/{{$tm->image_tour}}" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="{{route('chi-tiet', $tm->id)}}">{{$tm->tour_name}}</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>{{ number_format($tm->price) }} VNĐ</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
