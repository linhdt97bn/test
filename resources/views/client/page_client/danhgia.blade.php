<div class="row" id="danhgia" style="display: none">
    @if(Session::has('successRate'))
        <div class="successRate"></div>
    @elseif(Session::has('errorRate'))
        <div class="errorRate"></div>
    @endif
    <div class="col-sm-12" style="font-size: 2em; margin: 30px 0 0 30px;">	
        <div class="boxRatingCmt">
            <div class="toprt">		
                <div class="crt">
                    <div class="lcrt" data-gpa="{{round($cttour->rate->avg('sodiem'), 2)}}">
                        <b>{{round($cttour->rate->avg('sodiem'), 2)}}<i class="glyphicon glyphicon-star" style="font-size: 35px"></i></b>
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
                                <span class="t">5 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[5] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[5]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">4 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[4] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[4]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">3 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[3] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[3]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">2 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[2] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[2]}}</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">1 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: {{$sodiem[1] * 100 / $cttour->rate->count()}}%"></div>
                                </div>
                                <span class="c"><strong>{{$sodiem[1]}}</strong> đánh giá</span>
                            </div>
                           @else
                            <div class="r">
                                <span class="t">5 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: 0%"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">4 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: 0%"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">3 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: 0%"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">2 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: 0%"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                            <div class="r">
                                <span class="t">1 <i></i></span>
                                <div class="bgb">
                                    <div class="bgb-in" style="width: 0%"></div>
                                </div>
                                <span class="c"><strong>0</strong> đánh giá</span>
                            </div>
                        @endif   
                    </div>
                </div>
            </div>
        </div>
        <?php $flag =true ?>
        @if(Auth::check())
            @foreach($cttour->bill as $bll)
                @if($bll->users_id == Auth::user()->id && $bll->tinhtrangdon == 4)
                    @foreach($cttour->rate as $rate)
                        @if($rate->users_id == Auth::user()->id)
                            <?php $flag = false ?>
                            <div class="row">
                                <div class="text-center" style="margin-top: 10px; color: #A9A9A9">Bạn đã đánh giá {{$rate->sodiem}} sao cho tour này</div><br>
                            </div>	
                            @break
                        @endif
                    @endforeach
                    @if($flag == true)
                        <div class="text-center" style="margin-top: 10px">
                            <form action="{{route('danh-gia', $cttour->id)}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" >  
                                <i class="glyphicon glyphicon-star" id="dg1" style="color: #DDDDDD;"></i>
                                <i class="glyphicon glyphicon-star" id="dg2" style="color: #DDDDDD;"></i>
                                <i class="glyphicon glyphicon-star" id="dg3" style="color: #DDDDDD;"></i>
                                <i class="glyphicon glyphicon-star" id="dg4" style="color: #DDDDDD;"></i>
                                <i class="glyphicon glyphicon-star" id="dg5" style="color: #DDDDDD;"></i>
                                <input type="hidden" name="sodiem" value="0" id="sodiemdanhgia">
                                <br>
                                <button type="submit">Gửi</button>
                            </form>
                        </div>
                    @endif									
                @break	
                @endif
            @endforeach
        @endif	
    </div>
</div>
