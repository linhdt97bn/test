$(document).ready(function() {
    if($('div').hasClass('loiDangKyKhach') || $('div').hasClass('thanhcongkhach')){
        $('#DangKyKhach').modal();
    }
    if($('div').hasClass('loiDangKyHDV') || $('div').hasClass('thanhconghdv')){
        $('#DangKyHDV').modal();
    }
    if($('div').hasClass('loiLogin') || $('div').hasClass('loiDangNhap')){
        $('#DangNhap').modal();
    }

    $('#bl').click(function(){  
        $('#thongtinhdv').hide();
        $('#comments').show();
    })

    $('#tthdv').click(function(){
        $('#comments').hide();
        $('#thongtinhdv').show();
    })

    $('.tlbl').click(function(){
        traloi = $(this).attr('href');
        var flag = true;
        if($(traloi).css('display') == 'block'){
            flag = false;
        }
        $('.traloi').slideUp();
        if(flag == true){
            $(traloi).slideToggle();
        }
        $('.formtraloi').val('');
    });

    $('.guitraloi').click(function(){
        var idbl = $(this).attr('id');
        idbl = idbl.substring(9, idbl.length);
        noidung = $('#tlbl' + idbl + ' #traloi').val();
        noidung = noidung.replace(/\n/g, "<br>")
        _token = $('#hiddenbinhluan').val();
        tour_id = $('#tour_id').val();
        users_id = $('#users_id').val();
        $.post("binhluan", {noidung: noidung, parent_id:idbl, _token:_token, tour_id:tour_id, users_id:users_id}, function(data){              
            if (data.messages == "") {
                alert(data.messages);
            }else{
                $('#dstraloi' + idbl + ' .divdstl').append(data.messages);                     
            }
        }, 'json');
        $('#tlbl' + idbl + ' #traloi').val('').attr('rows',1);
    });

    $('.guibinhluan').click(function(){
        noidung = $('.formbinhluan').val();
        noidung = noidung.replace(/\n/g, "<br>")

        _token = $('#hiddenbinhluan').val();
        tour_id = $('#tour_id').val();
        users_id = $('#users_id').val();
        console.log(noidung + ' ' + _token + ' ' + tour_id + ' ' + users_id); 
        $.post("binhluan", {noidung:noidung, parent_id:0, tour_id:tour_id, users_id:users_id, _token:_token}, function(data){          
            if (data.messages == "") {
                alert('Nội dung bình luận không được để trống.');
            }else{
                $('.dsbinhluan').append(data.messages);                  
            }
        }, 'json');
        $('#no-comment').hide();
        $('.formbinhluan').val('').attr('rows',2);
    });

    $('.reply-comment').click(function(){
        var id = $(this).attr('id').substring(14);
        var flag = true;
        if($('#formReply-' + id).css('display') == 'block'){
            flag = false;
        }
        $('.formReply').slideUp();
        $('.formReply textarea').val('');
        if(flag == true){
            $('#formReply-' + id).slideToggle();
        }
    });

    $('.btnReply').click(function(){
        var id = $(this).attr('id').substring(9);
        var noidung = $('#formReply-' + id + ' #noidungReply').val();
        if(noidung.length == 0){
            alert('Nội dung trả lời không được để trống..');
        }else{
            noidung = noidung.replace(/\n/g, "<br>");
            _token = $('#formReply-' + id + ' #tokenReply').val();
            tour_id = $('#formReply-' + id + ' #tourReply').val();
            users_id = $('#formReply-' + id + ' #userReply').val();

            $.post("binhluan", {noidung:noidung, parent_id:id, tour_id:tour_id, users_id:users_id, _token:_token}, function(data){
                var reply = '<li class="comment byuser comment-author-_smcl_admin odd alt depth-2"><div class="comment-wrap clearfix"><div class="comment-meta"><div class="comment-author vcard"><span class="comment-avatar clearfix"><img alt="" src="upload/' + data.user['anhdaidien'] + '" class="avatar avatar-40 photo" height="40" width="40" /></span></div></div><div class="comment-content clearfix"><div class="comment-author"><a>' + data.user['hoten'] + '</a><span><a>' + data.comment['created_at'] + '</a></span></div><p>' + data.comment['noidung'] + '</p></div></div></li>';
                $('#children-' + id).append(reply);
            }, 'json');

            $('.formReply textarea').val('');
        }
    });

    $('#btnComment').click(function(){
        var noidung = $('#noidungComment').val();
        if(noidung.length == 0){
            alert('Vui long nhap noi dung binh luan');
        }else{
            noidung = noidung.replace(/\n/g, "<br>");
            _token = $('#tokenComment').val();
            tour_id = $('#tourComment').val();
            users_id = $('#userComment').val();

            $.post("binhluan", {noidung:noidung, parent_id:0, tour_id:tour_id, users_id:users_id, _token:_token}, function(data){
                var comment =   '<li class="comment even thread-even depth-1" id="li-comment-' + data.comment['id'] + '"><div id="comment-' + data.comment['id'] + '" class="comment-wrap clearfix"><div class="comment-meta"><div class="comment-author vcard"><span class="comment-avatar clearfix"><img alt="" src="upload/' + data.user['anhdaidien'] + '" class="avatar avatar-60 photo avatar-default" height="60" width="60" /></span></div></div><div class="comment-content clearfix"><div class="comment-author"><a>' + data.user['hoten'] + '</a><span><a>' + data.comment['created_at'] + '</a></span></div><p>' + data.comment['noidung'] + '</p></div><div class="clear"></div></div><ul class="children" id="children-' + data.comment['id'] + '"></ul><a class="reply-comment" onclick="clickReply(' + data.comment['id'] + ')">Reply<i class="icon-reply"></i></a></li><div class="col_full formReply" id="formReply-' + data.comment['id'] + '" style="display: none"><textarea name="reply" id="noidungReply" cols="58" rows="4" tabindex="4" class="sm-form-control"></textarea><input type="hidden" name="_token" id="tokenReply" value="{{csrf_token()}}"><input type="hidden" name="users_id" id="userReply" value="' + data.user_id + '"><input type="hidden" name="tour_id" id="tourReply" value="'+ data.tour_id +'"><button onclick="sendReply(' + data.comment['id'] + ')" tabindex="5" value="Submit" class="button button-3d btnReply">Reply</button></div>';
                $('#listComment').append(comment);  
            }, 'json');
            $('#noidungComment').val('');
        }
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 500) {
            $('#gotoTop').fadeIn(200);
        } else {
            $('#gotoTop').fadeOut(200);
        }
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('#header-wrap').css({'background-color':'lavender', 'height':'70px'});
            $('#primary-menu .current a').css('padding', '24px 15px');
            $('#primary-menu .user').css('padding', '5px 15px');
            $('#primary-menu .current li a').css('padding', '10px 15px');
            $('#top-search').css('margin', '25px 0 25px 15px');
            $('#logo img').css({'height':'70px'});
        } else {
            $('#header-wrap').css({'background-color':'#FFFFCC', 'height':'100px'});
            $('#primary-menu .current a').css('padding', '39px 15px');
            $('#primary-menu .user').css('padding', '20px 15px');
            $('#primary-menu .current li a').css('padding', '10px 15px');
            $('#top-search').css('margin', '40px 0 40px 15px');
            $('#logo img').css({'height':'100px'});
        }
    });
    
    $('#gotoTop').click(function() {
        $('body, html').animate({
            scrollTop : 0
        }, 700);
    })
});

