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
});
