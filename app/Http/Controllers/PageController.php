<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangKyKhachRequest;
use App\Http\Requests\DangKyHDVRequest;
use App\Http\Requests\DangNhapRequest;
use App\User;
use Hash;
use Auth;

class PageController extends Controller
{
    
    public function getTrangChu()
    {
        return view('client.page_client.trangchu');
    }

    public function postDangKyKhach(DangKyKhachRequest $req)
    {
    	$flag = 0;
    	for ($i=0; $i < strlen($req->sodienthoai); $i++) { 
            if(!((0 < $req->sodienthoai[$i]  && $req->sodienthoai[$i] <= 9 ) || $req->sodienthoai[$i] === '0')){
                $flag = 1;
                break;
            } 
    	}

        if ($flag) {
            return redirect()->back()->with('loiSodienthoai', 'Kiểm tra lại số điện thoại.');
        }

        $users = new User();
        $users->hoten = $req->hoten;
        $users->email = $req->email;
        $users->password = Hash::make($req->password);
        $users->anhdaidien = 'nouser.jpg';
        $users->sodienthoai = $req->sodienthoai;
        $users->quyen = 1;
        $users->save();
        return redirect()->back()->with('thanhcongkhach', 'Đăng ký thành công');
    }

    public function postDangKyHDV(DangKyHDVRequest $req)
    {
    	$flag = 0;
        for ($i=0; $i < strlen($req->sodienthoai); $i++) { 
            if(!((0 < $req->sodienthoai[$i]  && $req->sodienthoai[$i] <= 9 ) || $req->sodienthoai[$i] === '0')){
                $flag = 1;
                break;
            }
        }
    	
        if ($flag) {
            return redirect()->back()->with('loiSodienthoaiHDV', 'Kiểm tra lại số điện thoại.');
        }

        $users = new User();
        $users->hoten = $req->hoten;
        $users->email = $req->email;
        $users->password = Hash::make($req->password);
        $users->anhdaidien = 'nouser.jpg';
        $users->sodienthoai = $req->sodienthoai;
        $users->diachi = $req->diachi;
        $users->quyen = 2;
        $users->save();
        return redirect()->back()->with('thanhconghdv', 'Đăng ký thành công');
    }

    public function postDangNhap(DangNhapRequest $req)
    {
        $check_user = array('email'=>$req->email, 'password'=>$req->password);
        $check_admin = array('email'=>$req->email, 'password'=>$req->password, 'quyen'=>3);
        $remember = $req->ghinho;
        if(Auth::attempt($check_admin, $remember)){
            return redirect()->back();
        }else if(Auth::attempt($check_user, $remember)){
            return redirect()->back();
        }else{
            return redirect()->back()->with('loiLogin', 'Sai tài khoản hoặc mật khẩu!');
        }
    }

    public function getDangXuat()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }
}
