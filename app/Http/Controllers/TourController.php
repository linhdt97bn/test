<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaoTourRequest;
use App\Tour;
use App\User;
use App\Bill;
use App\Comment;
use App\Rate;
use App\Place;
use Auth;

class TourController extends Controller
{
    
    public function index()
    {
        $tour = Tour::where('users_id', Auth::user()->id)->get();
        return view('hdv.page_hdv.danhsachtour', compact('tour'));
    }

    public function create()
    {
        $dd = Place::all();
        return view('hdv.page_hdv.themtour',compact('dd'));
    }

    public function store(TaoTourRequest $request)
    {       
        $tour = new Tour();
        $tour->users_id = Auth::user()->id;
        $tour->tentour = $request->tentour;
        $tour->place_id = $request->diadiem;
        $tour->songaydi = $request->songaydi;
        $tour->sokhachtoida = $request->sokhachtoida;
        $tour->giatour = $request->giatour;
        $tour->mota = $request->mota;
        $tour->trangthaitour = 1;

        if($request->hasFile('hinhanh')){
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loi','Định dạng ảnh phải là jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            echo $name;
            $hinhanh= str_random(4)."_".$name;
            while(file_exists("upload".$hinhanh)){
                $hinhanh= str_random(4)."_".$name;
            }
            
            $file->move("upload",$hinhanh);
            $tour->hinhanh = $hinhanh;
            $tour->save();
            return redirect()->back()->with('thanhcong','Thêm tour thành công');
        }
        else
        {
            return redirect()->back()->with('loi','Hình ảnh không đưọc để trống');
        }   
    }

    public function show($id)
    {
        $cttour = Tour::find($id);
        if ($cttour) {
            $tourlq = Tour::where('place_id', $cttour->place_id)->inRandomOrder()->get();
        } 
        $tourmoi = Tour::orderBy('created_at', 'desc')->take(6)->get();
        
        return view('client.page_client.chitiettour', compact('cttour', 'tourlq', 'tourmoi'));
    }

    public function edit($id)
    {
        $idt = Tour::find($id);
        $dd = Place::all();
        return view('hdv.page_hdv.themtour', compact('idt','dd'));
    }

    public function update(TaoTourRequest $request, $id)
    {
        $tour = Tour::find($id);
        $tour->tentour = $request->tentour;
        $tour->giatour = $request->giatour;
        $tour->mota = $request->mota;
        $tour->sokhachtoida = $request->sokhachtoida;
        $tour->songaydi = $request->songaydi;
        $tour->place_id = $request->diadiem;
        if($request->hasFile('hinhanh')){
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loi','Định dạng ảnh phải là jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $hinhanh= str_random(4)."_".$name;
            while(file_exists("upload".$hinhanh)){
                $hinhanh= str_random(4)."_".$name;
            }         
            $file->move("upload",$hinhanh);
            $tour->hinhanh = $hinhanh;        
        }
        $tour->save();
        return redirect('hdv/tour')->with('thongbao','Sửa tour thành công');
    }

    public function anhienTour($id)
    {
        $tour = Tour::find($id);
        if($tour->trangthaitour == 1){
            $tour->trangthaitour = 0;
            $tour->save();
            return redirect()->back()->with('thongbao','Ẩn tour thành công');
        }
        else{
            $tour->trangthaitour = 1;
            $tour->save();
            return redirect()->back()->with('thongbao','Hiện tour thành công');
        }    
    }
}
