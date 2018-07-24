<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tour;
use App\Place;
use App\Bill;
use Auth;

class HdvController extends Controller
{
    public function trangchu(){
    	return view('hdv.page_hdv.trangchu');
    }

    public function getDSdontour(){
        $bill = Tour::where('users_id', Auth::user()->id)->get();
        return view('hdv.page_hdv.danhsachdondattour', compact('bill'));
    }

    public function getDSdontourmoi(){
        $newbill = Tour::where('users_id', Auth::user()->id)->get();
        return view('hdv.page_hdv.danhsachdondattour', compact('newbill'));
    }

    public function getDSdontourchapnhan(){
        $billcn = Tour::where('users_id',Auth::user()->id)->get();
        return view('hdv.page_hdv.danhsachdondattour',compact('billcn'));
    }

    public function getDSdontourthanhtoan(){
        $billtt = Tour::where('users_id', Auth::user()->id)->get();
        return view('hdv.page_hdv.danhsachdondattour', compact('billtt'));
    }

    public function postChapnhandon($idd){
        $don = Bill::find($idd)->update(['tinhtrangdon' => 1]);
        return redirect()->back()->with('thongbao','Chấp nhận thành công');
    }

    public function postTuchoidon($idd){
        $don = Bill::find($idd)->update(['tinhtrangdon' => 2]);
        return redirect()->back()->with('thongbao','Từ chối thành công');
    }

    public function postXacnhanditour($idd){
        $don = Bill::find($idd)->update(['tinhtrangdon' => 4]);
        return redirect()->back()->with('thongbao','Xác nhận thành công');
    }

    public function postXacnhantt($idd){
        $don = Bill::find($idd)->update(['tinhtrangdon' => 3]);
        return redirect()->back()->with('thongbao','Xác nhận thành công');
    }

    public function postXoaTour($id){
        Bill::find($id)->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }

    public function getEditBill($id){
        $bill = Bill::find($id);
        return view('hdv.page_hdv.suabill')->with(compact('bill'));
    }
    public function postEditBill(Request $request,$id){
        $bill = Bill::find($id);
        $max = $bill->tour->sokhachtoida;
        $time = date('Y-m-d');
            $this->validate($request,
                [
                    'sokhachdangky'=>'required|numeric|min:1|max:'.$max,
                    'thoigianbatdau'=>"required|date|after:".$time,
                ],
                [
                    'sokhachdangky.numeric'=>"Nhập vào 1 số",
                    'sokhachdangky.max'=>'Số khách đăng ký vượt quá quy định',
                    'sokhachdangky.required'=>"Nhập vào số khách đăng ký",
                    'sokhachdangky.min'=>"Số khách đăng ký phải lớn hơn 0",
                    'thoigianbatdau.required'=>"Nhập vào thời gian bắt đầu",
                    'thoigianbatdau.date'=>'Không đúng định dạng ngày',
                    'thoigianbatdau.after'=>'Thời gian bắt đầu phải sau ngày hiện tại',
                ]);
        $bill->sokhachdangky = $request->sokhachdangky;
        $bill->thoigianbatdau = $request->thoigianbatdau;
        $bill->save();
        if($bill->tinhtrangdon ==1)
            return redirect('hdv/dsdontourchapnhan')->with('thongbao','Sửa thành công');
        else
            return redirect('hdv/dsdontourthanhtoan')->with('thongbao','Sửa thành công');
    }
}
