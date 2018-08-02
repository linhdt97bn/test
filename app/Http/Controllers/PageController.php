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
use App\RoadmapPlace;

class PageController extends Controller
{
    
    public function getTrangChu()
    {
        $tour=Tour::where('status', 1)->paginate(12);
        return view('client.page_client.trangchu', compact('tour'));
    }

    public function postDangKyKhach(DangKyKhachRequest $req)
    {
    	for ($i=0; $i < strlen($req->phone); $i++) { 
            if(!((0 < $req->phone[$i]  && $req->phone[$i] <= 9 ) || $req->phone[$i] === '0')){
                return redirect()->back()->with('loiSodienthoai', 'Kiểm tra lại số điện thoại.');
            } 
    	}

        $req->merge([
            'password' => Hash::make($req->password),
            'role' => 1,
            'avatar' => 'nouser.jpg'
        ]);
        User::create($req->all());
        return redirect()->back()->with('thanhcongkhach', 'Đăng ký thành công');
    }

    public function postDangKyHDV(DangKyHDVRequest $req)
    {
        for ($i=0; $i < strlen($req->phone); $i++) { 
            if(!((0 < $req->phone[$i]  && $req->phone[$i] <= 9 ) || $req->phone[$i] === '0')){
                return redirect()->back()->with('loiSodienthoaiHDV', 'Kiểm tra lại số điện thoại.');
            }
        }

        $req->merge([
            'password' => Hash::make($req->password),
            'role' => 2,
            'avatar' => 'nouser.jpg'
        ]);
        User::create($req->all());
        return redirect()->back()->with('thanhconghdv', 'Đăng ký thành công');
    }

    public function postDangNhap(DangNhapRequest $req)
    {
        $check_user = array('email'=>$req->email, 'password'=>$req->password);
        $remember = $req->ghinho;
        if(Auth::attempt($check_user, $remember)){
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
        $tour_place = RoadmapPlace::tourPlace($iddd)->get();
        return view('client.page_client.danhsachtour', compact('tour_place'));
    } 

    public function getTourCuaHdv($idhdv)
    {
        $tour_hdv = Tour::where([['users_id', $idhdv], ['status', 1]])->paginate(12);
        return view('client.page_client.danhsachtour', compact('tour_hdv'));
    }

    public function postDatTour(DatTourRequest $request)
    {
        $tour = Tour::find($request->idtour);

        if(!($request->adult_number + $request->child_number <= $tour->customer_max)){
            return redirect()->back()->with('loiKhachMax', 'Số khách đăng ký phải nhỏ hơn số khách tối đa');
        }

        if( strtotime($request->thoigianbatdau) < time()){
            return redirect()->back()->with('loiThoiGian', 'Vui lòng kiểm tra lại thời gian vừa nhập');
        }

        $checkBill = Bill::where([['users_id', Auth::user()->id], ['status', 0], ['tour_id', $request->idtour]])->first();

        if($checkBill){
            return redirect()->back()->with('loiDonTour', 'Bạn đã đặt tour này rồi.');
        }

        $bill = new Bill();
        $bill->tour_id = $tour->id;
        $bill->users_id = Auth::user()->id;
        $bill->total_price = $tour->price;
        $bill->status = 0;
        $bill->time_start = $request->thoigianbatdau;
        $bill->adult_number = $request->adult_number;
        $bill->child_number = $request->child_number;

        if($request->check_request == "on"){
            $bill->request = $request->request;
        }
        
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

        $flag = false;
        $tour = Tour::find($idtour);
        if($tour){
            foreach ($tour->bill as $value) {
                if($value->tinhtrangdon == 4 && $value->users_id == Auth::user()->id ){
                    $flag = true;
                    break;
                }
            }
        }

        if($flag){
            $rate = Rate::where([['tour_id', $tour->id], ['users_id', Auth::user()->id]])->get();
            if(count($rate) > 0){
                return redirect()->back()->with('errorRate', 'Lỗi đánh giá!');
            }else{
                $rate = new Rate();
                $rate->tour_id = $idtour;
                $rate->users_id = Auth::user()->id;
                $rate->sodiem = $request->sodiem;
                $rate->save();
                return redirect()->back()->with('successRate', 'Cảm ơn bạn đã đánh giá tour');
            }        
        }else{
            return redirect()->back()->with('errorRate', 'Lỗi đánh giá!');
        }
    }

    public function getTimkiem(Request $request)
    {
        $tk = $request->input('timkiem');
        $tour_search = Tour::search($tk)->paginate(12);

        return view('client.page_client.danhsachtour', compact('tour_search'));
    }

    public function postSuaThongTin(SuaNguoiDungRequest $request)
    {
        $user = Auth::user();

        for ($i=0; $i < strlen($request->phone); $i++) { 
            if(!((0 < $request->phone[$i]  && $request->phone[$i] <= 9 ) || $request->phone[$i] === '0')){
                return redirect()->back()->with('loiSuaSoDienThoai', 'Kiểm tra lại số điện thoại.');
            }
        }

        if (is_numeric($request->birthday)) {
            $y = date('Y');
            if(!(($y - $request->birthday <= 100) && ($y - $request->birthday >= 3))) {
                return redirect()->back()->with('loiNamSinh', 'Vui lòng nhập đúng năm sinh');
            }
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
            $request->merge(['avatar' => $anhdaidien]);  
        }

        if($request->checkpassword == "on"){
            $request->merge(['password' => bcrypt($request->password)]);
        }

        $user->update($request->all());
        return redirect()->back()->with('suathanhcong', 'Sửa thông tin thành công');
    }
}
