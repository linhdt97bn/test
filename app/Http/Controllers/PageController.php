<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangKyRequest;
use App\Http\Requests\DangNhapRequest;
use App\Http\Requests\DatTourRequest;
use App\Http\Requests\SuaNguoiDungRequest;
use App\User;
use Hash;
use Auth;
use App\Tour;
use App\Bill;
use App\Rate;
use App\Roadmap;
use App\RoadmapPlace;
use Illuminate\Support\Facades\Session;
class PageController extends Controller
{
    
    public function getTrangChu()
    {
        $tour=Tour::where('status', 1)->paginate(12);
        return view('client.page_client.trangchu', compact('tour'));
    }

    public function postDangKy(DangKyRequest $req)
    {
    	for ($i=0; $i < strlen($req->phone); $i++) { 
            if (!((0 < $req->phone[$i] && $req->phone[$i] <= 9) || $req->phone[$i] === '0')) {
                return redirect()->back()->with('error_phone', 'Kiểm tra lại số điện thoại.');
            } 
    	}
        $password = $req->password;
        $req->merge([
            'password' => Hash::make($password),
            'avatar' => 'nouser.jpg'
        ]);

        if ($req->role == 1 || $req->role == 2) {
            User::create($req->all());
            Auth::attempt(['email' => $req->email, 'password' => $password]);        
        }
        return redirect()->back();   
    }

    public function postDangNhap(DangNhapRequest $req)
    {
        $check_user = ['email' => $req->email, 'password' => $req->password];
        if(Auth::attempt($check_user, $req->ghinho)){
            return redirect()->back();
        }else{
            return redirect()->back()->with('error_login', 'Sai tài khoản hoặc mật khẩu!');
        }
    }

    public function getDangXuat()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    public function getTourDiaDiem($iddd)
    {
        $place_id = RoadmapPlace::tourPlace($iddd);
        $tour_id = Roadmap::getDistinctTourId($place_id);
        $tour_place = Tour::find($tour_id);
        return view('client.page_client.danhsachtour', compact('tour_place'));
    } 

    public function getTourCuaHdv($idhdv)
    {
        $tour_hdv = Tour::where([['users_id', $idhdv], ['status', 1]])->paginate(12);
        return view('client.page_client.danhsachtour', compact('tour_hdv'));
    }

    public function getDanhGia($idtour, Request $request)
    {
        if($request->sodiem == 0) return redirect()->back()->with('errorRate', 'Lỗi đánh giá!');

        $flag = false;
        $tour = Tour::find($idtour);
        if ($tour) {
            foreach ($tour->bill as $value) {
                if ($value->status == 4 && $value->users_id == Auth::user()->id) {
                    $flag = true;
                    break;
                }
            }
        }

        if ($flag) {
            $rate = Rate::where([['tour_id', $tour->id], ['users_id', Auth::user()->id]])->get();
            if (count($rate) > 0) {
                return redirect()->back()->with('errorRate', 'Lỗi đánh giá!');
            }else {
                $request->merge([
                    'tour_id' => $idtour,
                    'users_id' => Auth::user()->id,
                    'point' => $request->sodiem
                ]);
                Rate::create($request->all());
                return redirect()->back()->with('successRate', 'Cảm ơn bạn đã đánh giá tour');
            }        
        }else {
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
            if (!((0 < $request->phone[$i]  && $request->phone[$i] <= 9 ) || $request->phone[$i] === '0')) {
                return redirect()->back()->with('error_edit_phone', 'Kiểm tra lại số điện thoại.');
            }
        }

        if (is_numeric($request->birthday)) {
            $y = date('Y');
            if (!(($y - $request->birthday <= 100) && ($y - $request->birthday >= 3))) {
                return redirect()->back()->with('error_birthday', 'Vui lòng nhập đúng năm sinh');
            }
        }
    
        if ($request->hasFile('anhdaidien')) {
            $file = $request->file('anhdaidien');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('error_avatar', 'Định dạng ảnh phải là jpg, png, jpeg');
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
        return redirect()->back()->with('success_edit_user', 'Sửa thông tin thành công');
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);
        return redirect()->back();
    }
}
