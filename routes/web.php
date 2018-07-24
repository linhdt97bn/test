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

Route::get('/', ['as' => 'trang-chu', 'uses' => 'PageController@getTrangChu']);


Route::post('dang-ky-khach', ['as' => 'dang-ky-khach', 'uses' => 'PageController@postDangKyKhach']);
Route::post('dang-ky-hdv', ['as' => 'dang-ky-hdv', 'uses' => 'PageController@postDangKyHDV']);
Route::post('dang-nhap', ['as' => 'dang-nhap', 'uses' => 'PageController@postDangNhap']);
Route::get('dang-xuat', ['as' => 'dang-xuat', 'uses' => 'PageController@getDangXuat']);

Route::get('tour-dia-diem/{iddd}', ['as' => 'tour-dia-diem', 'uses' => 'PageController@getTourDiaDiem']);
Route::get('tour-cua-hdv/{idhdv}', ['as' => 'tour_hdv', 'uses' => 'PageController@getTourCuaHdv']);

Route::get('chi-tiet/{id}', ['as' => 'chi-tiet', 'uses' => 'TourController@show']);

Route::post('dat-tour/{idtour}', ['as' => 'dat-tour', 'uses' => 'PageController@postDatTour'])->middleware('CheckKhach');
Route::get('lich-su-dat-tour', ['as' => 'lich-su', 'uses' => 'PageController@getLichSu'])->middleware('CheckKhach');

Route::resource('payment', 'PaymentController', ['only' => ['create', 'store']]);

Route::post('danh-gia/{idtour}', ['as' => 'danh-gia', 'uses' => 'PageController@getDanhGia']);
Route::post('sua-thong-tin', ['as' => 'sua-thong-tin', 'uses' => 'PageController@postSuaThongTin']);
Route::get('tim-kiem', ['as' => 'tim-kiem', 'uses' => 'PageController@getTimKiem']);

//xu ly ajax
Route::post('binhluan', 'AjaxController@postBinhLuan');
Route::post('timkiem', 'AjaxController@postTimKiem');
Route::post('suadonhang', 'AjaxController@postSuaDonHang');


//--------------------HDV------------------
Route::group(['prefix'=>'hdv','middleware'=>'CheckHDV'], function(){
    Route::get('trang-chu',['as' => 'trang-chu-hdv', 'uses'=>'HdvController@trangchu']);
    Route::resource('tour','TourController');
    Route::post('anhienTour/{id}',['as'=>'anhienTour','uses'=>'TourController@anhienTour']);

    Route::get('dsdontour',['as'=>'dsdontour', 'uses'=>'HdvController@getDSdontour']);
    Route::get('dsdontourmoi',['as'=>'dsdontourmoi', 'uses'=>'HdvController@getDSdontourmoi']);
    Route::get('dsdontourchapnhan',['as'=>'dsdontourchapnhan', 'uses'=>'HdvController@getDSdontourchapnhan']);
    Route::get('dsdontourthanhtoan',['as'=>'dsdontourthanhtoan', 'uses'=>'HdvController@getDSdontourthanhtoan']);
    Route::get('edit-bill/{id}','HdvController@getEditBill');

    Route::post('cndontour/{idd}',['as'=>'chapnhan', 'uses'=>'HdvController@postChapnhandon']);
    Route::post('tcdontour/{idd}',['as'=>'tuchoi', 'uses'=>'HdvController@postTuchoidon']);
    Route::post('xacnhan/{idd}',['as'=>'xacnhanditour', 'uses'=>'HdvController@postXacnhanditour']);
    Route::post('xacnhantt/{idd}',['as'=>'xacnhantt', 'uses'=>'HdvController@postXacnhantt']);
    Route::post('xoatour/{id}',['as'=>'xoatour','uses'=>'HdvController@postXoaTour']);
    Route::post('edit-bill/{id}',['as'=>'edit-bill','uses'=>'HdvController@postEditBill']);

});


//------------------ADMIN------------------
Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'],function(){
    Route::get('trang-chu',['as'=>'trang-chu-admin', 'uses'=> 'AdminController@trangchu']);

    //quan ly nguoi dung
    Route::get('list-user/{idquyen}',['as'=>'list-user', 'uses'=> 'AdminController@getListUser']);
    Route::delete('xoa-user/{iduser}',['as'=>'xoa-user', 'uses'=> 'AdminController@deleteUser']);
    Route::post('chapnhan/{idhdv}',['as'=>'cnhdv1', 'uses'=> 'AdminController@ChapnhanHdv']);
    Route::get('edit-user/{id}',['as'=>'edit-user','uses'=>'AdminController@getUserEdit']);
    Route::post('edit-user/{id}',['as'=>'edit-user','uses'=>'AdminController@postUserEdit']);

    //quan ly binh luan
    Route::get('dsbinhluan',['as'=>'dsbinhluan', 'uses'=>'AdminController@DSBinhluan']);
    Route::post('anbinhluan/{idbl}',['as'=>'anbinhluan', 'uses'=>'AdminController@Anbinhluan']);

    //quan ly dia diem
    Route::resource('diadiem','DiaDiemController', ['except'=>['show']]);

    //quan ly thong ke
    Route::get('thongke-donhang',['as'=>'thongke-donhang', 'uses'=> 'AdminController@ThongkeDonhang']);
    Route::get('thongke-doanhthu',['as'=>'thongke-doanhthu', 'uses'=> 'AdminController@ThongkeDoanhthu']);

});

