var dem = 0;
var string_diadiem_1 = string_diadiem_2 = string_diadiem_3 = string_diadiem_4 = string_diadiem_5 = '';
var string_diadiem_6 = string_diadiem_7 = string_diadiem_8 = string_diadiem_9 = string_diadiem_10 = '';

$(document).ready(function(){
    $("#changePassword").change(function(){
        if($(this).is(":checked")){
            $(".password").removeAttr('disabled');
        }else{
            $(".password").attr('disabled', '');
        }
    });

    $('.songaydi').change(function(){
    	var songaydi = $(this).val();
        var diadiem = $('.lotrinh select').html();
    	var str = '';
        var string_ckeditor = '';

    	for (var i = 1; i <= songaydi; i++) {
    		str += '<div class="lotrinh" id="lotrinh' + i + '"> <label class="ngaydi">Ngày ' + i + '</label> <label class ="dd' + i + '">Địa điểm</label> <select class="form-control diadiem" id ="diadiem' + i + '" onchange="thaydoidiadiem(' + i + ')"> ' + diadiem + ' </select> <input type="hidden" name="place_' + i + '" id="place_' + i + '"> <label>Mô tả</label> <textarea class="form-control" id="ngay' + i + '" name="ngay' + i + '" rows="8"></textarea> </div>';
            string_ckeditor += '<script>CKEDITOR.replace("ngay' + i + '");</script>';
    	}
    	$('.lotrinhdi').html(str);
        $('.script').html(string_ckeditor);
        string_diadiem_1 = string_diadiem_2 = string_diadiem_3 = string_diadiem_4 = string_diadiem_5 = '';
        string_diadiem_6 = string_diadiem_7 = string_diadiem_8 = string_diadiem_9 = string_diadiem_10 = '';
    }) 

    $('.diadiem').change(function(){
        var diadiem = $('.diadiem option:selected').text();
        var id = $(this).attr('id');
        id = id.substring(7, id.length);
        string_diadiem_1 += diadiem + ',,';  
        dem++;
        $('.dd' + id).after('<span id="dia_diem' + dem + '">' + diadiem + '<i class="glyphicon glyphicon-remove" onclick="xoadiadiem(' + dem + ',' + id + ')"></i></span>');
        $('#place_' + id).val(string_diadiem_1);
    });

    $('#add-place').click(function(){
        $('.add-place').show();
        $('.add-province').hide();
    });

    $('#add-province').click(function(){
        $('.add-province').show();
        $('.add-place').hide();
    });
});

function xoadiadiem(dem, id){
    var diadiemxoa = $('#dia_diem' + dem).text();
    switch(id){
        case 1:
            var index = string_diadiem_1.search(diadiemxoa);
            string_diadiem_1_left = string_diadiem_1.substring(0, index);
            string_diadiem_1_right = string_diadiem_1.substring(index + diadiemxoa.length + 2, string_diadiem_1.length);
            string_diadiem_1 = string_diadiem_1_left + string_diadiem_1_right;
            $('#place_1').val(string_diadiem_1);
            break;
        case 2:
            var index = string_diadiem_2.search(diadiemxoa);
            string_diadiem_2_left = string_diadiem_2.substring(0, index);
            string_diadiem_2_right = string_diadiem_2.substring(index + diadiemxoa.length + 2, string_diadiem_2.length);
            string_diadiem_2 = string_diadiem_2_left + string_diadiem_2_right;
            $('#place_2').val(string_diadiem_2);
            break;
        case 3:
            var index = string_diadiem_3.search(diadiemxoa);
            string_diadiem_3_left = string_diadiem_3.substring(0, index);
            string_diadiem_3_right = string_diadiem_3.substring(index + diadiemxoa.length + 2, string_diadiem_3.length);
            string_diadiem_3 = string_diadiem_3_left + string_diadiem_3_right;
            $('#place_3').val(string_diadiem_3);
            break;
        case 4:
            var index = string_diadiem_4.search(diadiemxoa);
            string_diadiem_4_left = string_diadiem_4.substring(0, index);
            string_diadiem_4_right = string_diadiem_4.substring(index + diadiemxoa.length + 2, string_diadiem_4.length);
            string_diadiem_4 = string_diadiem_4_left + string_diadiem_4_right;
            $('#place_4').val(string_diadiem_4);
            break;
        case 5:
            var index = string_diadiem_5.search(diadiemxoa);
            string_diadiem_5_left = string_diadiem_5.substring(0, index);
            string_diadiem_5_right = string_diadiem_5.substring(index + diadiemxoa.length + 2, string_diadiem_5.length);
            string_diadiem_5 = string_diadiem_5_left + string_diadiem_5_right;
            $('#place_5').val(string_diadiem_5);
            break;
    }
    $('#dia_diem' + dem).remove();
}

function thaydoidiadiem(id){
    var diadiem = $('#diadiem' + id + ' option:selected').text();
    switch(id){
        case 1:
            string_diadiem_1 += diadiem + ',,';
            $('#place_' + id).val(string_diadiem_1);
            break;
        case 2:
            string_diadiem_2 += diadiem + ',,';
            $('#place_' + id).val(string_diadiem_2);
            break;
        case 3:
            string_diadiem_3 += diadiem + ',,';
            $('#place_' + id).val(string_diadiem_3);
            break;
        case 4:
            string_diadiem_4 += diadiem + ',,';
            $('#place_' + id).val(string_diadiem_4);
            break;
        case 5:
            string_diadiem_5 += diadiem + ',,';
            $('#place_' + id).val(string_diadiem_5);
            break;
    }
    dem++;
    $('.dd' + id).after('<span id="dia_diem' + dem + '">' + diadiem + '<i class="glyphicon glyphicon-remove" onclick="xoadiadiem(' + dem + ',' + id + ')"></i></span>');  
}
