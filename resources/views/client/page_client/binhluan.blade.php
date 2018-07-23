<div id="comments" class="clearfix" style="display: none">	
    <ol class="commentlist clearfix" id="listComment">
        @if($cttour->comment->count() > 0)
            @foreach($cttour->comment as $comment)
                @if($comment->parent_id == 0)
                <li class="comment even thread-even depth-1" id="li-comment-{{$comment->id}}">
                    <div id="comment-{{$comment->id}}" class="comment-wrap clearfix">
                        <div class="comment-meta">
                            <div class="comment-author vcard">
                                <span class="comment-avatar clearfix">
                                    <img alt='' src='upload/{{$comment->users->anhdaidien}}' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                                </span>
                            </div>
                        </div>
                        <div class="comment-content clearfix">
                            <div class="comment-author"><a>{{$comment->users->hoten}}</a>
                                <span><a>April 24, 2012 at 10:46 am</a></span>
                            </div>
                            @if($comment->trangthaibinhluan == 0)
                                <p style="color: red"> <<<< Bình luận đã bị ẩn >>>> </p>
                            @else
                                <p>{!! $comment->noidung !!}</p>
                            @endif
                        </div>
                        <div class="clear"></div>
                    </div>
                    <ul class='children' id="children-{{$comment->id}}">
                        @foreach($cttour->comment as $reply)
                            @if($reply->parent_id == $comment->id)
                            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2">
                                <div class="comment-wrap clearfix">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">
                                            <span class="comment-avatar clearfix">
                                                <img alt='' src='upload/{{$reply->users->anhdaidien}}' class='avatar avatar-40 photo' height='40' width='40' />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-content clearfix">
                                        <div class="comment-author">
                                            <a>{{$reply->users->hoten}}</a>
                                            <span><a>April 25, 2012 at 1:03 am</a></span>
                                        </div>
                                        <p>{!! $reply->noidung !!}</p>
                                    </div>
                                </div>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                    @if(Auth::check())
                    <a class="reply-comment" id="reply-comment-{{$comment->id}}">Reply<i class="icon-reply"></i></a>
                    <div class="col_full formReply" id="formReply-{{$comment->id}}" style="display: none">
                        <textarea name="reply" id="noidungReply" cols="58" rows="4" tabindex="4" class="sm-form-control"></textarea>
                        <input type="hidden" name="_token" id="tokenReply" value="{{csrf_token()}}">
                        <input type="hidden" name="users_id" id="userReply" value="{{Auth::user()->id}}">
                        <input type="hidden" name="tour_id" id="tourReply" value="{{$cttour->id}}">
                        <button id="btnReply-{{$comment->id}}" tabindex="5" class="button button-3d btnReply">Reply</button>
                    </div>
                    @else
                    <a class="reply-comment" data-toggle="modal" data-target="#DangNhap">Reply<i class="icon-reply"></i></a>
                    @endif
                </li>
                @endif
            @endforeach
        @endif
    </ol>
	
    <div id="respond" class="clearfix">
        <h3>Leave a <span>Comment</span></h3>
        @if(Auth::check())
            <div class="col_full">
                <textarea name="comment" id="noidungComment" cols="58" rows="5" tabindex="4" class="sm-form-control"></textarea>
                <input type="hidden" name="_token" id="tokenComment" value="{{csrf_token()}}">
                <input type="hidden" name="users_id" id="userComment" value="{{Auth::user()->id}}">
                <input type="hidden" name="tour_id" id="tourComment" value="{{$cttour->id}}">
            </div>
            <div class="col_full nobottommargin">
                <button id="btnComment" tabindex="5" class="button button-3d nomargin">Submit Comment</button>
            </div>
        @else
            <div class="col_full">
                <textarea name="comment" cols="58" rows="5" tabindex="4" class="sm-form-control"></textarea>
            </div>
            <div class="col_full nobottommargin">
                <a data-toggle="modal" data-target="#DangNhap"><button tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button></a>
            </div>
        @endif
    </div>
</div>
