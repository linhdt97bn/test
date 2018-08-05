<div id="comments" class="clearfix">	
    <ol class="commentlist clearfix" id="listComment">
        @if($cttour->comment->count() > 0)
            @foreach($cttour->comment as $comment)
                @if($comment->parent_id == 0)
                    <li class="comment even thread-even depth-1" id="li-comment-{{ $comment->id }}">
                        <div id="comment-{{$comment->id}}" class="comment-wrap clearfix">
                            <div class="comment-meta">
                                <div class="comment-author vcard">
                                    <span class="comment-avatar clearfix">
                                        <img alt='' src='upload/{{$comment->users->avatar}}' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                                    </span>
                                </div>
                            </div>
                            <div class="comment-content clearfix" id="comment-content-{{ $comment->id }}">
                                <div class="comment-author" ><a>{{$comment->users->name}}</a>
                                    <span><a>{{ date('M d,Y \a\t h:i a', strtotime($comment->created_at)) }}</a></span>
                                    @if(Auth::user()->role == 3)
                                        @if($comment->status == 1)
                                            <button class="btn btn-warning hidden-comment" id="hide-comment-{{ $comment->id }}">Ẩn bình luận</button>
                                        @endif
                                        <button class="btn btn-danger delete-comment" id="delete-comment-{{ $comment->id }}">Xóa bình luận</button>
                                    @endif
                                </div>
                                @if($comment->status == 0)
                                    <p class="hide-comment"> <<<< Bình luận đã bị ẩn >>>> </p>
                                @else
                                    <p>{!! $comment->content !!}</p>
                                @endif
                            </div>
                            <div class="clear"></div>
                        </div>
                        <ul class='children' id="children-{{$comment->id}}">
                            @foreach($cttour->comment as $reply)
                                @if($reply->parent_id == $comment->id)
                                    <li class="comment byuser comment-author-_smcl_admin odd alt depth-2">
                                        <div class="comment-wrap clearfix" id="reply{{ $reply->id }}">
                                            <div class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <span class="comment-avatar clearfix">
                                                        <img alt='' src='upload/{{$reply->users->avatar}}' class='avatar avatar-40 photo' height='40' width='40' />
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="comment-content clearfix">
                                                <div class="comment-author">
                                                    <a>{{$reply->users->name}}</a>
                                                    <span><a>{{ date('M d,Y \a\t h:i a', strtotime($reply->created_at)) }}</a></span>
                                                    <button class="btn btn-danger delete-reply" id="delete-reply-{{ $reply->id }}">Xóa trả lời</button>
                                                </div>
                                                <p>{!! $reply->content !!}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        @if(Auth::check())
                            <a class="reply-comment" id="reply-comment-{{$comment->id}}">Reply<i class="icon-reply"></i></a>
                            <div class="col_full formReply" id="formReply-{{$comment->id}}">
                                <textarea name="reply" id="noidungReply" cols="58" rows="4" tabindex="4" class="sm-form-control"></textarea>
                                <input type="hidden" name="_token" id="tokenReply" value="{{csrf_token()}}">
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
