dem = 0;
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

    if($('div').hasClass('loiDatTour')){
        $('#DatTour').modal();
    }
    if($('div').hasClass('successDatTour')){
        alert('Đặt tour thành công.');
    }

    if($('div').hasClass('loiSuaThongTin') || $('div').hasClass('successSuaThongTin')){
        $('#SuaThongTin').modal();
    }

    $("#changePassword").change(function(){
        if($(this).is(":checked")){
            $(".password").removeAttr('disabled');
        }else{
            $(".password").attr('disabled', '');
        }
    });

    if($('div').hasClass('thanhcongTT')){
        alert('Thanh toán thành công.');
    }

    $('#bl').click(function(){  
        $('#thongtinhdv').hide();
        $('#danhgia').hide();
        $('#comments').show();
    });

    $('#tthdv').click(function(){
        $('#comments').hide();
        $('#danhgia').hide();
        $('#thongtinhdv').show();
    });

    $('#dg').click(function(){
        $('#comments').hide();
        $('#thongtinhdv').hide();
        $('#danhgia').show();
    });

    $('.glyphicon-star').click(function(){
        danhgia = $(this).attr('id');
        for(var i = 1; i <= 5; i++){
            dg = '#dg' + i;
            if(i <= danhgia[2]){        
                $(dg).css('color', 'yellow');
            }else{
                $(dg).css('color', '#DDDDDD');
            }
        }
        $('#sodiemdanhgia').val(danhgia[2]);
    });

    if($('div').hasClass('successRate')){
        alert('Cảm ơn bạn đã đánh giá tour.');
        $('#thongtinhdv').hide();
        $('#danhgia').show();
    }else if($('div').hasClass('errorRate')){
        alert('Lỗi đánh giá.');
        $('#thongtinhdv').hide();
        $('#danhgia').show();
    }

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

            $.post("binhluan", {noidung:noidung, parent_id:id, tour_id:tour_id, _token:_token}, function(data){
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

            $.post("binhluan", {noidung:noidung, parent_id:0, tour_id:tour_id, _token:_token}, function(data){
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

    $("#top-search-trigger").click(function(){
        $('.stretched').toggleClass("top-search-open");
    });

    $('#timkiem').keyup(function(){
        var timkiem = $(this).val();
        var _token = $('#hiddenSearch').val();
        if(timkiem.length > 3){
            $('#divtimkiem').show();
            $.ajax({
                url: "timkiem",
                method: "post",
                data: {search:timkiem, _token:_token},
                dataType: "text",
                success: function(data){
                    var data = JSON.parse(data);
                    if (data.soluong > 0) {
                        var stringds = '';
                        if (data.soluong <= 7) {
                            for (var i = 0; i < data.soluong; i++) {
                                stringds += '<li class="dskq"><img src="upload/' + data.ketqua[i]['hinhanh'] + '"> <a href = "chi-tiet/' + data.ketqua[i]['id'] + '">' + data.ketqua[i]['tentour'] + '</a><br><span>' + data.ketqua[i]['giatour'] + ' VNĐ</span></li>';
                            }
                        }else{
                            for (var i = 0; i < 7; i++) {
                                stringds += '<li class="dskq"><img src="upload/' + data.ketqua[i]['hinhanh'] + '"> <a href = "chi-tiet/' + data.ketqua[i]['id'] + '">' + data.ketqua[i]['tentour'] + '</a><br><span>' + data.ketqua[i]['giatour'] + ' VNĐ</span></li>';
                            }
                            stringds += '<li align="center"><b><a href="tim-kiem?timkiem=' + timkiem + '"><< Xem tat ca >></a></b></li>';
                        }
                        $('#dsketqua').html(stringds);               
                    }else{
                        $('#dsketqua').html('<li>Khong tim thay ket qua yeu cau</li>');
                    }                    
                }
            });
        }else{
            $('#divtimkiem').hide();
        }
    });

    $('#timkiem').blur(function(){
        setTimeout(function(){
            $('#divtimkiem').hide()
        }, 200);
    });

    $('.edit-bill').click(function(){
        if(dem == 0){
            var id = $(this).attr('id').substring(10);
            $(".edit-bill").hide();
            $(this).show().removeClass('edit-bill').attr('id','btnEditBill').attr('onclick','editBill(' + id + ')');
            var thoigianbatdau = $('#time-start-' + id).html();
            var sokhachdangky = $('#quantity-customer-' + id).html();
            $('#time-start-' + id).html('<input type="date" name="thoigianbatdau" value="' + thoigianbatdau + '">');
            $('#quantity-customer-' + id).html('<input type="text" name="sokhachdangky" value="' + sokhachdangky + '">');
        }
        dem++;
    });   

    $('#has-rate').click(function(){
        $('#form-rate').slideToggle();
        $(this).hide();
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
        users_id = $('#formReply-' + id + ' #userReply').val();

        $.post("binhluan", {noidung:noidung, parent_id:id, tour_id:tour_id, _token:_token}, function(data){
            var reply = '<li class="comment byuser comment-author-_smcl_admin odd alt depth-2"><div class="comment-wrap clearfix"><div class="comment-meta"><div class="comment-author vcard"><span class="comment-avatar clearfix"><img alt="" src="upload/' + data.user['anhdaidien'] + '" class="avatar avatar-40 photo" height="40" width="40" /></span></div></div><div class="comment-content clearfix"><div class="comment-author"><a>' + data.user['hoten'] + '</a><span><a>' + data.comment['created_at'] + '</a></span></div><p>' + data.comment['noidung'] + '</p></div></div></li>';
            $('#children-' + id).append(reply);
        }, 'json');

        $('.formReply textarea').val('');
    }
}

function editBill(id){
    var thoigianbatdau = $('#time-start-' + id + ' input[type = date]').val();
    var sokhachdangky = $('#quantity-customer-' + id + ' input[type = text]').val();
    var _token = $('#_token').val();
    
    if(!(sokhachdangky > 0)){
        alert("Số khách đăng ký phải lớn hơn 0");
    }
    else if(!(sokhachdangky == parseInt(sokhachdangky, 10))){
        alert("Số khách đăng ký phải là 1 số nguyên")
    }else if(thoigianbatdau == 0){
        alert("Thời gian không được để trống");
    }else {
        $.post("suadonhang", {id:id, thoigianbatdau:thoigianbatdau, _token:_token, sokhachdangky:sokhachdangky}, function(data){
            if(data.flag == true){
                alert('Lỗi Số khách đăng ký hoặc thời gian bắt đầu.');
            }else {
                $('#time-start-' + id).html(thoigianbatdau);
                $('#quantity-customer-' + id).html(sokhachdangky);
                $('#btnEditBill').after('<strong style="color:green">Sửa thành công<strong>');
                $('#btnEditBill').remove();
                $('.edit-bill').show();
                dem = 0;
            }
        }, 'json');
    }
}