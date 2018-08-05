<div class="row" id="danhgia">
    @if(Session::has('successRate'))
        <div class="successRate"></div>
    @elseif(Session::has('errorRate'))
        <div class="errorRate"></div>
    @endif
    <div class="col-sm-12">	
        <div class="boxRatingCmt">
            <div class="toprt">		
                <div class="crt">
                    <div class="lcrt" data-gpa="{{round($cttour->rate->avg('sodiem'), 2)}}">
                        <b>{{round($cttour->rate->avg('point'), 2)}}<i class="glyphicon glyphicon-star"></i></b>
                        <span>{{$cttour->rate->count()}} đánh giá</span>
                    </div>
                    <div class="rcrt">	
                        @if($cttour->rate->count()>0)
                            <?php
                                $sodiem = ['1'=>0, '2'=>0, '3'=>0, '4'=>0, '5'=>0];
                                foreach($cttour->rate as $rate){
                                    if($rate->sodiem == 1){
                                        $sodiem[1] ++;
                                    }elseif($rate->sodiem == 2){
                                        $sodiem[2] ++;
                                    }elseif($rate->sodiem == 3){
                                        $sodiem[3] ++;
                                    }elseif($rate->sodiem == 4){
                                        $sodiem[4] ++;
                                    }else{
                                        $sodiem[5] ++;
                                    }
                                }
                            ?>
                            <div class="r">
                                <span class="t">5 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[5] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[5]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">4 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[4] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[4]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">3 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[3] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[3]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">2 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[2] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[2]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">1 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[1] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[1]}}</strong> đánh giá</span>
                            </div>
                           @else
                            <div class="r">
                                <span class="t">5 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in no-rates"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">4 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in no-rates"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">3 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in no-rates"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">2 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in no-rates"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">1 <i class="glyphicon glyphicon-star"></i></span>
                                <div class="bgb">
                                    <div class="bgb-in no-rates"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                        @endif   
                    </div>
                </div>
            </div>
        </div>
        <?php $flag =true; ?>
        @if(Auth::check())
            @foreach($cttour->bill as $bll)
                @if($bll->users_id == Auth::user()->id && $bll->status == 4)
                    @foreach($cttour->rate as $rate)
                        @if($rate->users_id == Auth::user()->id)
                            <?php $flag = false; ?>
                            <div class="row">
                                <div class="text-center rated">Bạn đã đánh giá {{ $rate->point }} sao cho tour này</div>
                            </div>	
                            @break
                        @endif
                    @endforeach
                    @if($flag == true)
                        <div class="text-center">
                            <button id="has-rate" class="btn btn-danger">Đánh giá</button>
                            <form action="{{ route('danh-gia', $cttour->id) }}" method="post" id="form-rate">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >  
                                <i class="glyphicon glyphicon-star" id="dg1"></i>
                                <i class="glyphicon glyphicon-star" id="dg2"></i>
                                <i class="glyphicon glyphicon-star" id="dg3"></i>
                                <i class="glyphicon glyphicon-star" id="dg4"></i>
                                <i class="glyphicon glyphicon-star" id="dg5"></i>
                                <input type="hidden" name="sodiem" value="0" id="sodiemdanhgia">
                                <div class="clear"></div>
                                <button type="submit" class="btn btn-danger">Gửi</button>
                            </form>
                        </div>
                    @endif									
                    @break	
                @endif
            @endforeach
        @endif	
    </div>
</div>
