<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Place;
use App\Comment;
use App\Bill;
use App\Tour;
use App\Http\Requests\SuaNguoiDungRequest;

class AdminController extends Controller
{
    public function trangchu(){
        return view('admin.page_admin.trangchu');
    }

    public function getListUser($idquyen){
        if($idquyen == 1){
            $dskhach = User::where('role', 1)->get();
            return view('admin.page_admin.danhsachnguoidung', compact('dskhach'));
        }elseif($idquyen == 2){
            $dshdv = User::where('role', 2)->get();
            return view('admin.page_admin.danhsachnguoidung', compact('dshdv'));
        }
    }

    public function deleteUser($id){
        User::find($id)->delete();
        return redirect()->back()->with('delete_user_success', 'Xóa người dùng thành công.');
    }

    public function ChapnhanHDV($idhdv){
        User::find($idhdv)->update(['status' => 2]);
        return redirect()->back()->with('permit_success', 'Bạn đã cấp quyền thành công.');
    }

    public function ThongkeDonhang(){
        $bill = Bill::all();
        return view('admin.page_admin.thongke', compact('bill'));
    }

    public function ThongkeDoanhthu(){
        $doanhthu = Bill::getIncome();
        return view('admin.page_admin.thongke', compact('doanhthu'));
    }

}
