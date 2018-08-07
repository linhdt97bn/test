<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('change-language/{language}', 'PageController@changeLanguage')->name('user.change-language');

Route::get('/', ['as' => 'trang-chu', 'uses' => 'PageController@getTrangChu']);

Route::post('dang-ky', ['as' => 'dang-ky', 'uses' => 'PageController@postDangKy']);
Route::post('dang-nhap', ['as' => 'dang-nhap', 'uses' => 'PageController@postDangNhap']);
Route::get('dang-xuat', ['as' => 'dang-xuat', 'uses' => 'PageController@getDangXuat']);

Route::get('tour-dia-diem/{iddd}', ['as' => 'tour-dia-diem', 'uses' => 'PageController@getTourDiaDiem']);
Route::get('tour-cua-hdv/{idhdv}', ['as' => 'tour_hdv', 'uses' => 'PageController@getTourCuaHdv']);

Route::get('chi-tiet/{id}', ['as' => 'chi-tiet', 'uses' => 'TourController@show']);

Route::post('dat-tour/{idtour}', ['as' => 'dat-tour', 'uses' => 'BillController@store'])->middleware('CheckKhach');
Route::get('lich-su-dat-tour', ['as' => 'lich-su', 'uses' => 'BillController@index'])->middleware('CheckKhach');

Route::resource('payment', 'PaymentController', ['only' => ['create', 'store']]);

Route::post('danh-gia/{idtour}', ['as' => 'danh-gia', 'uses' => 'PageController@getDanhGia']);
Route::post('sua-thong-tin', ['as' => 'sua-thong-tin', 'uses' => 'PageController@postSuaThongTin']);
Route::get('tim-kiem', ['as' => 'tim-kiem', 'uses' => 'PageController@getTimKiem']);

//xu ly ajax
Route::post('binhluan', 'AjaxController@postBinhLuan');
Route::post('hide-comment', 'AjaxController@postHideComment');
Route::post('delete-comment', 'AjaxController@deleteComment');
Route::get('timkiem', 'AjaxController@getTimKiem');
Route::post('suadonhang', 'AjaxController@postSuaDonHang');
Route::post('xoalotrinh', 'AjaxController@postXoaLoTrinh');
Route::get('laydulieu', 'AjaxController@getLayDuLieu');
Route::get('readed-notification', 'AjaxController@getReaded');

// notification by pusher
Route::post('/notification', 'BillController@notification');
Route::post('/markAsRead', 'BillController@markAsRead');


//--------------------HDV------------------
Route::group(['prefix' => 'hdv','middleware' => 'CheckHDV'], function(){
    Route::get('trang-chu', ['as' => 'trang-chu-hdv', 'uses' => 'HdvController@trangchu']);
    Route::resource('tour', 'TourController');
    Route::post('anhienTour/{id}', ['as' => 'anhienTour','uses' => 'TourController@anhienTour']);
    Route::post('xoatour/{id}', ['as' => 'xoatour','uses' => 'HdvController@postXoaTour']);

    Route::resource('edit-bill', 'BillController', ['only' => 'update']);
    Route::get('list-bill', ['as' => 'list-bill', 'uses' => 'HdvController@getListBill']);

    Route::post('them-lo-trinh', 'HdvController@postThemLoTrinh');
    Route::post('sua-lo-trinh/{id}', 'HdvController@postSuaLoTrinh');

});

//------------------ADMIN------------------
Route::group(['prefix' => 'admin', 'middleware' => 'CheckAdmin'],function(){
    Route::get('trang-chu', ['as' => 'trang-chu-admin', 'uses' => 'AdminController@trangchu']);

    //quan ly nguoi dung
    Route::get('list-user/{idquyen}', ['as' => 'list-user', 'uses' => 'AdminController@getListUser']);
    Route::delete('xoa-user/{id}', ['as' => 'xoa-user', 'uses' => 'AdminController@deleteUser']);
    Route::post('chapnhan/{idhdv}', ['as' => 'cnhdv1', 'uses' => 'AdminController@ChapnhanHdv']);

    //quan ly dia diem
    Route::resource('diadiem', 'DiaDiemController', ['except' => ['show']]);

    //quan ly thong ke
    Route::get('thongke-donhang', ['as' => 'thongke-donhang', 'uses' => 'AdminController@ThongkeDonhang']);
    Route::get('thongke-doanhthu', ['as' => 'thongke-doanhthu', 'uses' => 'AdminController@ThongkeDoanhthu']);

});