function clickReply(id){
    var flag = true;
    if($('#formReply-' + id).css('display') == 'block'){
        flag = false;
    }
    $('.formReply').slideUp();
    $('.formReply textarea').val('');
    if(flag == true){
        $('#formReply-' + id).slideToggle();
    }
};


function sendReply(id){
    var noidung = $('#formReply-' + id + ' #noidungReply').val();
    if(noidung.length == 0){
        alert('Nội dung trả lời không được để trống.');
    }else{
        noidung = noidung.replace(/\n/g, "<br>");
        _token = $('#tokenComment').val();
        tour_id = $('#formReply-' + id + ' #tourReply').val();
        users_id = $('#formReply-' + id + ' #userReply').val();

        $.post("binhluan", {noidung:noidung, parent_id:id, tour_id:tour_id, users_id:users_id, _token:_token}, function(data){
            var reply = '<li class="comment byuser comment-author-_smcl_admin odd alt depth-2"><div class="comment-wrap clearfix"><div class="comment-meta"><div class="comment-author vcard"><span class="comment-avatar clearfix"><img alt="" src="upload/' + data.user['anhdaidien'] + '" class="avatar avatar-40 photo" height="40" width="40" /></span></div></div><div class="comment-content clearfix"><div class="comment-author"><a>' + data.user['hoten'] + '</a><span><a>' + data.comment['created_at'] + '</a></span></div><p>' + data.comment['noidung'] + '</p></div></div></li>';
            $('#children-' + id).append(reply);
        }, 'json');

        $('.formReply textarea').val('');
    }
}
