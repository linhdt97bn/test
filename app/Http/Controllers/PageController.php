<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangKyKhachRequest;
use App\Http\Requests\DangKyHDVRequest;
use App\Http\Requests\DangNhapRequest;
use App\Http\Requests\DatTourRequest;
use App\Http\Requests\SuaNguoiDungRequest;
use App\User;
use Hash;
use Auth;
use App\Tour;
use App\Bill;
use App\Rate;

class PageController extends Controller
{
    
    public function getTrangChu()
    {
        $tour=Tour::where('trangthaitour', 1)->paginate(12);
        return view('client.page_client.trangchu', compact('tour'));
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

    public function getTourDiaDiem($iddd)
    {
        $tourdd = Tour::where([['place_id', $iddd], ['trangthaitour', 1]])->paginate(12);
        return view('client.page_client.danhsachtour', compact('tourdd'));
    } 

    public function getTourCuaHdv($idhdv)
    {
        $tourhdv = Tour::where([['users_id', $idhdv], ['trangthaitour', 1]])->paginate(12);
        return view('client.page_client.danhsachtour', compact('tourhdv'));
    }

    public function postDatTour(DatTourRequest $request)
    {
        $tour = Tour::find($request->idtour);
        if(!($request->sokhachdangky <= $tour->sokhachtoida && $request->sokhachdangky > 0)){
            return redirect()->back()->with('loiKhachMax', 'Số khách đăng ký phải nhỏ hơn số khách tối đa');
        }

        if( strtotime($request->thoigianbatdau) < time()){
            return redirect()->back()->with('loiThoiGian', 'Vui lòng kiểm tra lại thời gian vừa nhập');
        }

        $bill = new Bill();
        $bill->tour_id = $request->idtour;
        $bill->users_id = Auth::user()->id;
        $bill->tongtien = $request->giatour;
        $bill->tinhtrangdon = 0;
        $bill->thoigianbatdau = $request->thoigianbatdau;
        $bill->sokhachdangky = $request->sokhachdangky;
        $bill->save();
        return redirect()->back()->with('successDatTour', 'Gửi đơn đặt tour thành công.');
    }

    public function getLichSu()
    {
        $lichsu = Bill::where('users_id', Auth::user()->id)->paginate(10);
        return view('client.page_client.lichsudattour', compact('lichsu'));
    }

    public function getDanhGia($idtour, Request $request)
    {
        if($request->sodiem == 0) return redirect()->back()->with('errorRate', 'Lỗi đánh giá!');

        $rate = new Rate();
        $rate->tour_id = $idtour;
        $rate->users_id = Auth::user()->id;
        $rate->sodiem = $request->sodiem;
        $rate->save();
        return redirect()->back()->with('successRate', 'Cảm ơn bạn đã đánh giá tour');
    }

    public function getTimkiem(Request $request)
    {
        $tk = $request->timkiem;
        $tourtimkiem = Tour::where([['tentour', 'like', '%'.$tk.'%'],['trangthaitour', 1]])
                ->orwhere([['giatour', $tk], ['trangthaitour', 1]])->paginate(12);

        return view('client.page_client.danhsachtour', compact('tourtimkiem', 'count'));
    }

    public function postSuaThongTin(SuaNguoiDungRequest $request)
    {
        $user = Auth::user();

        if($request->checkpassword == "on"){
            $user->password = bcrypt($request->password);
        }
        if($request->hasFile('anhdaidien')){
            $file = $request->file('anhdaidien');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loiAnhDaiDien', 'Định dạng ảnh phải là jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $anhdaidien= str_random(4)."_".$name;
            while(file_exists("upload".$anhdaidien)){
                $anhdaidien= str_random(4)."_".$name;
            }
            
            $file->move("upload", $anhdaidien);
            $user->anhdaidien = $anhdaidien;
        }

        $flag = 0;
        for ($i=0; $i < strlen($request->sodienthoai); $i++) { 
            if(!((0 < $request->sodienthoai[$i]  && $request->sodienthoai[$i] <= 9 ) || $request->sodienthoai[$i] === '0')){
                $flag = 1;
                break;
            }
        }
        
        if ($flag) {
           return redirect()->back()->with('loiSuaSoDienThoai', 'Kiểm tra lại số điện thoại.');
        }
        
        if (is_numeric($request->namsinh)) {
            $y = date('Y');
            if($y - $request->namsinh  <= 100 && $y - $request->namsinh  >= 3) {
                $user->namsinh = $request->namsinh;
            }else{
                return redirect()->back()->with('loiNamSinh', 'Vui lòng nhập đúng năm sinh');
            }
        }

        $user->hoten = $request->hoten;
        $user->gioitinh = $request->gioitinh;
        $user->sodienthoai=$request->sodienthoai;
        $user->diachi = $request->diachi;
        $user->save();
        return redirect()->back()->with('suathanhcong', 'Sửa thông tin thành công');
    }
}
