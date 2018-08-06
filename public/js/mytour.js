var dem = 0;
var dem_dia_diem = 0;
var string_diadiem = '';
var string_diadiem_add = '';
$(document).ready(function() {
    if($('div').hasClass('register')){
        $('#DangKy').modal();
    }

    if($('div').hasClass('login')){
        $('#DangNhap').modal();
    }

    if($('div').hasClass('book-tour')){
        $('#DatTour').modal();
    }


    if($('div').hasClass('edit-user')){
        $('#SuaThongTin').modal();
    }

    $("#changePassword").change(function(){
        if($(this).is(":checked")){
            $(".password").removeAttr('disabled');
        }else{
            $(".password").attr('disabled', '');
        }
    });

    $("#check_request").change(function(){
        if($(this).is(":checked")){
            $(".request").show();
        }else{
            $(".request").hide();
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
                var reply = '<li class="comment byuser comment-author-_smcl_admin odd alt depth-2"><div class="comment-wrap clearfix"><div class="comment-meta"><div class="comment-author vcard"><span class="comment-avatar clearfix"><img alt="" src="upload/' + data.user['avatar'] + '" class="avatar avatar-40 photo" height="40" width="40" /></span></div></div><div class="comment-content clearfix"><div class="comment-author"><a>' + data.user['name'] + '</a><span><a>' + data.comment['created_at'] + '</a></span></div><p>' + data.comment['content'] + '</p></div></div></li>';
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
                var comment =   '<li class="comment even thread-even depth-1" id="li-comment-' + data.comment['id'] + '"><div id="comment-' + data.comment['id'] + '" class="comment-wrap clearfix"><div class="comment-meta"><div class="comment-author vcard"><span class="comment-avatar clearfix"><img alt="" src="upload/' + data.user['avatar'] + '" class="avatar avatar-60 photo avatar-default" height="60" width="60" /></span></div></div><div class="comment-content clearfix"><div class="comment-author"><a>' + data.user['name'] + '</a><span><a>' + data.comment['created_at'] + '</a></span></div><p>' + data.comment['content'] + '</p></div><div class="clear"></div></div><ul class="children" id="children-' + data.comment['id'] + '"></ul><a class="reply-comment" onclick="clickReply(' + data.comment['id'] + ')">Reply<i class="icon-reply"></i></a></li><div class="col_full formReply" id="formReply-' + data.comment['id'] + '" style="display: none"><textarea name="reply" id="noidungReply" cols="58" rows="4" tabindex="4" class="sm-form-control"></textarea><input type="hidden" name="_token" id="tokenReply" value="{{csrf_token()}}"><input type="hidden" name="users_id" id="userReply" value="' + data.user_id + '"><input type="hidden" name="tour_id" id="tourReply" value="'+ data.tour_id +'"><button onclick="sendReply(' + data.comment['id'] + ')" tabindex="5" value="Submit" class="button button-3d btnReply">Reply</button></div>';
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
            $('#header-wrap').css({'height':'70px'});
            $('#primary-menu .current a').css('padding', '24px 15px');
            $('#primary-menu .user').css('padding', '5px 15px');
            $('#primary-menu .current li a').css('padding', '10px 15px');
            $('#top-search').css('margin', '25px 0 25px 0');
            $('#logo img').css({'height':'70px'});
        } else {
            $('#header-wrap').css({'height':'100px'});
            $('#primary-menu .current a').css('padding', '39px 15px');
            $('#primary-menu .user').css('padding', '20px 15px');
            $('#primary-menu .current li a').css('padding', '10px 15px');
            $('#top-search').css('margin', '40px 0 40px 0');
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
        if(timkiem.length > 3){
            $('#divtimkiem').show();
            $.ajax({
                url: "timkiem",
                method: "get",
                data: {search:timkiem},
                dataType: "text",
                success: function(data){
                    var data = JSON.parse(data);
                    if (data.soluong > 0) {
                        var stringds = '';
                        if (data.soluong <= 7) {
                            for (var i = 0; i < data.soluong; i++) {
                                stringds += '<li class="dskq"><img src="upload/' + data.ketqua[i]['image_tour'] + '"> <a href = "chi-tiet/' + data.ketqua[i]['id'] + '">' + data.ketqua[i]['tour_name'] + '</a><br><span>' + data.ketqua[i]['price'] + ' VNĐ</span></li>';
                            }
                        }else{
                            for (var i = 0; i < 7; i++) {
                                stringds += '<li class="dskq"><img src="upload/' + data.ketqua[i]['image_tour'] + '"> <a href = "chi-tiet/' + data.ketqua[i]['id'] + '">' + data.ketqua[i]['tour_name'] + '</a><br><span>' + data.ketqua[i]['price'] + ' VNĐ</span></li>';
                            }
                            stringds += '<li align="center"><b><a href="tim-kiem?timkiem=' + timkiem + '"><< Xem tat ca (' + data.soluong + ') >></a></b></li>';
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
            var adult_number = $('#quantity-customer-adult-' + id).html();
            var child_number = $('#quantity-customer-child-' + id).html();
            $('#time-start-' + id).html('<input type="date" name="thoigianbatdau" value="' + thoigianbatdau + '">');
            $('#quantity-customer-adult-' + id).html('<input type="number" name="adult_number" class="adult_number" value="' + adult_number + '">');
            $('#quantity-customer-child-' + id).html('<input type="number" name="child_number" class="child_number" value="' + child_number + '">');
        }
        dem++;
    });   

    $('#has-rate').click(function(){
        $('#form-rate').slideToggle();
        $(this).hide();
    });

    $('.delete-roadmap').click(function(){
        var id = $(this).attr('id');
        id = id.substring(15, id.length);
        var tokenRoadmap = $('#tokenRoadmap').val();
        var tour_id = $('#tour_id').val();
        $.post("xoalotrinh", {id:id, tour_id:tour_id, _token:tokenRoadmap}, function(data){
            if(data.flag == true){
                alert('Lộ trình của tour không hợp lệ.');
            }else{
                $('#roadmap-' + id).remove();
            }         
        }, 'json');
    });

    $('.edit-roadmap').click(function(){
        $('.edit-roadmap').remove();
        $('.delete-roadmap').remove();
        $('.add-roadmap').remove();
        var edit_roadmap = '';
        var id = $(this).attr('id');
        id = id.substring(13, id.length);
        var tokenRoadmap = $('#tokenRoadmap').val();
        $.get("laydulieu", {id:id}, function(data){
            edit_roadmap += '<form action="hdv/sua-lo-trinh/' + id + '" method="post">';
            edit_roadmap += '<input type="hidden" name="_token" value="' + tokenRoadmap + '">';
            edit_roadmap += '<label class="dd">Địa điểm</label>';
            for (var i = 0; i < data.place_select.length; i++) {
                dem_dia_diem++;
                string_diadiem += data.place_select[i]['place_name'] + ',,';
                edit_roadmap += '<span style="color:red; margin-left: 10px" id="dia_diem' + dem_dia_diem + '">' + data.place_select[i]['place_name'] + '<i class="glyphicon glyphicon-remove" onclick="xoadiadiem(' + dem_dia_diem + ')"></i></span>'
            }
            edit_roadmap += '<select class="form-control diadiem" onchange="thaydoidiadiem()">';
            for (var i = 0; i < data.sodiadiem; i++) {
                edit_roadmap += '<option value="' + data.diadiem[i]['id'] + '">' + data.diadiem[i]['place_name'] + '</option>';
            }
            edit_roadmap += '</select><br>';
            edit_roadmap += '<input type="hidden" name="place" class="place-value" value="' + string_diadiem + '">';
            edit_roadmap += '<label>Mô tả</label>';
            edit_roadmap += '<textarea class="form-control" name="ngay" id="ngay" rows="8">' + data.description['description'] + '</textarea>'; 
            edit_roadmap += '<div align="center" style="margin-top: 15px;"><button class="btn btn-primary">Sửa</button></div>'
            edit_roadmap += '<script>CKEDITOR.replace("ngay");</script>';   
            edit_roadmap += '</form>'         
            $('#roadmap-' + id).html(edit_roadmap);
        }, 'json');
    });

    $('.add-roadmap').click(function(){
        $('.delete-roadmap').remove();
        $('.edit-roadmap').remove();
        $('.add-roadmap').remove();
        var add_roadmap = '';
        var tokenRoadmap = $('#tokenRoadmap').val();
        var idtour = $('#tour_id').val();
        $.get("laydulieu", {}, function(data){
            add_roadmap += '<form action="hdv/them-lo-trinh" method="post">';
            add_roadmap += '<input type="hidden" name="_token" value="' + tokenRoadmap + '">';
            add_roadmap += '<input type="hidden" name="idtour" value="' + idtour + '">';
            add_roadmap += '<label class="dd">Địa điểm</label>';
            add_roadmap += '<select class="form-control diadiem" onchange="thaydoidiadiem()">';
            for (var i = 0; i < data.sodiadiem; i++) {
                add_roadmap += '<option value="' + data.diadiem[i]['id'] + '">' + data.diadiem[i]['place_name'] + '</option>';
            }
            add_roadmap += '</select><br>';
            add_roadmap += '<input type="hidden" name="place" class="place-value" value="' + string_diadiem + '">';
            add_roadmap += '<label>Mô tả</label>';
            add_roadmap += '<textarea class="form-control" name="ngay" id="add-ngay" rows="8"></textarea>'; 
            add_roadmap += '<div align="center" style="margin-top: 15px;"><button class="btn btn-success">Thêm</button></div>'
            add_roadmap += '<script>CKEDITOR.replace("add-ngay");</script>';   
            add_roadmap += '</form>'         
            $('#add-roadmap').html(add_roadmap);
        }, 'json');
    });

    var giatour = $('.form-dattour .giatour').val()
    $('.form-dattour .adult-number').change(function(){
        var adult_number = $(this).val() >= 0 ? $(this).val() : 0;
        var child_number = $('.form-dattour .child-number').val() >= 0 ? $('.form-dattour .child-number').val() : 0;;
        $('.tong-tien').html(giatour * adult_number + giatour * child_number / 2);
    });

    $('.form-dattour .child-number').change(function(){
        var child_number = $(this).val() >= 0 ? $(this).val() : 0;
        var adult_number = $('.form-dattour .adult-number').val() >= 0 ? $('.form-dattour .adult-number').val() : 0;;
        $('.tong-tien').html(giatour * adult_number + giatour * child_number / 2);
    });

    $('.comment-author .hidden-comment').click(function(){
        var id = $(this).attr('id').substring(13);
        var token = $('#tokenComment').val();
        $.post("hide-comment", {id:id, _token:token}, function(data){
        }, 'json');
        $('#comment-content-' + id + ' p').html('<<<< Bình luận đã bị ẩn >>>>').css('color', 'red');
        $(this).remove();
    });

    $('.comment-author .delete-comment').click(function(){
        var flag = confirm('Bạn chắc chắn xóa bình luận này chứ?');
        if(flag) {
            var id = $(this).attr('id').substring(15);
            var token = $('#tokenComment').val();
            $.post("delete-comment", {id:id, _token:token}, function(data){
            }, 'json');
            $('#li-comment-' + id).remove();
        }    
    });

    $('.children .delete-reply').click(function(){
        var flag = confirm('Bạn chắc chắn xóa trả lời này chứ?');
        if(flag) {
            var id = $(this).attr('id').substring(13);
            var token = $('#tokenComment').val();
            $.post("delete-comment", {id:id, _token:token}, function(data){
            }, 'json');
            $('#reply' + id).remove();
        }    
    });

    $('.notification li').click(function(){
        var id = $(this).attr('id').substring(13);
        $.get('readed-notification', {id:id}, function(data){
        }, 'json');
    });

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
            var reply = '<li class="comment byuser comment-author-_smcl_admin odd alt depth-2"><div class="comment-wrap clearfix"><div class="comment-meta"><div class="comment-author vcard"><span class="comment-avatar clearfix"><img alt="" src="upload/' + data.user['avatar'] + '" class="avatar avatar-40 photo" height="40" width="40" /></span></div></div><div class="comment-content clearfix"><div class="comment-author"><a>' + data.user['name'] + '</a><span><a>' + data.comment['created_at'] + '</a></span></div><p>' + data.comment['content'] + '</p></div></div></li>';
            $('#children-' + id).append(reply);
        }, 'json');

        $('.formReply textarea').val('');
    }
}

function editBill(id){
    var thoigianbatdau = $('#time-start-' + id + ' input[type = date]').val();
    var adult_number = $('#quantity-customer-adult-' + id + ' .adult_number').val();
    var child_number = $('#quantity-customer-child-' + id + ' .child_number').val();
    var _token = $('#_token').val();
    
    if(!(adult_number > 0 && child_number >= 0)){
        alert("Số người lớn đăng ký phải lớn hơn 0 và số trẻ nhỏ đăng ký không thể âm.");
    }
    else if(!(adult_number == parseInt(adult_number, 10) && child_number == parseInt(child_number, 10))){
        alert("Số người lớn đăng ký và số trẻ nhỏ đăng ký phải là 1 số nguyên")
    }else if(thoigianbatdau == 0){
        alert("Thời gian không được để trống");
    }else {
        $.post("suadonhang", {id:id, thoigianbatdau:thoigianbatdau, _token:_token, adult_number:adult_number, child_number:child_number}, function(data){
            if(data.flag == true){
                alert('Lỗi Số khách đăng ký hoặc thời gian bắt đầu.');
            }else {
                $('#time-start-' + id).html(thoigianbatdau);
                $('#quantity-customer-adult-' + id).html(adult_number);
                $('#quantity-customer-child-' + id).html(child_number);
                $('#btnEditBill').after('<strong style="color:green">Sửa thành công<strong>');
                $('#btnEditBill').remove();
                $('.edit-bill').show();
                $('.total-price').html(data.total_price + ' VNĐ');
                dem = 0;
            }
        }, 'json');
    }
}

function xoadiadiem(dem_dia_diem){
    var diadiemxoa = $('#dia_diem' + dem_dia_diem).text();
    
    var index = string_diadiem.search(diadiemxoa);
    string_diadiem_left = string_diadiem.substring(0, index);
    string_diadiem_right = string_diadiem.substring(index + diadiemxoa.length + 2, string_diadiem.length);
    string_diadiem = string_diadiem_left + string_diadiem_right;
    $('.place-value').val(string_diadiem);

    $('#dia_diem' + dem_dia_diem).remove();
}

function thaydoidiadiem(){
    var diadiem = $('.diadiem option:selected').text();
    string_diadiem += diadiem + ',,';
    $('.place-value').val(string_diadiem);
    dem_dia_diem++;

    $('.dd').after('<span style="color:red; margin-left: 10px" id="dia_diem' + dem_dia_diem + '">' + diadiem + '<i class="glyphicon glyphicon-remove" onclick="xoadiadiem(' + dem_dia_diem + ')"></i></span>');  
}
