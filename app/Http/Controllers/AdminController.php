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
            $dskhach = User::where('quyen',1)->get();
            return view('admin.page_admin.danhsachnguoidung', compact('dskhach'));
        }elseif($idquyen == 2){
            $dshdv = User::where('quyen',2)->get();
            return view('admin.page_admin.danhsachnguoidung', compact('dshdv'));
        }
    }

    public function getUserEdit($id){
        $dsk = User::find($id);
        return view('admin.page_admin.suathongtinuser', compact('dsk'));
    }

    public function postUserEdit(SuaNguoiDungRequest $request, $id){
        $user = User::find($id);
        if($request->checkpassword == "on"){
        $user->password = bcrypt($request->password);
        }
        if($request->hasFile('anhdaidien')){
            $file = $request->file('anhdaidien');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loi','Định dạng ảnh phải là jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $anhdaidien= str_random(4)."_".$name;
            while(file_exists("upload".$anhdaidien)){
                $anhdaidien= str_random(4)."_".$name;
            }
            
            $file->move("upload",$anhdaidien);
            $user->anhdaidien = $anhdaidien;
        }

        $user->hoten = $request->hoten;
        $user->gioitinh = $request->gioitinh;
        $user->sodienthoai=$request->sodienthoai;
        $user->diachi = $request->diachi;
        $user->save();
        if($user->quyen == 1)
        return redirect('admin/list-user/1')->with('thongbao','Sửa thông tin thành công');
        else
            return redirect('admin/list-user/2')->with('thongbao','Sửa thông tin thành công');
    }

    public function deleteUser($iduser){
        $user = User::find($iduser);
        $user->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }

    public function ChapnhanHDV($idhdv){
        $cn = User::find($idhdv);
        $cn->trangthai =2;
        $cn->save();
        return redirect()->back()->with('thongbao','Bạn đã cấp quyền thành công');
    }

    public function DSBinhluan(){
        $tour = Tour::all();
        return view('admin.page_admin.dsbinhluan', compact('tour'));
    }

    public function Anbinhluan($idbl){
        $comment = Comment::find($idbl);
        $comment->trangthaibinhluan = 0;
        $comment->save();
        return redirect('admin/dsbinhluan')->with('thongbao','Bình luận đã đưọc ẩn');
    }

    public function ThongkeDonhang(){
        $bill = Bill::paginate(12);
        return view('admin.page_admin.thongke', compact('bill'));
    }

    public function ThongkeDoanhthu(){
        $doanhthu = Bill::where('tinhtrangdon',3)->orwhere('tinhtrangdon',4)->get();
        return view('admin.page_admin.thongke', compact('doanhthu'));
    }

}
